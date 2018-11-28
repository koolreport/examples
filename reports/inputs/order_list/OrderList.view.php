<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\inputs\DateRangePicker;
    use \koolreport\inputs\MultiSelect;
?>
<div class="report-content">
    <div class="text-center">
        <h1>List of order</h1>
        <p class="lead">Choose date ranges and customer to view orders</p>
    </div>
    <form method="post">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="form-group">
                <?php
                DateRangePicker::create(array(
                    "name"=>"dateRange"
                ))
                ?>
                </div>
                <div class="form-group">
                <?php
                MultiSelect::create(array(
                    "name"=>"customers",
                    "dataStore"=>$this->dataStore("customers"),
                    "dataBind"=>array(
                        "text"=>"customerName",
                        "value"=>"customerNumber",
                    ),
                    "attributes"=>array(
                        "class"=>"form-control",
                        "size"=>10,
                    )
                ));
                ?>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success"><i class="glyphicon glyphicon-refresh"></i> Load</button>
                </div>
            </div>
        </div>
    </form>


    <?php
    if($this->dataStore("result")->countData()>0)
    {
        Table::create(array(
            "dataStore"=>$this->dataStore("result"),
            "removeDuplicate"=>array("customerName","orderNumber"),
            "cssClass"=>array(
                "table"=>"table table-bordered"
            ),
            "columns"=>array(
                "customerName"=>array(
                    "label"=>"Customer",
                ),
                "orderNumber"=>array(
                    "label"=>"#Order",
                    "type"=>"string",
                ),
                "productName"=>array(
                    "label"=>"Product"
                ),
                "amount"=>array(
                    "label"=>"Amount",
                    "prefix"=>"$",
                ),
                "status"=>array(
                    "label"=>"Status",
                )

            )
        ));
    }
    else
    {
    ?>
        <div class="alert alert-warning">
            <i class="glyphicon glyphicon-info-sign"></i> Sorry, we found no orders found
        </div>
    <?php    
    }
    ?>
</div>