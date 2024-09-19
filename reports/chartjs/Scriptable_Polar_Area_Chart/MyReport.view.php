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
        'min' => 0,
        'max' => 100,
        'count' => 7,
    ];

    $randomDatas = $samples->numbers($inputs);

    $data = [
        ['label' => 'data1', 'value' => $randomDatas[0]],
        ['label' => 'data2', 'value' => $randomDatas[1]],
        ['label' => 'data3', 'value' => $randomDatas[2]],
        ['label' => 'data4', 'value' => $randomDatas[3]],
        ['label' => 'data5', 'value' => $randomDatas[4]],
        ['label' => 'data6', 'value' => $randomDatas[5]],
        ['label' => 'data7', 'value' => $randomDatas[6]],

    ];

    if (!isset($_POST['command'])) {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $_SESSION['data'] = $data;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomize') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $randomData = $samples->numbers($inputs);
        $count = count($_SESSION['data']);
        for ($i = 0; $i < $count; $i++) {
            $_SESSION['data'][$i]['value'] = $randomData[$i];
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addData') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $count = count($_SESSION['data']);
        array_push($_SESSION['data'], ['label' => "data" . $count, 'value' => mt_rand(0, 100)]);
    }

    if (isset($_POST['command']) && $_POST['command'] === 'removeData') {
        array_pop($_SESSION['data']);
    }

    \koolreport\chartjs\PolarChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => array(
            "label",
            "value"
        ),
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
                // backgroundColor, hoverBackgroundColor phải dùng hàm js để set màu
            ),
        )
    ));
    ?>
</div>