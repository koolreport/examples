<div id="report_render" style="margin:auto">
    <?php

    $data = [
        ['month' => 'January', 'Dataset' => 10],
        ['month' => 'February', 'Dataset' => 30],
        ['month' => 'March', 'Dataset' => 46],
        ['month' => 'April', 'Dataset' => 2],
        ['month' => 'May', 'Dataset' => 8],
        ['month' => 'June', 'Dataset' => 50],
        ['month' => 'July', 'Dataset' => 0],
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "Dataset" => array(
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)',
                'fill' => false
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Sample tooltip with border'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "intersect" => false,
                "position" => 'nearest',
                "yPadding" => 10,
                "xPadding" => 10,
                "caretSize" => 8,
                "backgroundColor" => 'rgba(72, 241, 12, 1)',
                "titleFontColor" => 'black',
                "bodyFontColor" => 'black',
                "borderColor" => 'rgba(0, 0, 0, 1)',
                "borderWidth" => 4
            )
        )
    ));
    ?>
</div>