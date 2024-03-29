<?php
    use \koolreport\widgets\google\AreaChart;
    use \koolreport\widgets\google\BarChart;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\google\TreeMap;
    use \koolreport\widgets\google\PieChart;
    use \koolreport\widgets\google\LineChart;
    use \koolreport\widgets\google\ComboChart;
    use \koolreport\widgets\google\DonutChart;
    use \koolreport\widgets\google\Gauge;
    use \koolreport\widgets\google\Sankey;
    use \koolreport\widgets\google\ScatterChart;
    use \koolreport\widgets\google\Timeline;
    use \koolreport\widgets\google\GeoChart;
    use \koolreport\widgets\google\Histogram;

    $time_sale = array(
        array("month"=>"January","sale"=>32000,"cost"=>40000),
        array("month"=>"February","sale"=>48000,"cost"=>39000),
        array("month"=>"March","sale"=>35000,"cost"=>38000),
        array("month"=>"April","sale"=>40000,"cost"=>37000),
        array("month"=>"May","sale"=>60000,"cost"=>45000),
        array("month"=>"June","sale"=>73000,"cost"=>47000),
        array("month"=>"July","sale"=>80000,"cost"=>60000),
        array("month"=>"August","sale"=>78000,"cost"=>65000),
        array("month"=>"September","sale"=>60000,"cost"=>45000),
        array("month"=>"October","sale"=>83000,"cost"=>71000),
        array("month"=>"November","sale"=>45000,"cost"=>40000),
        array("month"=>"December","sale"=>39000,"cost"=>60000),
    );
    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );
    $category_sale_month = array(
        array("category"=>"Books","January"=>32000,"February"=>20000,"March"=>12000),
        array("category"=>"Accessories","January"=>43000,"February"=>36000,"March"=>7000),
        array("category"=>"Phones","January"=>54000,"February"=>39000,"March"=>15000),
        array("category"=>"Others","January"=>12000,"February"=>6000,"March"=>6000),
    );
    $height_weight_smokers = array(
        array("height","weight","smokers"),
        array(170,82,123),
        array(180,91,45),
        array(150,60,14),
        array(152,55,55),
        array(168,65,223),
        array(178,67,55),
        array(185,46,223),
        array(166,77,55),
        array(153,50,77),
        array(166,44,155),
    );
    $data_tree_map = [
        ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
        ['Global',    null,                 0,                               0],
        ['America',   'Global',             0,                               0],
        ['Europe',    'Global',             0,                               0],
        ['Asia',      'Global',             0,                               0],
        ['Australia', 'Global',             0,                               0],
        ['Africa',    'Global',             0,                               0],
        ['Brazil',    'America',            11,                              10],
        ['USA',       'America',            52,                              31],
        ['Mexico',    'America',            24,                              12],
        ['Canada',    'America',            16,                              -23],
        ['France',    'Europe',             42,                              -11],
        ['Germany',   'Europe',             31,                              -2],
        ['Sweden',    'Europe',             22,                              -13],
        ['Italy',     'Europe',             17,                              4],
        ['UK',        'Europe',             21,                              -5],
        ['China',     'Asia',               36,                              4],
        ['Japan',     'Asia',               20,                              -12],
        ['India',     'Asia',               40,                              63],
        ['Laos',      'Asia',               4,                               34],
        ['Mongolia',  'Asia',               1,                               -5],
        ['Israel',    'Asia',               12,                              24],
        ['Iran',      'Asia',               18,                              13],
        ['Pakistan',  'Asia',               11,                              -52],
        ['Egypt',     'Africa',             21,                              0],
        ['S. Africa', 'Africa',             30,                              43],
        ['Sudan',     'Africa',             12,                              2],
        ['Congo',     'Africa',             10,                              12],
        ['Zaire',     'Africa',             8,                               10]
    ];

    $timeline = [
        ['President','Start','End'],
        [ 'Gerald Ford',  "1974-01-20",  "1977-01-20" ],
        [ 'Jimmy Carter',  "1977-01-20",  "1981-01-20" ],
        [ 'Ronald Reagan',  "1981-01-20",  "1989-01-20" ],
        [ 'George H. W. Bush',  "1989-01-20",  "1993-01-20" ],
        [ 'Bill Clinton',  "1993-01-20",  "2001-01-20" ],
        [ 'George W. Bush',  "2001-01-20",  "2009-01-20" ],
        [ 'Barack Obama',  "2009-01-20",  "2017-01-20" ],
        [ 'Donald Trump',  "2017-01-20",  date("Y-m-d") ],
    ];
    $histogram = [          
        ['Dinosaur', 'Length'],
        ['Acrocanthosaurus (top-spined lizard)', 12.2],
        ['Albertosaurus (Alberta lizard)', 9.1],
        ['Allosaurus (other lizard)', 12.2],
        ['Apatosaurus (deceptive lizard)', 22.9],
        ['Archaeopteryx (ancient wing)', 0.9],
        ['Argentinosaurus (Argentina lizard)', 36.6],
        ['Baryonyx (heavy claws)', 9.1],
        ['Brachiosaurus (arm lizard)', 30.5],
        ['Ceratosaurus (horned lizard)', 6.1],
        ['Coelophysis (hollow form)', 2.7],
        ['Compsognathus (elegant jaw)', 0.9],
        ['Deinonychus (terrible claw)', 2.7],
        ['Diplodocus (double beam)', 27.1],
        ['Dromicelomimus (emu mimic)', 3.4],
        ['Gallimimus (fowl mimic)', 5.5],
        ['Mamenchisaurus (Mamenchi lizard)', 21.0],
        ['Megalosaurus (big lizard)', 7.9],
        ['Microvenator (small hunter)', 1.2],
        ['Ornithomimus (bird mimic)', 4.6],
        ['Oviraptor (egg robber)', 1.5],
        ['Plateosaurus (flat lizard)', 7.9],
        ['Sauronithoides (narrow-clawed lizard)', 2.0],
        ['Seismosaurus (tremor lizard)', 45.7],
        ['Spinosaurus (spiny lizard)', 12.2],
        ['Supersaurus (super lizard)', 30.5],
        ['Tyrannosaurus (tyrant lizard)', 15.2],
        ['Ultrasaurus (ultra lizard)', 30.5],
        ['Velociraptor (swift robber)', 1.8]
        ];
?>
<div class="report-container">
    <div class="text-center">
        <h1>Google Charts</h1>
        <p class="lead">
            Efforlessly Visualize Your Data with Google Charts, PHP and MySQL
            <br/>
        Over 30+ Chart Types Wrapped in KoolReport for Your Free & Easy Data Visualization
        </p>
    </div>

    <div class="row text-center">
        <div class="col-md-6">
            
            <?php
            AreaChart::create(array(
                "dataSource"=>$time_sale,
                "columns"=>array(
                    "month",
                    "sale"=>array(
                        "label"=>"Sale",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                    "cost"=>array(
                        "label"=>"Cost",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                ),
            ));
            ?>
            <h6>Area Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            BarChart::create(array(
                "dataSource"=>$category_sale_month,
                "columns"=>array(
                    "category",
                    "January"=>array("label"=>"January","type"=>"number","prefix"=>"$"),
                    "February"=>array("label"=>"February","type"=>"number","prefix"=>"$"),
                    "March"=>array("label"=>"March","type"=>"number","prefix"=>"$"),
                ),
                "options"=>array(
                    "isStacked"=>true
                )
            ));
            ?>
            <h6>Bar Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            ColumnChart::create(array(
                "dataSource"=>$category_amount,
                "columns"=>array(
                    "category",
                    "sale"=>array("label"=>"Sale","type"=>"number","prefix"=>"$"),
                    "cost"=>array("label"=>"Cost","type"=>"number","prefix"=>"$"),
                    "profit"=>array("label"=>"Profit","type"=>"number","prefix"=>"$"),
                )
            ));
            ?>
            <h6>Column Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            PieChart::create(array(
                "dataSource"=>$category_amount,
                "columns"=>array(
                    "category",
                    "cost"=>array(
                        "type"=>"number",
                        "prefix"=>"$",
                    )
                )
            ));
            ?>
            <h6>Line Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            LineChart::create(array(
                "dataSource"=>$time_sale,
                "columns"=>array(
                    "month",
                    "sale"=>array(
                        "label"=>"Sale",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                    "cost"=>array(
                        "label"=>"Cost",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                )
            ));
            ?>
            <h6>Line Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            ComboChart::create(array(
                "dataSource"=>$category_amount,
                "columns"=>array(
                    "category",
                    "sale"=>array(
                        "label"=>"Sale",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                    "cost"=>array(
                        "label"=>"Cost",
                        "type"=>"number",
                        "prefix"=>"$"
                    ),
                    "profit"=>array(
                        "label"=>"Profit",
                        "type"=>"number",
                        "prefix"=>"$",
                        "chartType"=>"line",
                    ),
                ),
            ));
            ?>
            <h6>Combo Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            DonutChart::create(array(
                "dataSource"=>$category_amount,
                "columns"=>array(
                    "category",
                    "cost"=>array(
                        "type"=>"number",
                        "prefix"=>"$",
                    )
                )
            ));
            ?>
            <h6>Donut Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            Gauge::create(array(
                "dataSource"=>array(
                    array("label"=>"Memory","value"=>80),
                    array("label"=>"CPU","value"=>55),
                    array("label"=>"Nework","value"=>68),
                ),
                "columns"=>array(
                    "label",
                    "value"=>array(
                        "suffix"=>"%",
                    )
                )
            ));
            ?>
            <h6>Gauge Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            Sankey::create(array(
                "dataSource"=>[
                    [ 'A', 'X', 5 ],
                    [ 'A', 'Y', 7 ],
                    [ 'A', 'Z', 6 ],
                    [ 'B', 'X', 2 ],
                    [ 'B', 'Y', 9 ],
                    [ 'B', 'Z', 4 ]
                ]
            ));
            ?>
            <h6>Sankey Chart</h6>
        </div>
        <div class="col-md-6">
            <?php
            ScatterChart::create(array(
                "title"=>"Height vs Weight, Smokers",
                "dataSource"=>$height_weight_smokers,
            ));
            ?>
        </div>
        <div class="col-md-6">
            <?php
            Timeline::create(array(
                "dataSource"=>$timeline,
                "columns"=>array(
                    "President",
                    "Start"=>array(
                        "type"=>"date",
                    ),
                    "End"=>array(
                        "type"=>"date",
                    )
                )
            ));
            ?>
            <h6>Timeline</h6>
        </div>
        <div class="col-md-6">
            <?php
            TreeMap::create(array(
                "dataSource"=>$data_tree_map,
                "options"=>array(
                    "minColor"=> '#f00',
                    "midColor"=> '#ddd',
                    "maxColor"=> '#0d0',
                    "headerHeight"=> 15,
                    "fontColor"=> 'black',
                    "showScale"=> true
                )
            ));
            ?>
            <h6>Treemap</h6>
        </div>
        <div class="col-md-6">
            <?php
            GeoChart::create(array(
                "title"=>"World Polulation 2016",
                "dataSource"=>$this->dataStore("population2016"),
                "columns"=>array(
                    "Country Name",
                    "Value"=>array(
                        "type"=>"number",
                        "label"=>"Polulation 2016"
                    )
                ),
            ));
            ?>
            <h6>GeoChart</h6>
        </div>
        <div class="col-md-6">
            <?php
            Histogram::create(array(
                "title"=>"Histogram",
                "dataSource"=>$histogram
            ));
            ?>
            <h6>Histogram</h6>
        </div>
    </div>
</div>
