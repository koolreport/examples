<div class="report-content">
    <div class="text-center">
        <h1>TimeLineChart</h1>
        <p class="lead">
            This example shows how to create beautiful TimeLineChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'name',
                'position',
                'date_start',
                'date_end',
            ],
            [
                "George Washington",
                "President",
                "1789/4/30",
                "1797/3/4"
            ],
            [
                "John Adams",
                "President",
                "1797/3/4",
                "1801/3/4"
            ],
            [
                "John Adams",
                "Vice President",
                "1789/4/21",
                "1797/3/4"
            ],
            [
                "Thomas Jefferson",
                "President",
                "1801/3/4",
                "1809/3/4"
            ],
            [
                "Thomas Jefferson",
                "Vice President",
                "1797/3/4",
                "1801/3/4"
            ],
            [
                "Thomas Jefferson",
                "Secretary of State",
                "1790/3/22",
                "1793/12/31"
            ],
            [
                "Aaron Burr",
                "Vice President",
                "1801/3/4",
                "1805/3/4"
            ],
            [
                "George Clinton",
                "Vice President",
                "1805/3/4",
                "1812/4/20"
            ],
            [
                "John Jay",
                "Secretary of State",
                "1789/9/25",
                "1790/3/22"
            ],
            [
                "Edmund Randolph",
                "Secretary of State",
                "1794/1/2",
                "1795/8/20"
            ],
            [
                "Timothy Pickering",
                "Secretary of State",
                "1795/8/20",
                "1800/5/12"
            ],
            [
                "Charles Lee",
                "Secretary of State",
                "1800/5/13",
                "1800/6/5"
            ],
            [
                "John Marshall",
                "Secretary of State",
                "1800/6/13",
                "1801/3/4"
            ],
            [
                "Levi Lincoln",
                "Secretary of State",
                "1801/3/5",
                "1801/5/1"
            ],
            [
                "James Madison",
                "Secretary of State",
                "1801/5/2",
                "1809/3/3"
            ]
        ];
        // \koolreport\core\Utility::prettyPrint2(array_slice($data, 0, 20));
        \koolreport\widgets\koolphp\Table::create([
            'dataSource' => $data,
            'paging' => true,
        ]);
        ?>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
<pre style="font-weight:bold"><code>
\koolreport\apexcharts\TimeLineChart::create(array(
    "dataSource" => $data,
    "columns" => [
        'name' => [
            'seriesGroup' => true,
        ],
        'position',
        'term' => [
            'combination' => [
                'date_start',
                'date_end',
            ],
            'label' => '',
        ],
    ]
));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
        <div>
            <?php
            \koolreport\apexcharts\TimeLineChart::create(array(
                "dataSource" => $data,
                "columns" => [
                    'name' => [
                        'seriesGroup' => true,
                    ],
                    'position',
                    'term' => [
                        'combination' => [
                            'date_start',
                            'date_end',
                        ],
                        'label' => '',
                    ],
                ],
                "options" => [
                    'plotOptions | bar' => [
                        'barHeight' => '50%',
                        'rangeBarGroupRows' => true
                    ],
                    'xaxis | type' => 'datetime',
                    'legend | position' => 'right',
                    'tooltip | custom' => "function(opts) {
                        const fromYear = new Date(opts.y1).getFullYear()
                        const toYear = new Date(opts.y2).getFullYear()
                    
                        const w = opts.ctx.w
                        let ylabel = w.globals.labels[opts.dataPointIndex]
                        let seriesName = w.config.series[opts.seriesIndex].name
                            ? w.config.series[opts.seriesIndex].name
                            : ''
                        const color = w.globals.colors[opts.seriesIndex]
                    
                        return (
                            '<div class=\"apexcharts-tooltip-rangebar\">' +
                            '<div> <span class=\"series-name\" style=\"color: ' +
                            color +
                            '\">' +
                            (seriesName ? seriesName : '') +
                            '</span></div>' +
                            '<div> <span class=\"category\">' +
                            ylabel +
                            ' </span> <span class=\"value start-value\">' +
                            fromYear +
                            '</span> <span class=\"separator\">-</span> <span class=\"value end-value\">' +
                            toYear +
                            '</span></div>' +
                            '</div>'
                        )
                    }"
                ],
                "uniqueCategories" => true,
                'colors' => [
                    '#008FFB',
                    '#00E396',
                    '#FEB019',
                    '#FF4560',
                    '#775DD0',
                    '#3F51B5',
                    '#546E7A',
                    '#D4526E',
                    '#8D5B4C',
                    '#F86624',
                    '#D7263D',
                    '#1B998B',
                    '#2E294E',
                    '#F46036',
                    '#E2C044'
                ],
                'fillType' => 'solid',
                // "showLegend" => false,
                // "showLabel" => true,
                // "height" => "600px",
                // "width" => "85%",
                "maxWidth" => "800px",
            ));
            ?>
        </div>
    </div>

</div>