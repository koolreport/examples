<?php
    use \koolreport\charttable\ChartTable;
?>
<div class="report-content">
    <div class="text-center">
        <h1>ChartTable</h1>
        <p class="lead">
        The basic ChartTable's working
        </p>
    </div>
    
    <?php
    ChartTable::create(array(
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "options" => [
            "paging" => false,
        ]
    ));
    ?>
</div>