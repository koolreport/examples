<?php
    use \koolreport\barcode\QRCode;
?>
<div class="report-content">
    <div class="text-center">
        <h1>QRCode</h1>
        <p class="lead">
            Supporting multiple type of output formats
        </p>
    </div>

<pre style="font-weight:bold"><code>\koolreport\barcode\QRCode::create(array(
    "format" => "svg",
    "value"=>"http://koolreport.com",
));</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>        
    <div class='row'>
        <div class="col-md-4">SVG:</div>
        <div class="col-md-4">PNG:</div>
        <div class="col-md-4">JPG:</div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php 
                QRCode::create(array(
                    "format" => "svg",
                    "value"=>"http://koolreport.com",
                ));
            ?>
            <div>http://koolreport.com</div>
        </div>
        <div class="col-md-4">
            <?php 
                QRCode::create(array(
                    "format" => "png",
                    "value"=>"http://koolreport.com",
                ));
            ?>
            <div>http://koolreport.com</div>
        </div>
        <div class="col-md-4">
            <?php 
                QRCode::create(array(
                    "format" => "jpg",
                    "value"=>"http://koolreport.com",
                ));
            ?>
            <div>http://koolreport.com</div>
        </div>
    </div>
</div>