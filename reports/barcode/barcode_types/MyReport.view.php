<?php
    use koolreport\barcode\BarCode;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Types of Barcode</h1>
        <p class="lead">
            Supporting multiple barcode types like TYPE_CODE_39, TYPE_CODE_128,
            TYPE_EAN_13, TYPE_UPC_E, etc<br>
            Check detailed list in Barcode package's README.md
        </p>
    </div>

    <h3>Type Code 128</h3>
    <div style="margin-top:20px;">

<pre style="font-weight:bold"><code>\koolreport\barcode\BarCode::create(array(
    "format" => "jpg",
    "value"=>"081231723897",
    "type"=>"TYPE_CODE_128"
));</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>    
    <div class='row'>
        <h4 class="col-md-6">HTML:</h4>
        <h4 class="col-md-6">SVG:</h4>
    </div>
    <div class='row'>
        <div class="col-md-6">
            <?php 
                BarCode::create(array(
                    "format" => "html",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_128"
                ));
            ?>
            <div>081231723897</div>
        </div>
        <div class="col-md-6">
            <?php 
                BarCode::create(array(
                    "format" => "svg",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_128"
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>
    <div class='row'>
        <h4 class="col-md-6">JPG:</h4>
        <h4 class="col-md-6">PNG:</h4>
    </div>
    <div class='row'>
        <div class="col-md-6">
            <?php 
                BarCode::create(array(
                    "format" => "jpg",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_128"
                ));
            ?>
            <div>081231723897</div>
        </div>
        <div class="col-md-6">
            <?php 
                BarCode::create(array(
                    "format" => "png",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_128"
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>

    <div style="margin-top:20px;">
    <div style="margin-top:20px;">
    <h3>Type Code 39</h3>
    <div style="margin-top:20px;">

<pre style="font-weight:bold"><code>\koolreport\barcode\BarCode::create(array(
    "format" => "jpg",
    "value"=>"081231723897",
    "type"=>"TYPE_CODE_39"
));</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i> 
    <div class="row">
        <h4 class="col-md-6">HTML:</h4>
    </div>
    <div class='row'>
        <div class="col-md-12">
            <?php 
                BarCode::create(array(
                    "format" => "html",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_39",
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>
    <div class="row">
        <h4 class="col-md-6">SVG:</h4>
    </div>
    <div class='row'>
        <div class="col-md-12">
            <?php 
                BarCode::create(array(
                    "format" => "svg",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_39",
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>
    <div class="row">
        <h4 class="col-md-6">JPG:</h4>
    </div>
    <div class='row'>
        <div class="col-md-12">
            <?php 
                BarCode::create(array(
                    "format" => "jpg",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_39",
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>
    <div class="row">
        <h4 class="col-md-6">PNG:</h4>
    </div>
    <div class='row'>
        <div class="col-md-12">
            <?php 
                BarCode::create(array(
                    "format" => "png",
                    "value"=>"081231723897",
                    "type"=>"TYPE_CODE_39",
                ));
            ?>
            <div>081231723897</div>
        </div>
    </div>

</div>