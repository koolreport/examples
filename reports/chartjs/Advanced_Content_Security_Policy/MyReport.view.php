<div id="content">
    <div class="note">
        In order to support a strict content security policy (<code>default-src 'self'</code>),
        this page manually loads <code>Chart.min.css</code> and turns off the automatic style
        injection by setting <code>Chart.platform.disableCSSInjection = true;</code>.
    </div>
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
    $samples->srand(110);
    $data = [];
    for ($i = 0; $i < 16; ++$i) {
        array_push($data, [
            "x" => $samples->rand(-150, 100),
            "y" => $samples->rand(-150, 100),
            "v" => $samples->rand(0, 100),
            "x1" => $samples->rand(-150, 100),
            "y1" => $samples->rand(-150, 100),
            "v1" => $samples->rand(0, 100)
        ]);
    }

    \koolreport\chartjs\BubbleChart::create(array(
        'dataSource' => $data,
        "series" => array(
            array("x", "y", "v", array(
                "backgroundColor" => '#4dc9f6',
                "borderColor" => '#4dc9f6'
            )),
            array("x1", "y1", "v1", array(
                "backgroundColor" => '#f67019',
                "borderColor" => '#f67019'
            ))
        ),
        "options" => array(
            "aspectRatio" => 1,
            "legend" => false,
            "tooltip" => false,
            "elements" => array(
                "point" => array(
                    "radius" => "function(context) {
						var value = context.dataset.data[context.dataIndex];
						var size = context.chart.width;
						var base = Math.abs(value.v) / 1000;
						return (size / 24) * base;
					}"
                )
            )
        )
    ));
    ?>
</div>