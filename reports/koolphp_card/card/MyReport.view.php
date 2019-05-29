<?php
    use \koolreport\widgets\koolphp\Card;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Card</h1>
        <p class="lead">
            Guide you how to use Card to display important KPI value
        </p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php
            Card::create(array(
                "value"=>2000,
                "title"=>"Member Online",
                "cssClass"=>array(
                    "card"=>"bg-info",
                    "title"=>"text-white",
                    "value"=>"text-white"
                )
            ));
            ?>
        </div>
        <div class="col-md-3">
            <?php
            Card::create(array(
                "value"=>230,
                "title"=>"Conversions",
                "cssClass"=>array(
                    "card"=>"bg-warning",
                    "title"=>"text-white",
                    "value"=>"text-white"
                )
            ));
            ?>
        </div>
        <div class="col-md-3">
            <?php
            Card::create(array(
                "value"=>15299,
                "title"=>"Revenue",
                "format"=>array(
                    "value"=>array(
                        "prefix"=>"$"
                    )
                ),
                "cssClass"=>array(
                    "card"=>"bg-success",
                    "title"=>"text-white",
                    "value"=>"text-white"
                )
            ));
            ?>
        </div>

        <div class="col-md-3">
            <?php
            Card::create(array(
                "value"=>6912,
                "title"=>"Cost",
                "format"=>array(
                    "value"=>array(
                        "prefix"=>"$"
                    )
                ),
                "cssClass"=>array(
                    "card"=>"bg-danger",
                    "title"=>"text-white",
                    "value"=>"text-white"
                )
            ));
            ?>
        </div>
    </div>

    <div class="text-center" style="margin-top:30px;">
        <h3>Showing indicator</h3>
        <p class="lead">
            Card is able to show the percentage increased or decreased
        </p>
    </div>

    <div class="row">
        <div class="col-md-3 offset-md-3">
        <?php
        Card::create(array(
            "value"=>11249,
            "baseValue"=>9230,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "title"=>"Month Sale",
        ));
        ?>    
        </div>
        <div class="col-md-3">
        <?php
        Card::create(array(
            "value"=>13,
            "baseValue"=>15,
            "format"=>array(
                "value"=>array(
                    "suffix"=>"k"
                )
            ),
            "title"=>"Visitors",
        ));
        ?>
        </div>        
    </div>

    <div class="text-center" style="margin-top:30px;">
        <h3>Get value with SQL Query</h3>
        <p class="lead">
            The value of card is able to receive value from SQL
        </p>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-4">
        <?php
        Card::create(array(
            "value"=>$this->src("automaker")->query("select sum(amount) from payments"),
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "title"=>"Total Sale",
            "cssClass"=>array(
                "card"=>"bg-primary",
                "title"=>"text-white",
                "value"=>"text-white"
            )
        ));
        ?>    
        </div>
    </div>

</div>