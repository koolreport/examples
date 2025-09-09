<?php

require_once "../../../load.koolreport.php";

use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;

class SakilaRental extends KoolReport
{
    use \koolreport\printpdf\Exportable;
    
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "sakila_rental"=>array(
                    "class"=>'\koolreport\datasources\CSVDataSource',
                    'filePath'=>dirname(__FILE__)."/sakila_rental.csv",
                )
            )
        );
    }   
    protected function setup()
    {
        $this->src('sakila_rental')
        ->pipe(new Limit(array(
            200, 0
        )))
        ->pipe($this->dataStore('sales'));
    } 
}
