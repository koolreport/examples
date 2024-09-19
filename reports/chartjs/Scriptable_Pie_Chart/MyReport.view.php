<div id="report_render" style="max-width: 800px;margin: auto;padding: 16px 32px;margin-top: 16px">
    <?php
    class SamplesUtils
    {
        private $seed;

        public function srand($seed)
        {
            $this->seed = $seed;
        }

        public function rand($min = 0, $max = 1)
        {
            $this->seed = ($this->seed * 9301 + 49297) % 233280;
            $random = $min + ($this->seed / 233280) * ($max - $min);
            return $random;
        }

        public function numbers($config = [])
        {
            $min = isset($config['min']) ? $config['min'] : 0;
            $max = isset($config['max']) ? $config['max'] : 1;
            $from = isset($config['from']) ? $config['from'] : [];
            $count = isset($config['count']) ? $config['count'] : 8;
            $decimals = isset($config['decimals']) ? $config['decimals'] : 8;
            $continuity = isset($config['continuity']) ? $config['continuity'] : 1;
            $dfactor = pow(10, $decimals);
            $data = [];

            for ($i = 0; $i < $count; $i++) {
                $value = (isset($from[$i]) ? $from[$i] : 0) + $this->rand($min, $max);
                if ($this->rand() <= $continuity) {
                    $data[] = round($value * $dfactor) / $dfactor;
                } else {
                    $data[] = null;
                }
            }

            return $data;
        }
    }

    $samples = new SamplesUtils();
    if (!isset($_POST['command'])) {
        $samples->srand(110);
    }
    if (isset($_POST['command'])) {
        $samples->srand($_SESSION['seed']);
    }

    $inputs = [
        'min' => -100,
        'max' => 100,
        'count' => 5,
    ];

    $randomDatas = $samples->numbers($inputs);

    $data = [
        ['month' => 'January', 'series1' => $randomDatas[0]],
        ['month' => 'February', 'series1' => $randomDatas[1]],
        ['month' => 'March', 'series1' => $randomDatas[2]],
        ['month' => 'April', 'series1' => $randomDatas[3]],
        ['month' => 'May', 'series1' => $randomDatas[4]],
    ];

    $series = array('month');
    if (!isset($_POST['command'])) {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $_SESSION['cutoutPercentage'] = 0;
        $_SESSION['data'] = $data;
        $_SESSION['seriesCount'] = 1;
        $_SESSION['seriesStart'] = 1;
        for ($i = 1; $i <= $_SESSION['seriesCount']; $i++) {
            array_push($series, "series" . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomize') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        for ($i = 1; $i <= $_SESSION['seriesCount']; $i++) {
            $name = "randomData" . $i;
            $$name = $samples->numbers($inputs);
        }
        $count = count($_SESSION['data']);
        for ($i = 0; $i < $count; $i++) {
            for ($j = 1; $j <= $_SESSION['seriesCount']; $j++) {
                $name = "randomData" . $j;
                $_SESSION['data'][$i]['series' . $j] = $$name[$i];
            }
        }
        for ($i = $_SESSION['seriesStart']; $i <= $_SESSION['seriesCount']; $i++) {
            array_push($series, "series" . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $_SESSION['seriesCount'] = $_SESSION['seriesCount'] + 1;
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $randomData = $samples->numbers($inputs);
        $count = count($_SESSION['data']);
        for ($i = 0; $i < $count; $i++) {
            $_SESSION['data'][$i]['series' . $_SESSION['seriesCount']] = $randomData[$i];
        }
        for ($i = $_SESSION['seriesStart']; $i <= $_SESSION['seriesCount']; $i++) {
            array_push($series, "series" . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'removeDataset') {
        if (count($_SESSION['data'][0]) > 1) {
            foreach ($_SESSION['data'] as &$item) {
                array_splice($item, 1, 1);
            }
            $_SESSION['seriesStart'] = $_SESSION['seriesStart'] + 1;
            for ($i = $_SESSION['seriesStart']; $i <= $_SESSION['seriesCount']; $i++) {
                array_push($series, "series" . $i);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'togglePieDoughnut') {
        if ($_SESSION['cutoutPercentage'] === 0) {
            $_SESSION['cutoutPercentage'] = 50;
        } else {
            $_SESSION['cutoutPercentage'] = 0;
        }
        for ($i = $_SESSION['seriesStart']; $i <= $_SESSION['seriesCount']; $i++) {
            array_push($series, "series" . $i);
        }
    }

    \koolreport\chartjs\PieChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "legend" => false,
            "tooltips" => false,
            "elements" => array(
                "arc" => array(
                    "backgroundColor" => "",
                    "hoverBackgroundColor" => "function(ctx) {
			var v = ctx.dataset.data[ctx.dataIndex];
			var c = v < -50 ? '#D60000'
				: v < 0 ? '#F46300'
				: v < 50 ? '#0358B6'
				: '#44DE28';

			var opacity = 1 - Math.abs(v / 150) - 0.2;

			return Color(c).alpha(opacity).rgbString();
		}",
                )
            ),
            "cutoutPercentage" => $_SESSION['cutoutPercentage']
        )
        // backgroundColor, hoverBackgroundColor phải dùng hàm js để set màu
    ));
    ?>
</div>