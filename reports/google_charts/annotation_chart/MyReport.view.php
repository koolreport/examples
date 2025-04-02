<?php

use \koolreport\widgets\google\AnnotationChart;

$data = [
    ['Date', 'Kepler-22b mission', 'Kepler title', 'Kepler text', 'Gliese 163 mission', 'Gliese title', 'Gliese text'],
    [
        '2314-02-15',
        12400,
        null,
        null,
        10645,
        null,
        null
    ],
    [
        '2314-02-16',
        24045,
        'Lalibertines',
        'First encounter',
        12374,
        null,
        null
    ],
    [
        '2314-02-17',
        35022,
        'Lalibertines',
        'They are very tall',
        15766,
        'Gallantors',
        'First Encounter'
    ],
    [
        '2314-02-18',
        12284,
        'Lalibertines',
        'Attack on our crew!',
        34334,
        'Gallantors',
        'Statement of shared principles'
    ],
    [
        '2314-02-19',
        8476,
        'Lalibertines',
        'Heavy casualties',
        66467,
        'Gallantors',
        'Mysteries revealed'
    ],
    [
        '2314-02-20',
        0,
        'Lalibertines',
        'All crew lost',
        79463,
        'Gallantors',
        'Omniscience achieved'
    ]
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>AnnotationChart</h1>
        <p class="lead">
            This example shows how to use AnnotationChart
        </p>
    </div>
    <div style="margin-bottom:50px;margin-right: 50px">
        <?php
        AnnotationChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Date' => array(
                    "type" => "date"
                ),
                'Kepler-22b mission',
                'Kepler title',
                'Kepler text',
                'Gliese 163 mission',
                'Gliese title',
                'Gliese text'
            ),
            "options" => array(
                "displayAnnotations" => true,
            )
        ));
        ?>
    </div>
</div>