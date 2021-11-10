<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to sort a column (jobTitle) with a custom type
        </p>
    </div>
    <script>
        var customOrder = {
            "President": 0, 
            "VP Sales": 1, 
            "VP Marketing": 2, 
            "Sales Manager (NA)": 3,
            "Sales Manager (APAC)": 4,
            "Sale Manager (EMEA)": 5,
            "Sales Rep": 6
        };
        function dtBeforeInit() {
            console.log('dtBeforeInit');
            jQuery.extend( jQuery.fn.dataTable.ext.type.order, {
                // "customType-pre": function (a) {
                //     console.log('pre', a);
                //     a = a.trim();
                //     return customOrder[a];
                // },
                "customType-asc": function (a, b) {
                    console.log('asc', a, b);
                    a = a.trim(); b = b.trim();
                    return customOrder[b] - customOrder[a];
                },
                "customType-desc": function (a, b) {
                    console.log('desc', a, b);
                    a = a.trim(); b = b.trim();
                    return customOrder[a] - customOrder[b];
                }
            } );
        }
    </script>
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
        "columns" => [
            "jobTitle" => [
                'type' => 'customType',
            ],
            "employeeNumber", "firstName", "lastName", "extension"
        ],
        "options" => array(
            "order" => [ [0, 'desc'] ],
        ),
        "onBeforeInit" => "dtBeforeInit",
    ));
    ?>
</div>