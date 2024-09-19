<div id="report_render">
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
        $samples->srand(42);
    } else if (isset($_POST['command'])) {
        $samples->srand($_SESSION['seed']);
    }

    $inputs = [
        'min' => 20,
        'max' => 80,
        'count' => 8,
        'decimals' => 2,
        'continuity' => 1
    ];

    $D0 = [];
    $D1 = [];
    $D2 = [];
    $D3 = [];
    $D4 = [];
    $D5 = [];
    $D6 = [];
    $D7 = [];
    $D8 = [];

    for ($i = 0; $i < 9; $i++) {
        $name = 'D' . $i;
        $$name = $samples->numbers($inputs);
    }

    $data = [
        ['month' => 'January',  'D0' => $D0[0], 'D1' => $D1[0], 'D2' => $D2[0], 'D3' => $D3[0], 'D4' => $D4[0], 'D5' => $D5[0], 'D6' => $D6[0], 'D7' => $D7[0], 'D8' => $D8[0]],
        ['month' => 'February', 'D0' => $D0[1], 'D1' => $D1[1], 'D2' => $D2[1], 'D3' => $D3[1], 'D4' => $D4[1], 'D5' => $D5[1], 'D6' => $D6[1], 'D7' => $D7[1], 'D8' => $D8[1]],
        ['month' => 'March',    'D0' => $D0[2], 'D1' => $D1[2], 'D2' => $D2[2], 'D3' => $D3[2], 'D4' => $D4[2], 'D5' => $D5[2], 'D6' => $D6[2], 'D7' => $D7[2], 'D8' => $D8[2]],
        ['month' => 'April',    'D0' => $D0[3], 'D1' => $D1[3], 'D2' => $D2[3], 'D3' => $D3[3], 'D4' => $D4[3], 'D5' => $D5[3], 'D6' => $D6[3], 'D7' => $D7[3], 'D8' => $D8[3]],
        ['month' => 'May',      'D0' => $D0[4], 'D1' => $D1[4], 'D2' => $D2[4], 'D3' => $D3[4], 'D4' => $D4[4], 'D5' => $D5[4], 'D6' => $D6[4], 'D7' => $D7[4], 'D8' => $D8[4]],
        ['month' => 'June',     'D0' => $D0[5], 'D1' => $D1[5], 'D2' => $D2[5], 'D3' => $D3[5], 'D4' => $D4[5], 'D5' => $D5[5], 'D6' => $D6[5], 'D7' => $D7[5], 'D8' => $D8[5]],
        ['month' => 'July',     'D0' => $D0[6], 'D1' => $D1[6], 'D2' => $D2[6], 'D3' => $D3[6], 'D4' => $D4[6], 'D5' => $D5[6], 'D6' => $D6[6], 'D7' => $D7[6], 'D8' => $D8[6]],
        ['month' => 'August',   'D0' => $D0[7], 'D1' => $D1[7], 'D2' => $D2[7], 'D3' => $D3[7], 'D4' => $D4[7], 'D5' => $D5[7], 'D6' => $D6[7], 'D7' => $D7[7], 'D8' => $D8[7]]
    ];

    if (!isset($_POST['command'])) {
        $seed = $samples->rand();
        $_SESSION['seed'] = $seed;
        $samples->srand($seed);
        $_SESSION['data'] = $data;
        $_SESSION['tension'] = 0.000001;
        $_SESSION['propagate'] = false;
    }
    if (isset($_POST['command']) && $_POST['command'] === "propagate") {
        if ($_SESSION['propagate'] === false) {
            $_SESSION['propagate'] = "value";
        } else {
            $_SESSION['propagate'] = false;
        }
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
        for ($i = 0; $i < 9; $i++) {
            $name = 'D' . $i;
            $$name = $samples->numbers($inputs);
        }
        $count = count($data[0]) - 1;
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            for ($j = 0; $j < $count; $j++) {
                $name = 'D' . $j;
                $_SESSION['data'][$i]["D" . $j] = $$name[$i];
            }
        }
    }

    \koolreport\chartjs\AreaChart::create(
        array(
            'name' => 'MyChart',
            'onReady' => 'runPlugin',
            'dataSource' => $_SESSION['data'],
            'columns' => array(
                'month',
                'D0' => array(
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "label" => 'D0',
                    "config" => array(
                        "hidden" => true,
                    )
                ),
                'D1' => array(
                    "backgroundColor" => 'rgba(255, 159, 64, 0.5)',
                    "borderColor" => 'rgb(255, 159, 64)',
                    "label" => 'D1',
                    "fill" => '-1'
                ),
                'D2' => array(
                    "backgroundColor" => 'rgba(255, 205, 86, 0.5)',
                    "borderColor" => 'rgb(255, 205, 86)',
                    "label" => 'D2',
                    "fill" => 1,
                    "config" => array(
                        "hidden" => true
                    )
                ),
                'D3' => array(
                    "backgroundColor" => 'rgba(75, 192, 192, 0.5)',
                    "borderColor" => 'rgb(75, 192, 192)',
                    "label" => 'D3',
                    "fill" => '-1'
                ),
                'D4' => array(
                    "backgroundColor" => 'rgba(54, 162, 235, 0.5)',
                    "borderColor" => 'rgb(54, 162, 235)',
                    "label" => 'D4',
                    "fill" => '-1'
                ),
                'D5' => array(
                    "backgroundColor" => 'rgba(201, 203, 207, 0.5)',
                    "borderColor" => 'rgb(201, 203, 207)',
                    "label" => 'D5',
                    "fill" => '+2'
                ),
                'D6' => array(
                    "backgroundColor" => 'rgba(153, 102, 255, 0.5)',
                    "borderColor" => 'rgb(153, 102, 255)',
                    "label" => 'D6',
                    "fill" => false
                ),
                'D7' => array(
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "label" => 'D7',
                    "fill" => 8
                ),
                'D8' => array(
                    "backgroundColor" => 'rgba(255, 159, 64, 0.5)',
                    "borderColor" => 'rgb(255, 159, 64)',
                    "label" => 'D8',
                    "fill" => 'end',
                    "config" => array(
                        "hidden" => true,
                    )
                )
            ),
            "options" => array(
                'maintainAspectRatio' => false,
                "spanGaps" => false,
                "elements" => array(
                    "line" => array(
                        "tension" => $_SESSION['tension']
                    )
                ),
                "scales" => array(
                    "yAxes" => array(
                        array(
                            "stacked" => true
                        )
                    )
                ),
                "plugins" => array(
                    "filler" => array(
                        "propagate" => $_SESSION['propagate']
                    ),
                    "samples-filler-analyser" => array(
                        "target" => 'chart-analyser'
                    )
                ),

            )
        )
    );
    ?>
</div>
<script>
    var chartOptions, thisElement;

    function runPlugin() {
        if (!window['firstRunPlugin']) {
            window['firstRunPlugin'] = true;
            (function() {
                Chart.plugins.register({
                    id: 'samples-filler-analyser',

                    beforeInit: function(chart, options) {
                        // chartOptions = options;
                        // console.log('beforeInit chart');
                        // thisElement = document.getElementById(options.target);
                    },

                    afterUpdate: afterUpdateFunc
                });
            }());
            thisElement = document.getElementById('chart-analyser');
        }
    }
    if (!window['firstLoad']) {
        window['firstLoad'] = true;
        setTimeout(function() {
            afterUpdateFunc(MyChart.chart);
        }, 500);
    }

    function afterUpdateFunc(chart) {
        console.log('afterUpdate');
        var datasets = chart.data.datasets;
        var element = thisElement;
        var stats = [];
        var meta, i, ilen, dataset;

        if (!element) {
            return;
        }

        for (i = 0, ilen = datasets.length; i < ilen; ++i) {
            meta = chart.getDatasetMeta(i).$filler;
            if (meta) {
                dataset = datasets[i];
                stats.push({
                    fill: dataset.fill,
                    target: meta.fill,
                    visible: meta.visible,
                    index: i
                });
            }
        }

        thisElement.innerHTML = '<table>' +
            '<tr>' +
            '<th>Dataset</th>' +
            '<th>Fill</th>' +
            '<th>Target (visibility)</th>' +
            '</tr>' +
            stats.map(function(stat) {
                var target = stat.target;
                var row =
                    '<td><b>' + stat.index + '</b></td>' +
                    '<td>' + JSON.stringify(stat.fill) + '</td>';

                if (target === false) {
                    target = 'none';
                } else if (isFinite(target)) {
                    target = 'dataset ' + target;
                } else {
                    target = 'boundary "' + target + '"';
                }

                if (stat.visible) {
                    row += '<td>' + target + '</td>';
                } else {
                    row += '<td>(hidden)</td>';
                }

                return '<tr>' + row + '</tr>';
            }).join('') + '</table>';
    }
</script>