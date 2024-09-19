<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<div style="width:1000px;margin-top:16px;margin-bottom:50px" id="report_render">
    <p>This example demonstrates a time series scale by drawing a financial line chart using just the core library. For more specific functionality for financial charts, please see <a href="https://github.com/chartjs/chartjs-chart-financial">chartjs-chart-financial</a></p>
    <?php

    function generateData()
    {

        $unit = '';

        if (isset($_POST['unit'])) {
            $unit = $_POST['unit'][0];
        } else {
            $unit = 'day';
        }

        function unitLessThanDay($unit)
        {
            return $unit === 'second' || $unit === 'minute' || $unit === 'hour';
        }

        function beforeNineThirty($date)
        {
            return $date->format('H') < 9 || ($date->format('H') == 9 && $date->format('i') < 30);
        }

        function outsideMarketHours($date, $unit)
        {
            if ($date->format('N') > 5) {
                return true;
            }
            if (unitLessThanDay($unit) && (beforeNineThirty($date) || $date->format('H') > 16)) {
                return true;
            }
            return false;
        }

        function randomNumber($min, $max)
        {
            return mt_rand() / mt_getrandmax() * ($max - $min) + $min;
        }

        function randomBar($date, $lastClose)
        {
            $open = number_format(randomNumber($lastClose * 0.95, $lastClose * 1.05), 2);
            $close = number_format(randomNumber($open * 0.95, $open * 1.05), 2);
            return [
                't' => $date->getTimestamp() * 1000,
                'y' => (float)$close
            ];
        }

        $date = new DateTime('Jan 01 1990', new DateTimeZone('UTC'));
        $now = new DateTime('now', new DateTimeZone('UTC'));
        $data = [];
        $lessThanDay = unitLessThanDay($unit);

        while (count($data) < 600 && $date < $now) {
            if (outsideMarketHours($date, $unit)) {
                if (!$lessThanDay || !beforeNineThirty($date)) {
                    if ($date->format('N') >= 5) {
                        $date->modify('next Monday');
                    } else {
                        $date->modify('+1 day');
                    }
                }
                if ($lessThanDay) {
                    $date->setTime(9, 30);
                }
            }

            $lastClose = count($data) > 0 ? $data[count($data) - 1]['y'] : 30;
            $data[] = randomBar($date, $lastClose);

            if (unitLessThanDay($unit)) {
                $interval = new DateInterval('PT1' . ucfirst($unit[0]));
                $date->add($interval);
            } else {
                $interval = new DateInterval('P1' . ucfirst($unit[0]));
                $date->add($interval);
            }
        }

        return $data;
    }


    $data = generateData();

    if (!isset($_POST['command'])) {
        $_POST['type'] = ['line'];
    }


    if (isset($_POST['type']) && $_POST['type'] === ['line']) {
        \koolreport\chartjs\LineChart::create(array(
            'dataSource' => $data,
            'columns' => array(
                't',
                'y' => array(
                    "label" => 'CHRT - Chart.js Corporation',
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "pointRadius" => 0,
                    "fill" => false,
                    "lineTension" => 0,
                    "borderWidth" => 2
                )
            ),
            "options" => array(
                "animation" => array(
                    'duration' => 0
                ),
                "scales" => array(
                    "xAxes" => array(
                        array(
                            "type" => 'time',
                            "distribution" => 'series',
                            "offset" => true,
                            "ticks" => array(
                                "major" => array(
                                    'enabled' => true,
                                    "fontStyle" => 'bold',
                                ),
                                "source" => 'data',
                                "autoSkip" => true,
                                "autoSkipPadding" => 75,
                                "maxRotation" => 0,
                                "sampleSize" => 100
                            ),
                            "afterBuildTicks" => "function(scale, ticks) {
                                var majorUnit = scale._majorUnit;
                                var firstTick = ticks[0];
                                var i, ilen, val, tick, currMajor, lastMajor;

                                val = moment(ticks[0].value);
                                if ((majorUnit === 'minute' && val.second() === 0)
                                        || (majorUnit === 'hour' && val.minute() === 0)
                                        || (majorUnit === 'day' && val.hour() === 9)
                                        || (majorUnit === 'month' && val.date() <= 3 && val.isoWeekday() === 1)
                                        || (majorUnit === 'year' && val.month() === 0)) {
                                    firstTick.major = true;
                                } else {
                                    firstTick.major = false;
                                }
                                lastMajor = val.get(majorUnit);

                                for (i = 1, ilen = ticks.length; i < ilen; i++) {
                                    tick = ticks[i];
                                    val = moment(tick.value);
                                    currMajor = val.get(majorUnit);
                                    tick.major = currMajor !== lastMajor;
                                    lastMajor = currMajor;
                                }
                                return ticks;
                            }"
                        )
                    ),
                    "yAxes" => array(
                        array(
                            "gridLines" => array(
                                "drawBorder" => false
                            ),
                            "scaleLabel" => array(
                                "display" => true,
                                "labelString" => 'Closing price ($)'
                            )
                        )
                    )
                ),
                "tooltips" => array(
                    "intersect" => false,
                    "mode" => 'index',
                    "callback" => array(
                        "label" => "function(tooltipItem, myData) {
                                var label = myData.datasets[tooltipItem.datasetIndex].label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += parseFloat(tooltipItem.value).toFixed(2);
                                return label;
                            }"
                    )
                )
            )
        ));
    } else if (isset($_POST['type']) && $_POST['type'] === ['bar']) {
        \koolreport\chartjs\ColumnChart::create(array(
            'dataSource' => $data,
            'columns' => array(
                't',
                'y' => array(
                    "label" => 'CHRT - Chart.js Corporation',
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "pointRadius" => 0,
                    "fill" => false,
                    "lineTension" => 0,
                    "borderWidth" => 2
                )
            ),
            "options" => array(
                "animation" => array(
                    'duration' => 0
                ),
                "scales" => array(
                    "xAxes" => array(
                        array(
                            "type" => 'time',
                            "distribution" => 'series',
                            "offset" => true,
                            "ticks" => array(
                                "major" => array(
                                    'enabled' => true,
                                    "fontStyle" => 'bold',
                                ),
                                "source" => 'data',
                                "autoSkip" => true,
                                "autoSkipPadding" => 75,
                                "maxRotation" => 0,
                                "sampleSize" => 100
                            ),
                            "afterBuildTicks" => "function(scale, ticks) {
                                var majorUnit = scale._majorUnit;
                                var firstTick = ticks[0];
                                var i, ilen, val, tick, currMajor, lastMajor;

                                val = moment(ticks[0].value);
                                if ((majorUnit === 'minute' && val.second() === 0)
                                        || (majorUnit === 'hour' && val.minute() === 0)
                                        || (majorUnit === 'day' && val.hour() === 9)
                                        || (majorUnit === 'month' && val.date() <= 3 && val.isoWeekday() === 1)
                                        || (majorUnit === 'year' && val.month() === 0)) {
                                    firstTick.major = true;
                                } else {
                                    firstTick.major = false;
                                }
                                lastMajor = val.get(majorUnit);

                                for (i = 1, ilen = ticks.length; i < ilen; i++) {
                                    tick = ticks[i];
                                    val = moment(tick.value);
                                    currMajor = val.get(majorUnit);
                                    tick.major = currMajor !== lastMajor;
                                    lastMajor = currMajor;
                                }
                                return ticks;
                            }"
                        )
                    ),
                    "yAxes" => array(
                        array(
                            "gridLines" => array(
                                "drawBorder" => false
                            ),
                            "scaleLabel" => array(
                                "display" => true,
                                "labelString" => 'Closing price ($)'
                            )
                        )
                    )
                ),
                "tooltips" => array(
                    "intersect" => false,
                    "mode" => 'index',
                    "callback" => array(
                        "label" => "function(tooltipItem, myData) {
                                var label = myData.datasets[tooltipItem.datasetIndex].label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += parseFloat(tooltipItem.value).toFixed(2);
                                return label;
                            }"
                    )
                )
            )
        ));
    }
    ?>
</div>