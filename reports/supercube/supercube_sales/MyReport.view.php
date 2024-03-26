<?php
    use \koolreport\datagrid\DataTables;
    use \koolreport\morris_chart;
    use \koolreport\sparklines;
    use \koolreport\widgets\google;
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">

    <div class="text-center">
        <h1>Sales SuperCube</h1>
        <p class="lead">
            Supporing multiple rows, columns and aggregates
        </p>
    </div>

    <p class="lead text-center">Multi row fields (productLine, productName) SuperCube</p>
    <?php
        Table::create(array(
            "dataSource" => $this->dataStore('salesCategoryProduct'),
            "options" => array(
                "searching" => true,
                "paging" => true,
                "colReorder" => true,
                "order" => [],
                "pageLength" => 5,
                "lengthMenu" => [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
            ),
            "showFooter" => true,
        ));
    ?>

    <p class="lead text-center">Multi column fields (Year, Quarter) SuperCube</p>

    <?php
        Table::create(array(
            "dataSource" => $this->dataStore('salesYearQuarter'),
            "options" => array(
                "searching" => true,
                "paging" => true,
                "colReorder" => true,
                "order" => [],
                "pageLength" => 5,
                "lengthMenu" => [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
            ),
            "showFooter" => true,
        ));
    ?>

    <p class="lead text-center">Multi aggregated fields (dollar_sales sum, count, average and sum percent) SuperCube</p>
    
    <?php
        Table::create(array(
            "dataSource" => $this->dataStore('salesCustomerYear'),
            "options" => array(
                "searching" => true,
                "paging" => true,
                "colReorder" => true,
                "order" => [],
                "pageLength" => 5,
                "lengthMenu" => [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
            ),
            "showFooter" => true,
        ));
    ?>

</div>