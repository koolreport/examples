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

    <div style="margin-top:20px;">
    <div style="margin-top:20px;">
    <h3>Multi row fields (productLine, productName) SuperCube</h3>
<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "rows" => "productLine, productName",
    "sum" => "dollar_sales",
)))</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
        $ds = $this->dataStore('salesCategoryProduct');
        Table::create(array(
            "dataSource" => $ds,
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

    <div style="margin-top:20px;">
    <div style="margin-top:20px;">
    <h3>Multi column fields (Year, Quarter) SuperCube</h3>
<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "columns" => "Year, Quarter",
    "sum" => "dollar_sales",
)))</code></pre>

    <?php
        $ds = $this->dataStore('salesYearQuarter');
        Table::create(array(
            "dataSource" => $ds,
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

    <div style="margin-top:20px;">
    <div style="margin-top:20px;">
    <h3>Multi aggregated fields (dollar_sales sum, count, 
            average and sum percent) SuperCube</h3>
<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "rows" => "customerName",
    "sum" => "dollar_sales",
    "count" => "dollar_sales",
    "avg" => "dollar_sales",
    'sum percent' => 'dollar_sales',
)))</code></pre>

    <?php
        $ds = $this->dataStore('salesCustomerYear');
        Table::create(array(
            "dataSource" => $ds,
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