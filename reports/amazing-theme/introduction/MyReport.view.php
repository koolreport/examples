<?php
    use \koolreport\processes\Group;
    use \koolreport\processes\Sort;
    use \koolreport\widgets\koolphp\Table;
?>
<style>
.small-section
{
    margin-top:10px;
    margin-bottom:10px;
}
</style>
<div class="report-content" style="padding:15px;">
    <div class="text-center">
        <h1>Amazing Theme</h1>
        <p class="lead">
            Show the new look-n-feel of Amazing Theme
        </p>
    </div>

    <h3>Buttons</h3>

    <div class="small-section">
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary">Primary</button>

        <!-- Secondary, outline button -->
        <button type="button" class="btn btn-secondary">Secondary</button>

        <!-- Indicates a successful or positive action -->
        <button type="button" class="btn btn-success">Success</button>

        <!-- Indicates caution should be taken with this action -->
        <button type="button" class="btn btn-warning">Warning</button>

        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-danger">Danger</button>

        <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
        <button type="button" class="btn btn-link">Link</button>
    </div>

    <div class="small-section">
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-outline-primary">Primary</button>

        <!-- Secondary, outline button -->
        <button type="button" class="btn btn-outline-secondary">Secondary</button>

        <!-- Indicates a successful or positive action -->
        <button type="button" class="btn btn-outline-success">Success</button>

        <!-- Indicates caution should be taken with this action -->
        <button type="button" class="btn btn-outline-warning">Warning</button>

        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-outline-danger">Danger</button>
    </div>

    <div class="small-section">
        <button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
        <button type="button" class="btn btn-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
        <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
        <button type="button" class="btn btn-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
        <button type="button" class="btn btn-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
        <button type="button" class="btn btn-link"><i class="fa fa-link"></i>&nbsp; Link</button>
    </div>

    <div class="small-section">
        <button type="button" class="btn btn-primary btn-lg">Primary</button>
        <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
        <button type="button" class="btn btn-success btn-lg">Success</button>
        <button type="button" class="btn btn-info btn-lg">Info</button>
        <button type="button" class="btn btn-warning btn-lg">Warning</button>
        <button type="button" class="btn btn-danger btn-lg">Danger</button>
        <button type="button" class="btn btn-link btn-lg">Link</button>
    </div>

    <div class="small-section">
        <button type="button" class="btn btn-primary btn-sm">Primary</button>
        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
        <button type="button" class="btn btn-success btn-sm">Success</button>
        <button type="button" class="btn btn-info btn-sm">Info</button>
        <button type="button" class="btn btn-warning btn-sm">Warning</button>
        <button type="button" class="btn btn-danger btn-sm">Danger</button>
        <button type="button" class="btn btn-link btn-sm">Link</button>
    </div>

    <div class="small-section">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -174px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
    </div>

    <div class="small-section">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(71px, -187px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
    </div>
    

    <h3>Inputs</h3>

    <div class="row small-section">
        <div class="col-md-6">
            <label>TextBox</label>
            <?php
            \koolreport\inputs\TextBox::create([
                "name"=>"textBox",
                "attributes"=>array(
                    "placeholder"=>"Enter your text",
                    "class"=>"form-control"
                )
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <label>Select2</label>
            <?php
            \koolreport\inputs\Select2::create([
                "name"=>"select2",
                "multiple"=>true,
                "data"=>array(
                    "New York","Washinton D.C"
                ),
                "attributes"=>array(
                    "placeholder"=>"Enter your text",
                    "class"=>"form-control"
                )
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <label>Select</label>
            <?php
            \koolreport\inputs\Select::create([
                "name"=>"select",
                "data"=>array(
                    "New York","Washinton D.C"
                ),
                "attributes"=>array(
                    "placeholder"=>"Enter your text",
                    "class"=>"form-control"
                )
            ]);
            ?>
        </div>

        <div class="col-md-6">
            <label>DateRangePicker</label>
            <?php
            \koolreport\inputs\DateRangePicker::create([
                "name"=>"dateRangePicker",
                "attributes"=>array(
                    "placeholder"=>"Enter your text",
                    "class"=>"form-control"
                )
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <label>DateTimePicker</label>
            <?php
            \koolreport\inputs\DateTimePicker::create([
                "name"=>"dateTimePicker",
                "attributes"=>array(
                    "placeholder"=>"Enter your text",
                    "class"=>"form-control"
                )
            ]);
            ?>
        </div>
        <div class="col-md-6">
            <label>RangeSlider</label>
            <?php
            \koolreport\inputs\RangeSlider::create([
                "name"=>"rangeSlider",
            ]);
            ?>
        </div>

    </div>

    <h3>Charts</h3>
    <?php
    \koolreport\widgets\google\ColumnChart::create(array(
        "dataSource"=>array(
            array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
            array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
            array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
            array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
            array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
        )
    ));
    ?>

    <h3>Progress</h3>
    <div class="small-section">
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <h3>Table</h3>
    <?php
    Table::create(array(
        "dataSource"=>(
            $this->src('sales')
            ->pipe(new Group(array(
                "by" => "customerName",
                "sum" => "dollar_sales",
            )))
            ->pipe(new Sort(array(
                "dollar_sales" => "desc",
            )))    
        ),
        "columns"=>array(
            "customerName"=>array(
                "label"=>"Customer Name"
            ),
            "dollar_sales"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$"
            )
        ),
        "paging"=>array(
            "pageSize"=>10
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
</div>