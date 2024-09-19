<div id="report_render" style="width: 75%">
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
    $samples->srand(42);

    $inputs = [
        'min' => 20,
        'max' => 80,
        'count' => 8,
        'decimals' => 2,
        'continuity' => 1
    ];
    $randomData1 = $samples->numbers($inputs);
    $randomData2 = $samples->numbers($inputs);

    $data = [
        ['month' => 'January', 'My First dataset' => $randomData1[0], 'My Second dataset' => $randomData2[0]],
        ['month' => 'February', 'My First dataset' => $randomData1[1], 'My Second dataset' => $randomData2[1]],
        ['month' => 'March', 'My First dataset' => $randomData1[2], 'My Second dataset' => $randomData2[2]],
        ['month' => 'April', 'My First dataset' => $randomData1[3], 'My Second dataset' => $randomData2[3]],
        ['month' => 'May', 'My First dataset' => $randomData1[4], 'My Second dataset' => $randomData2[4]],
        ['month' => 'June', 'My First dataset' => $randomData1[5], 'My Second dataset' => $randomData2[5]],
        ['month' => 'July', 'My First dataset' => $randomData1[6], 'My Second dataset' => $randomData2[6]],
        ['month' => 'August', 'My First dataset' => $randomData1[7], 'My Second dataset' => $randomData2[7]]
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "backgroundColor" => "#4dc9f6",
                "borderColor" => '#4dc9f6',
                "fill" => false,
            ),
            "My Second dataset" => array(
                "backgroundColor" => "#f67019",
                "borderColor" => '#f67019',
                "fill" => false,
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart'
            ),
            "legend" => array(
                "onHover" => "function(event, legendItem) {
						log('onHover: ' + legendItem.text);
					}",
                "onLeave" => "function(event, legendItem) {
						log('onLeave: ' + legendItem.text);
					}",
                "onClick" => "function(event, legendItem) {
						log('onClick:' + legendItem.text);
					}"
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Month'
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Value'
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>
</div>