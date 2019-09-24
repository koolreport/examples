<?php
    use \koolreport\d3\Waterfall;
?>
<div class="report-content" title="">
    <div class="text-center">
        <h1>Waterfall</h1>
        <p class="lead">
            This example shows how to draw beautiful Waterfall
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
        Waterfall::create([
            "title"=>"Profit path",
            "dataSource"=>[
                ["name"=>"Product Revenue","amount"=>420000],
                ["name"=>"Services Revenue","amount"=>210000],
                ["name"=>"Fixed Costs","amount"=>-170000],
                ["name"=>"Variable Costs","amount"=>-140000],
            ],
            "columns"=>[
                "name",
                "amount"=>[
                    "format"=>"function(d){
                        return `\${Math.round(d / 1000)}k`;
                    }"
                ]
            ],
            "yAxis"=>[
                "prefix"=>"$",
            ],
            "summary"=>[
                "Total Revenue"=>2,
                "Profit"=>"end"
            ],
        ]);
        ?>

    </div>

</div>
