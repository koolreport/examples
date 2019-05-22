<?php
    use \koolreport\amazing\SimpleCard;
?>
<div class="report-content" style="padding:15px">
    <div class="text-center">
        <h1>SimpleCard</h1>
        <p class="lead">
            The example shows how to use SimpleCard of Amazing Theme
        </p>
    </div>
    <div class="row">
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Page views / month",
            "value"=>45000,
            "preset"=>"warning",
            "cssClass"=>array(
                "icon"=>"fa fa-eye"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Conversions",
            "value"=>230,
            "preset"=>"primary",
            "cssClass"=>array(
                "icon"=>"fa fa-shopping-cart"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Revenue",
            "value"=>7500,
            "preset"=>"success",
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollar"
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Cost",
            "preset"=>"danger",
            "value"=>2484,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollar"
            ),
        ));
        ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Page views / month",
            "value"=>45000,
            "preset"=>"warning",
            "cssClass"=>array(
                "icon"=>"fa fa-eye",
                "card"=>"p-3",
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Conversions",
            "value"=>230,
            "preset"=>"primary",
            "cssClass"=>array(
                "icon"=>"fa fa-shopping-cart",
                "card"=>"p-3",
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Revenue",
            "value"=>7500,
            "preset"=>"success",
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollar",
                "card"=>"p-3",
            ),
        ));
        ?>
        </div>
        <div class="col-md-3">
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Cost",
            "preset"=>"danger",
            "value"=>2484,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollar",
                "card"=>"p-3",
            ),
        ));
        ?>
        </div>
    </div>

    <p>
    <b>Note:</b> You can show card with value queried from database like below example
    </p>
    
    <div class='row'>
        <div class='col-md-3'>
        <?php
        \koolreport\amazing\SimpleCard::create(array(
            "title"=>"Revenue",
            "value"=>$this->src("automaker")->query("select sum(amount) from payments"),
            "preset"=>"success",
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollar",
            ),
        ));
        ?>
        </div>
    </div>

</div>