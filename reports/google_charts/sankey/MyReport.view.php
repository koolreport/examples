<?php
    use \koolreport\widgets\google\Sankey;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Sankey Diagram</h1>
        <p class="lead">
            This example shows how to use Sankey Diagram
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    Sankey::create(array(
        "dataSource"=>[
            [ 'A', 'X', 5 ],
            [ 'A', 'Y', 7 ],
            [ 'A', 'Z', 6 ],
            [ 'B', 'X', 2 ],
            [ 'B', 'Y', 9 ],
            [ 'B', 'Z', 4 ]
        ]
    ));
    ?>
    </div>
</div>
