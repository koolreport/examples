<div class="report-content">
    <div class="text-center">
        <h1>Asynchronous Report Loading</h1>
        <p class="lead">Use SubReport to load report part by part</p>
        <p><button class="btn btn-success" onclick="refresh()"> <i class="fa fa-refresh"></i> Refresh</button></p>
    </div>
    <div class="text-center">
        <br/><br/>
        <h4>Sale By Countries</h4>
        <div>
            <sub-report name='SaleByCountriesReport' id='SaleByCountriesReport'>
                <i class="fa fa-spin fa-spinner"></i>
            </sub-report>
        </div>
        <br/><br/>
        <h4>Sale By Customers</h4>
        <div>
            <sub-report name='TopCustomersReport' id='TopCustomersReport'>
                <i class="fa fa-spin fa-spinner"></i>
            </sub-report>
        </div>
    </div>
    <script>
        function loadReports()
        {
            subReport.update("SaleByCountriesReport");
            subReport.update("TopCustomersReport");
        }
        function refresh()
        {
            $("#SaleByCountriesReport").html("<i class='fa fa-spin fa-spinner'></i>");
            $("#TopCustomersReport").html("<i class='fa fa-spin fa-spinner'></i>");
            loadReports();
        }
        //Trigger loading report
        loadReports();
    </script>
</div>