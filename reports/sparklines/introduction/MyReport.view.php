<?php
    use \koolreport\sparklines\Bar;
    use \koolreport\sparklines\Box;
    use \koolreport\sparklines\Bullet;
    use \koolreport\sparklines\Line;
    use \koolreport\sparklines\Pie;
    use \koolreport\sparklines\Tristate;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Sparkines</h1>
        <p class="lead">
            This example shows how to use Sparklines charts in your report.
        </p>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 offset-md-2">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Chart Type</th>
                        <th style="text-align:center">Demo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bar</td>
                        <td style="text-align:center">
                        <?php
                        Bar::create(array(
                            "dataSource"=>$this->dataStore("stock"),
                            "column"=>"volume",
                            "options"=>array(
                                "barColor"=>"#FA6541"
                            )
                        ));
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Line</td>
                        <td style="text-align:center">
                        <?php
                        Line::create(array(
                            "dataSource"=>$this->dataStore("stock"),
                            "column"=>"price",
                            "options"=>array(
                                "disableTooltips"=>true
                            )
                        ));
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Box Plot</td>
                        <td style="text-align:center">
                        <?php
                        Box::create(array(
                            "dataSource"=>$this->dataStore("stock"),
                            "column"=>"price",
                            "options"=>array(
                                "disableTooltips"=>true
                            )
                        ));
                        ?>                        
                        </td>
                    </tr>
                    <tr>
                        <td>Pie</td>
                        <td style="text-align:center">
                        <?php
                        Pie::create(array(
                            "dataSource"=>$this->dataStore("stock")->take(5),
                            "column"=>"volume",
                            "options"=>array(
                                "disableTooltips"=>true
                            )
                        ));
                        ?>                        
                        </td>
                    </tr>

                    <tr>
                        <td>Tristate</td>
                        <td style="text-align:center">
                        <?php
                        Tristate::create(array(
                            "data"=>array(1,1,0,1,-1,-1,1,-1,0,0,1,1),
                            "options"=>array(
                                "disableTooltips"=>true
                            )
                        ));
                        ?>  
                        </td>
                    </tr>
                    <tr>
                        <td>Bullet</td>
                        <td style="text-align:center">
                        <?php
                        Bullet::create(array(
                            "dataSource"=>$this->dataStore("stock")->take(10),
                            "column"=>"volume",
                            "options"=>array(
                                "disableTooltips"=>true
                            )
                        ));
                        ?>  
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>