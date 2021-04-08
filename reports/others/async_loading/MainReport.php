<?php

require "SaleByCountriesReport.php";
require "TopCustomersReport.php";

class MainReport extends \koolreport\KoolReport
{
    use \koolreport\clients \jQuery;
    use \koolreport\core\SubReport;
    
    function settings()
    {
        return array(
            "subReports"=>array(
                "SaleByCountriesReport"=>SaleByCountriesReport::class,
                "TopCustomersReport"=>TopCustomersReport::class,
            )
        );
    }
}