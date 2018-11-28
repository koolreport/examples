<?php
    use \koolreport\widgets\google;
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
  
    <div class="text-center">
        <h1>Customers vs Quarters Cube</h1>
        <p class="lead">
            Top 5 products with sales by quarters
        </p>
    </div>
    <?php
        $salesYear = isset($_POST['salesYear']) ? 
            $_POST['salesYear'] : array(2003, 2004, 2005);
    ?>
    <form method="post">
        <div class="form-group">
            <span style="margin-left:10px;">
                <input id="y2003" type="checkbox" name="salesYear[]" value="2003"
                <?php echo in_array(2003, $salesYear) ? 'checked' : '' ?> />
                <label for="y2003">2003</label>
            </span>
            <span style="margin-left:10px;">
                <input id="y2004" type="checkbox" name="salesYear[]" value="2004" 
                <?php echo in_array(2004, $salesYear) ? 'checked' : '' ?> />
                <label for="y2004">2004</label>
            </span>
            <span style="margin-left:10px;">
                <input id="y2005" type="checkbox" name="salesYear[]" value="2005" 
                <?php echo in_array(2005, $salesYear) ? 'checked' : '' ?> />
                <label for="y2004">2005</label>
            </span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "row" => "productName",
    "column" => "orderQuarter",
    "sum" => "dollar_sales"
)))</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <?php 
      Table::create(array(
        "dataStore" => $this->dataStore('salesQuarterProductName'),
      ));
    ?>
    <div class='row'>
        <div class="col-md-6">
            <?php 
            google\BarChart::create(array(
                "dataStore"=>$this->dataStore('salesQuarterProductNameNoAll'),
                "options"=>array(
                'title' => 'Top 5 Products\' Quarterly Sales',
                'isStacked' => true
                ),
                "width"=>'100%',
                // 'height'=>'400px',
            ));
            ?>
        </div>
        <div class="col-md-6">
            <?php 
            google\PieChart::create(array(
                "dataStore"=>$this->dataStore('salesQuarterProductNameAll'),
                "options"=>array(
                'title' => 'Top 5 Products\' Yearly Sales',
                ),
                "width"=>'100%',
                // 'height'=>'300px',
            ));
            ?>
        </div>
    </div>

</div>