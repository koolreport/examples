<div class="report-content">
    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj8ahVQXoy8wHCAwoRWsUjPVmR5N3Qgko" 
        type="text/javascript">
    </script>
    <div class="text-center">
        <h1>Sale By Location</h1>
        <p class="lead">
        This example shows how to setup a <code>CustomDrillDown</code> report to see sale report
        by location.
        <br/>
        Please click on the column of chart to go further down on details.
        </p>
    </div>

    <?php
        \koolreport\drilldown\CustomDrillDown::create(array(
            "name"=>"saleLocation",
            "title"=>"Sale By Location",
            "subReports"=>array("countrySale","citySale"),
            "themeBase"=>"bs4",
        ));
    ?> 
</div>
