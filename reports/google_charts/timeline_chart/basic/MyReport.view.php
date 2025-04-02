<?php

use \koolreport\widgets\google\Timeline;

$data = [
    ['President', 'Start', 'End'],
    ['Washington', "1789-03-30", "1797-02-04"],
    ['Adams',      "1797-02-4",  "1801-02-04"],
    ['Jefferson',  "1801-02-4",  "1809-02-04"]
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Basic</h1>
    </div>
    <div style="height:200px;">
        <?php
        Timeline::create(array(
            "dataSource" => $data,
            "columns" => array(
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
</div>