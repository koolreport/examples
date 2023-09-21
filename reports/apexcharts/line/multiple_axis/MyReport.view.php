<?php


    $time_sale = array(
        array("month"=>"January","sale"=>32000,"cost"=>40000),
        array("month"=>"February","sale"=>48000,"cost"=>39000),
        array("month"=>"March","sale"=>35000,"cost"=>38000),
        array("month"=>"April","sale"=>40000,"cost"=>37000),
        array("month"=>"May","sale"=>60000,"cost"=>45000),
        array("month"=>"June","sale"=>73000,"cost"=>47000),
        array("month"=>"July","sale"=>80000,"cost"=>60000),
        array("month"=>"August","sale"=>78000,"cost"=>65000),
        array("month"=>"September","sale"=>60000,"cost"=>45000),
        array("month"=>"October","sale"=>83000,"cost"=>71000),
        array("month"=>"November","sale"=>45000,"cost"=>40000),
        array("month"=>"December","sale"=>39000,"cost"=>60000),
    );
?>
<div class="report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    $jsonStr = <<<JSON

    {
                /* series: [{
                    data: series.monthDataSeries1.prices
                }],
                chart: {
                    // height: 650,
                    // width: '100%',
                    width: 1000,
                    type: 'line',
                    // id: 'areachart-2'
                }, */
                /* annotations: {
                    yaxis: [
                        {
                            y: 8200,
                            borderColor: '#00E396',
                            label: {
                                borderColor: '#00E396',
                                style: {
                                    color: '#fff',
                                    background: '#00E396',
                                },
                                text: 'Support',
                            }
                        },
                        {
                            y: 8600,
                            y2: 9000,
                            borderColor: '#000',
                            fillColor: '#FEB019',
                            opacity: 0.2,
                            label: {
                                borderColor: '#333',
                                style: {
                                    fontSize: '10px',
                                    color: '#333',
                                    background: '#FEB019',
                                },
                                text: 'Y-axis range',
                            }
                        }
                    ],
                    xaxis: [
                        {
                            x: new Date('23 Nov 2017').getTime(),
                            strokeDashArray: 0,
                            borderColor: '#775DD0',
                            label: {
                                borderColor: '#775DD0',
                                style: {
                                    color: '#fff',
                                    background: '#775DD0',
                                },
                                text: 'Anno Test',
                            }
                        }, 
                        // {
                        //     x: new Date('26 Nov 2017').getTime(),
                        //     x2: new Date('28 Nov 2017').getTime(),
                        //     fillColor: '#B3F7CA',
                        //     opacity: 0.4,
                        //     label: {
                        //         borderColor: '#B3F7CA',
                        //         style: {
                        //             fontSize: '10px',
                        //             color: '#fff',
                        //             background: '#00E396',
                        //         },
                        //         offsetY: -10,
                        //         text: 'X-axis range',
                        //     }
                        // }
                    ],
                    points: [
                        {
                            x: new Date('01 Dec 2017').getTime(),
                            y: 8607.55,
                            marker: {
                                size: 8,
                                fillColor: '#fff',
                                strokeColor: 'red',
                                radius: 2,
                                cssClass: 'apexcharts-custom-class'
                            },
                            label: {
                                borderColor: '#FF4560',
                                offsetY: 0,
                                style: {
                                    color: '#fff',
                                    background: '#FF4560',
                                },
    
                                text: 'Point Annotation',
                            }
                        },
                        // {
                        //     x: new Date('08 Dec 2017').getTime(),
                        //     y: 9340.85,
                        //     marker: {
                        //         size: 0
                        //     },
                        //     image: {
                        //         path: '../../assets/images/ico-instagram.png'
                        //     }
                        // }
                    ]
                }, */
                dataLabels: {
                    enabled: true
                },
                stroke: {
                    curve: 'smooth', // "smooth", "straight", "stepline"
                },
                // grid: {
                    // padding: {
                    //     right: 30,
                    //     left: 20,
                    // }
                // },
                // title: {
                    // text: 'Line with Annotations',
                    // align: 'center',
                // },
                // labels: series.monthDataSeries1.dates,
                // xaxis: {
                    // type: 'datetime',
                // },
            }
    
    JSON;
    $options = \koolreport\core\Utility::jsObjToArray($jsonStr);

    // \koolreport\apexcharts\LineChart::create(array(
    // \koolreport\apexcharts\ColumnChart::create(array(
    // \koolreport\apexcharts\BarChart::create(array(
    \koolreport\apexcharts\ComboChart::create(array(
    // \koolreport\apexcharts\AreaChart::create(array(
    // \koolreport\apexcharts\RadialBarChart::create(array(
    // \koolreport\apexcharts\BoxPlotChart::create(array(
        "title"=>"Sale vs Cost",
        // "type" => "bar",
        "dataSource"=>$time_sale,
        "columns"=>array(
            "month" => [
                // "categoryType" => "datetime",
                "categoryType" => "category",
            ],
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "chartType" => "area", // default chart type = column
            ),
            "cost"=>array(
                "label"=>"Cost",
                "type"=>"number",
                "prefix"=>"$",
                "chartType" => "line"
            ),
        ),
        // "options" => $options,
        "options" => [
            // "chart" => [
                // "stacked" => true,
            // ],
            "fill" => [
                "type" => 'solid',
                "opacity" => [0.35, 1],
            ],
            // "stroke" => [
            //     "curve" => "straight", // "smooth", "straight", "stepline"
            //     "dashArray" => [5, 0],
            // ],
            // "yaxis" => [
            //     [
            //         // "seriesName" => "sale",
            //         "axisTicks" => ["show" => true],
            //         "axisBorder" => ["show" => true],
            //         // "reversed" => true,
            //     ],
            //     [
            //         // "seriesName" => "sale",
            //         "opposite" => true,
            //         "axisTicks" => ["show" => true],
            //         "axisBorder" => ["show" => true],
            //         // "reversed" => true,
            //     ],
            //     // "reversed" => true,
            // ],
            // "xaxis" => [],
            // "theme" => [
            //     "palette" => "palette2",
            // ],
        ],
        "titleAlignment" => "center", // "left", "right"
        "showLabels" => true,
        // "stacked" => true,
        // "stackType" => "100%",
        // "height" => "650px",
        // "colorScheme" => ['brown', 'green'],
    ));
    ?>
    </div>

</div>
