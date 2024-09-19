<div style="width: 800px;" id="report_render">
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
        $samples->srand(8);
    } else if (isset($_POST['command'])) {
        $samples->srand($_SESSION['seed']);
    }

    $inputs = [
        'min' => -100,
        'max' => 100,
        'count' => 8,
        'decimals' => 2,
        'continuity' => 1
    ];
    $randomNumbers = $samples->numbers($inputs);


    $fill = [false, 'origin', 'start', 'end',];

    $data = [
        ['month' => 'Feb', 'Dataset' => $randomNumbers[0]],
        ['month' => 'Jan', 'Dataset' => $randomNumbers[1]],
        ['month' => 'Mar', 'Dataset' => $randomNumbers[2]],
        ['month' => 'Apr', 'Dataset' => $randomNumbers[3]],
        ['month' => 'May', 'Dataset' => $randomNumbers[4]],
        ['month' => 'Jun', 'Dataset' => $randomNumbers[5]],
        ['month' => 'Jul', 'Dataset' => $randomNumbers[6]],
        ['month' => 'Aug', 'Dataset' => $randomNumbers[7]],
    ];

    if (!isset($_POST['command'])) {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $_SESSION['data'] = $data;
        $_SESSION['tension'] = 0.000001;
    }
    if (isset($_POST['command']) && $_POST['command'] === "smooth") {
        if ($_SESSION['tension'] === 0.000001) {
            $_SESSION['tension'] = 0.4;
        } else {
            $_SESSION['tension'] = 0.000001;
        }
    }
    if (isset($_POST['command']) && $_POST['command'] === 'randomize') {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $randomNumbers = $samples->numbers($inputs);
        foreach ($_SESSION['data'] as $key => $value) {
            $_SESSION['data'][$key]['Dataset'] = $randomNumbers[$key];
        }
    }

    for ($i = 0; $i < count($fill); $i++) {
    ?>
        <div class="wrapper col-2">
            <?php
            \koolreport\chartjs\AreaChart::create(
                array(
                    'dataSource' => $_SESSION['data'],
                    'columns' => array(
                        'month',
                        'Dataset' => array(
                            "fill" => $fill[$i],
                            "backgroundColor" => "rgba(255, 99, 132, 0.5)",
                            "borderColor" => 'rgb(255, 99, 132)'
                        ),
                    ),
                    "options" => array(
                        "maintainAspectRatio" => false,
                        "spanGaps" => false,
                        "elements" => array(
                            "line" => array(
                                "tension" => $_SESSION['tension']
                            )
                        ),
                        "pulgins" => array(
                            "filler" => array(
                                "propagate" => false
                            )
                        ),
                        "scales" => array(
                            "xAxes" => array(
                                array(
                                    "ticks" => array(
                                        "autoSkip" => false,
                                        "maxRotation" => 0
                                    )
                                )
                            )
                        ),
                        "title" => array(
                            "display" => true,
                            "text" => "fill: " . json_encode($fill[$i])
                        ),
                    ),
                )
            );
            ?>
        </div>
    <?php
    }
    ?>
</div>