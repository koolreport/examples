<?php
    use \koolreport\amazing\SimpleCard;
?>
<div class="report-content" style="padding:15px">
    <div class="text-center">
        <h1>ProgressCard</h1>
        <p class="lead">
            The example shows how to use ProgressCard of Amazing Theme
        </p>
    </div>
    <div class="row">
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ProgressCard::create(array(
            "title"=>"April 2018",
            "infoText"=>"The sale on April 2018 has completed {indicatorValue} of revenue target.",
            "value"=>7500,
            "preset"=>"primary",
            "baseValue"=>10000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                ),
                "indicator"=>array(
                    "decimals"=>0
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-euro"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ProgressCard::create(array(
            "title"=>"April 2018",
            "infoText"=>"The sale on April 2018 has completed {indicatorValue} of revenue target.",
            "value"=>7500,
            "preset"=>"success",
            "baseValue"=>10000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                ),
                "indicator"=>array(
                    "decimals"=>0
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-euro"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ProgressCard::create(array(
            "title"=>"April 2018",
            "infoText"=>"The sale on April 2018 has completed {indicatorValue} of revenue target.",
            "value"=>7500,
            "preset"=>"warning",
            "baseValue"=>10000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                ),
                "indicator"=>array(
                    "decimals"=>0
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-euro"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\ProgressCard::create(array(
            "title"=>"April 2018",
            "infoText"=>"The sale on April 2018 has completed {indicatorValue} of revenue target.",
            "value"=>7500,
            "preset"=>"danger",
            "baseValue"=>10000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                ),
                "indicator"=>array(
                    "decimals"=>0
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-euro"
            ),
        ));
        ?>
        </div>
    </div>
</div>