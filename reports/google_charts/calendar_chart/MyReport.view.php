<?php

use \koolreport\widgets\google\Calendar;

$data = [
    ['Date', 'Won/Loss'],
    ['2012-03-13', 37032],
    ['2012-03-14', 38024],
    ['2012-03-15', 38024],
    ['2012-03-16', 38108],
    ['2012-03-17', 38229],
    ['2012-03-18', 38239],
    ['2012-03-19', 38279],
    ['2012-03-20', 38429],
    ['2012-03-21', 38129],
    ['2012-03-22', 38225],
    ['2012-03-23', 32229],
    ['2012-03-24', 35229],
    ['2012-03-25', 37229],
    ['2012-03-27', 31229],
    ['2012-03-29', 33229],
    ['2012-05-13', 37032],
    ['2012-05-14', 38024],
    ['2012-05-16', 38108],
    ['2012-05-17', 38229],
    ['2012-05-18', 38239],
    ['2012-05-20', 38429],
    ['2012-05-21', 38129],
    ['2012-05-22', 38225],
    ['2012-05-24', 35229],
    ['2012-05-25', 37229],
    ['2012-05-29', 33229],
    ['2013-09-04', 38177],
    ['2013-09-05', 38705],
    ['2013-09-12', 38210],
    ['2013-09-13', 38029],
    ['2013-09-19', 38823],
    ['2013-09-23', 38345],
    ['2013-09-24', 38436],
    ['2013-09-30', 38447]
]
?>
<div class="report-content">
    <div class="text-center">
        <h1>Calendar</h1>
        <p class="lead">
            This example shows how to use Calendar
        </p>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        Calendar::create(array(
            "title" => 'Red Sox Attendance',
            "dataSource" => $data,
            "columns" => array(
                'Date' => array(
                    "type" => 'date'
                ),
                'Won/Loss'
            ),
            "options" => array(
                "height" => 350
            )
        ));
        ?>
        <div style="margin-bottom:50px;">
            <?php
            Calendar::create(array(
                "title" => 'Red Sox Attendance',
                "dataSource" => $data,
                "columns" => array(
                    'Date' => array(
                        "type" => 'date'
                    ),
                    'Won/Loss'
                ),
                "options" => array(
                    "height" => 350,
                    "calendar" => array(
                        "monthLabel" => array(
                            "fontName" => 'Times-Roman',
                            "fontSize" => 12,
                            "color" => '#981b48',
                            "bold" => true,
                            "italic" => true
                        ),
                        "monthOutlineColor" => array(
                            "stroke" => '#981b48',
                            "strokeOpacity" => 0.8,
                            "strokeWidth" => 2
                        ),
                        "unusedMonthOutlineColor" => array(
                            "stroke" => '#bc5679',
                            "strokeOpacity" => 0.8,
                            "strokeWidth" => 1
                        ),
                        "underMonthSpace" => 16,
                    )
                )
            ));
            ?>
        </div>
    </div>