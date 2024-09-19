<div id="report_render" style="max-width: 800px;margin: auto;padding: 16px 32px;">
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
    $data = [];
    for ($i = 0; $i < 32; ++$i) {
        array_push($data, [
            "x" => $samples->rand(-150, 100),
            "y" => $samples->rand(-150, 100),
            "v" => $samples->rand(0, 100),
        ]);
    }
    $series = array('');
    if (!isset($_POST['command'])) {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $_SESSION['data'] = $data;
        $_SESSION['seriesCount'] = 1;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomize') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        foreach ($_SESSION["data"] as &$item) {
            $item['x'] = $samples->rand(-150, 100);
            $item['y'] = $samples->rand(-150, 100);
            $item['v'] = $samples->rand(0, 100);
        }
    }
    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        for ($i = 0; $i < 16; ++$i) {
            array_push($_SESSION['data'], [
                "x" => $samples->rand(-150, 100),
                "y" => $samples->rand(-150, 100),
                "v" => $samples->rand(0, 100),
            ]);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'removeDataset') {
        array_splice($_SESSION['data'], 0, 16);
    }

    \koolreport\chartjs\BubbleChart::create(array(
        'dataSource' => $_SESSION['data'],
        "series" => array(
            array("x", "y", "v")
        ),
        "options" => array(
            "aspectRatio" => 1,
            // "tooltips" => false,
            "legend" => false,
            "elements" => array(
                "point" => array(
                    "backgroundColor" => 'rgb(255, 99, 132)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "borderWidth" => "function(context) {
						return Math.min(Math.max(1, context.datasetIndex + 1), 8);
					}",
                    "hoverBackgroundColor" => 'transparent',
                    "hoverBorderColor" => "function(context) {
                        var COLORS = [
		                    '#4dc9f6',
		                    '#f67019',
		                    '#f53794',
		                    '#537bc4',
		                    '#acc236',
		                    '#166a8f',
		                    '#00a950',
		                    '#58595b',
		                    '#8549ba'
	                    ];
						return COLORS[context.datasetIndex % COLORS.length];
					}",
                    "hoverBorderWidth" => "function(context) {
						var value = context.dataset.data[context.dataIndex];
						return Math.round(8 * value.v / 1000);
					}",
                    "radius" => "function(context) {
						var value = context.dataset.data[context.dataIndex];
						var size = context.chart.width;
						var base = Math.abs(value.v) / 1000;
						return (size / 24) * base;
					}"
                    // backgroundColor, borderColor, hoverBorderColor, hoverBorderWidth, radius đặt giá trị tạm thời để hiện chart,
                    // phải dùng hàm js để set màu
                )
            )
        )
    ));
    ?>
</div>
</div>