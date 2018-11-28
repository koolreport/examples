<?php
    use \koolreport\widgets\google\GeoChart;
?>
<div class="report-container">
    <div class="text-center">
        <h1>GeoChart</h1>
        <p class="lead">
            The example show how to use GeoChart <br/> Below is the world polulation in year 2016
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    GeoChart::create(array(
        "title"=>"World Polulation 2016",
        "dataSource"=>$this->dataStore("population2016"),
        "columns"=>array(
            "Country Name",
            "Value"=>array(
                "type"=>"number",
                "label"=>"Polulation 2016"
            )
        ),
    ));
    ?>
    </div>
</div>
