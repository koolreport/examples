<?php
    use \koolreport\widgets\koolphp\Table;
    $this->dataStore("customers")->popStart();
    $customerName = "";
    while($row = $this->dataStore("customers")->pop())
    {
        if($row["customerNumber"]==$this->params["customerNumber"])
        {
            $customerName =$row["customerName"];
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Order details of customer</title>
        <link rel="stylesheet" href="../../../assets/bs3/bootstrap.min.css" />
        <link rel="stylesheet" href="../../../assets/bs3/bootstrap-theme.min.css" />
    </head>
    <body>
        <div class="container box-container">
                <div class="text-center">
                    <h1><?php echo $customerName; ?></h1>
                </div>
            <hr/>
            <?php
                if($this->dataStore("orders")->countData()>0)
                {
                ?>
                    <?php
                    Table::create(array(
                        "dataStore"=>$this->dataStore("orders"),
                        "columns"=>array(
                            "productName"=>array(
                                "label"=>"Product",
                            ),
                            "priceEach"=>array(
                                "label"=>"Price",
                                "prefix"=>"$",
                            ),
                            "quantityOrdered"=>array(
                                "label"=>"Quantity"
                            ),
                            "amount"=>array(
                                "label"=>"Total",
                                "prefix"=>"$",
                            )
                        ),
                        "class"=>array(
                            "table"=>"table table-striped"
                        )
                    ));
                    ?>
                <?php
                }
            ?>
        </div>
    </body>
</html>