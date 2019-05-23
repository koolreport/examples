<?php
    use \koolreport\amazing\GaugeCard;
    $data = array(
        array("date","number"),
        array("Jun 1st",5000),
        array("Jun 2nd",2000),
        array("Jun 3rd",4000),
        array("Jun 4th",5000),
        array("Jun 5th",7000),
        array("Jun 6th",3000),
        array("Jun 8th",1000),
        array("Jun 8th",6000),
        array("Jun 9th",4000),
        array("Jun 10th",8000),
        array("Jun 11st",7000),
    ); 
?>
<div class="report-content" style="padding:15px">
    <div class="text-center">
        <h1>ChartCard</h1>
        <p class="lead">
            The example shows how to use ChartCard of Amazing Theme
        </p>
    </div>
    
    <div class="row">
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ChartCard::create(array(
            "title"=>"Member Online",
            "value"=>56000,
            "preset"=>"primary",
            "chart"=>array(
                "dataSource"=>$data
            ),
            "cssClass"=>array(
                "icon"=>"icon-people"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ChartCard::create(array(
            "title"=>"Member Online",
            "value"=>56000,
            "preset"=>"success",
            "chart"=>array(
                "dataSource"=>$data
            ),
            "cssClass"=>array(
                "icon"=>"icon-people"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ChartCard::create(array(
            "title"=>"Member Online",
            "value"=>56000,
            "preset"=>"warning",
            "chart"=>array(
                "dataSource"=>$data
            ),
            "cssClass"=>array(
                "icon"=>"icon-people"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ChartCard::create(array(
            "title"=>"Member Online",
            "value"=>56000,
            "preset"=>"danger",
            "chart"=>array(
                "dataSource"=>$data
            ),
            "cssClass"=>array(
                "icon"=>"icon-people"
            ),
        ));
        ?>
        </div>
    </div>
</div>