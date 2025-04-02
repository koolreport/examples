<?php

use \koolreport\widgets\google\Timeline;

$data = [
    ['Term', 'President', 'Start', 'End'],
    ['1', 'Washington', "1789-03-30", "1797-02-04"],
    ['2', 'Adams',      "1797-02-4",  "1801-02-04"],
    ['3', 'Jefferson',  "1801-02-4",  "1809-02-04"]
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Labeling the bars</h1>
    </div>
    <div style="height:200px;margin-bottom: 50px">
        <?php
        Timeline::create(array(
            "dataSource" => $data,
            "columns" => array(
                "Term",
                "President",
                "Start" => array(
                    "type" => "date",
                ),
                "End" => array(
                    "type" => "date",
                )
            )
        ));
        ?>
    </div>
    <div style="height:200px;margin-bottom: 50px">
        <?php
        Timeline::create(array(
            "dataSource" => $data,
            "columns" => array(
                "Term",
                "President",
                "Start" => array(
                    "type" => "date",
                ),
                "End" => array(
                    "type" => "date",
                )
            ),
            "options" => array(
                "timeline" => [
                    "showRowLabels" => false
                ]
            )
        ));
        ?>
    </div>
</div>