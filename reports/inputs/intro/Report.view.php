<?php 
    use \koolreport\inputs\DateRangePicker;
    use \koolreport\inputs\MultiSelect;
    use \koolreport\inputs\Select;
    use \koolreport\inputs\RadioList;
    use \koolreport\inputs\CheckBoxList;
    use \koolreport\inputs\TextBox;
    use \koolreport\inputs\DateTimePicker;
    use \koolreport\inputs\Select2;
    use \koolreport\inputs\RangeSlider;
    use \koolreport\inputs\BSelect;
    
?>

<div class="report-content">
    <div class="text-center">
        <h1>Input Controls</h1>
        <p class="lead">
            The example list all available input controls inside Inputs package and show how to use them.
        </p>
    </div>
    <form method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <strong>TextBox</strong>
                <?php TextBox::create(array(
                    "name"=>"textBox",
                    "attributes"=>array(
                        "class"=>"form-control",
                        "placeholder"=>"Enter any text"
                    )
                ));?>
            </div>
            <div class="col-md-6 form-group">
                <strong>DateRangePicker</strong>
                <?php
                DateRangePicker::create(array(
                    "name"=>"dateRange",
                ));
                ?>
            </div>
            <div class="col-md-6 form-group">
                <strong>RadioList</strong>
                <?php
                RadioList::create(array(
                    "name"=>"radioList",
                    "dataStore"=>$this->dataStore("customers"),
                    "dataBind"=>"customerName"
                ));
                ?>
            </div>
            <div class="col-md-6 form-group">
                <strong>CheckBoxList</strong>
                <?php
                CheckBoxList::create(array(
                    "name"=>"checkBoxList",
                    "dataStore"=>$this->dataStore("customers"),
                    "dataBind"=>"customerName"
                ));
                ?>
            </div>
            <div class="col-md-6 form-group">
                <strong>Select</strong>
                <?php
                Select::create(array(
                    "name"=>"select",
                    "dataStore"=>$this->dataStore("customers"),
                    "defaultOption"=>array("--"=>""),
                    "dataBind"=>"customerName",
                    "attributes"=>array(
                        "class"=>"form-control",
                    )
                ));
                ?>
            </div>
            <div class="col-md-6 form-group">
                <strong>MultiSelect</strong>
                <?php
                MultiSelect::create(array(
                    "name"=>"multiSelect",
                    "dataStore"=>$this->dataStore("customers"),
                    "dataBind"=>"customerName",
                    "attributes"=>array(
                        "class"=>"form-control",
                        "size"=>5
                    )
                ));
                ?>
            </div>   
            <div class="col-md-12 form-group">
                <strong>DateTimePicker</strong>
                <div class="row">
                    <div class="col-md-6">
                        From Date:
                        <?php
                        DateTimePicker::create(array(
                            "name"=>"startDatePicker",
                            "maxDate"=>"@endDatePicker",
                            "format"=>"MM/DD/YYYY HH:mm",
                            "themeBase"=>"bs4",
                        ));
                        ?>
                    </div>
                    <div class="col-md-6">
                        To Date:
                        <?php
                        DateTimePicker::create(array(
                            "name"=>"endDatePicker",
                            "minDate"=>"@startDatePicker",
                            "format"=>"MM/DD/YYYY HH:mm",
                            "themeBase"=>"bs4",
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                
                <div class="row">
                    <div class="col-md-6">
                        <strong>Select2 - Single Option</strong>
                        <?php
                        Select2::create(array(
                            "name"=>"singleSelect2",
                            "dataStore"=>$this->dataStore("customers"),
                            "dataBind"=>"customerName",
                            "attributes"=>array(
                                "class"=>"form-control",
                            )
                        ));
                        ?>                                
                    </div>
                    <div class="col-md-6">
                        <strong>Select2 - Multiple Option</strong>
                        <?php
                        Select2::create(array(
                            "name"=>"multipleSelect2",
                            "multiple"=>true,
                            "dataStore"=>$this->dataStore("customers"),
                            "dataBind"=>"customerName",
                            "attributes"=>array(
                                "class"=>"form-control",
                            )
                        ));
                        ?>                                                                
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <strong>BSelect</strong>
                <div class="row">
                    <div class="col-md-6">
                        <p>Single option</p>
                        <?php
                        BSelect::create(array(
                            "name"=>"singleBSelect",
                            "dataStore"=>$this->dataStore("customers"),
                            "dataBind"=>"customerName",
                            "themeBase"=>"bs4",
                        ));
                        ?>                                                                
                    </div>
                    <div class="col-md-6">
                        <p>Multiple options</p>
                        <?php
                        BSelect::create(array(
                            "name"=>"multipleBSelect",
                            "multiple"=>true,
                            "dataStore"=>$this->dataStore("customers"),
                            "dataBind"=>"customerName",
                            "themeBase"=>"bs4",
                        ));
                        ?>                                                                
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <strong>RangerSlider</strong>
                <div class="row">
                    <div class="col-md-6">
                        <p>Single handle, value=<?php echo number_format($this->params["rangeSliderOne"][0]); ?></p>
                        <?php
                        RangeSlider::create(array(
                            "name"=>"rangeSliderOne",
                            "handles"=>1,
                            "step"=>10,
                            "range"=>array(
                                "min"=>0,
                                "max"=>100,
                            )
                        ));
                        ?>
                    </div>
                    <div class="col-md-6">
                        <p>With scale with 2 handles, values=(<?php echo number_format($this->params["rangeSliderTwo"][0]).",".number_format($this->params["rangeSliderTwo"][1]); ?>)</p>
                        <?php
                        RangeSlider::create(array(
                            "name"=>"rangeSliderTwo",
                            "handles"=>2,
                            "range"=>array(
                                "min"=>0,
                                "max"=>100,
                            ),
                            "step"=>10,
                            "scale"=>5,
                        ));
                        ?>
                    </div>
                </div>
            </div>
                                            
        </div>
        <div class="form-group" style="margin-top:30px;">
            <button class="btn btn-lg btn-primary">Submit form</button>
        </div>
        <p class="form-group">
            <i>* Please try to change form and submit, you will see the form
            values are persistent through form post. Below are values that archived from <code>$params</code>
            </i>
        </p>                    
        <pre><code><?php echo json_encode($this->params,JSON_PRETTY_PRINT) ?></code></pre>
    </form>
</div>
