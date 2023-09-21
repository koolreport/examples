<div class="report-content">
    <div class="text-center">
        <h1>DonutChart</h1>
        <p class="lead">
            This example shows how to create beautiful DonutChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }

        .actions {
            top: -10px;
            position: relative;
            z-index: 10;
            max-width: 400px;
            margin: 0 auto;
        }

        button {
            color: #fff;
            background: #20b2aa;
            padding: 5px 10px;
            margin: 2px;
            font-weight: bold;
            font-size: 13px;
            border-radius: 5px;
        }

        p {
            margin: 10px 0;
        }

        @media only screen and (max-width: 480px) {
            .actions {
                margin-top: 0;
                left: 0
            }
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'value'
            ],
            [
                44
            ],
            [
                55
            ],
            [
                13
            ],
            [
                33
            ]
        ];
        \koolreport\apexcharts\DonutChart::create(array(
            "name" => "DonutChart1",
            // "title" => "Pie Chart",
            "dataSource" => $data,
            "columns" => array(
                "value"
            ),
            "options" => [
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | show' => false,
                    ]
                ],
                'legend' => [
                    'position' => 'right',
                    'offsetY' => 0,
                ]
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
            "onReady" => "function() {
                // console.log('apexcharts object ready');
                // chart = DonutChart1.chart();
            }"
        ));
        ?>

        <div class="actions">
            <button id="add">
                + ADD
            </button>

            <button id="remove">
                - REMOVE
            </button>

            <button id="randomize">
                RANDOMIZE
            </button>

            <button id="reset">
                RESET
            </button>
        </div>
    </div>

</div>

<script>
    // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
    // Based on https://gist.github.com/blixt/f17b47c62508be59987b
    var _seed = 42;
    Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
    };

    var chart = null;
    KoolReport.load.onDone(function() {
        chart = DonutChart1.chart();
    });

    function appendData() {
        var arr = chart.w.globals.series.slice()
        arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1)
        return arr;
    }

    function removeData() {
        var arr = chart.w.globals.series.slice()
        arr.pop()
        return arr;
    }

    function randomize() {
        return chart.w.globals.series.map(function() {
            return Math.floor(Math.random() * (100 - 1 + 1)) + 1
        })
    }

    function reset() {
        return DonutChart1_settings.series
    }

    document.querySelector("#randomize").addEventListener("click", function() {
        chart.updateSeries(randomize())
    })

    document.querySelector("#add").addEventListener("click", function() {
        chart.updateSeries(appendData())
    })

    document.querySelector("#remove").addEventListener("click", function() {
        chart.updateSeries(removeData())
    })

    document.querySelector("#reset").addEventListener("click", function() {
        chart.updateSeries(reset())
    })
</script>