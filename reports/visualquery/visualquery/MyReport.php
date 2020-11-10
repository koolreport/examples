<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\visualquery\Bindable;

    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }   
    protected function setup()
    {
        $params = \koolreport\core\Utility::get($this->queryParams, 'visualquery1');
        $qb = $this->paramsToQueryBuilder($params);
        $this->queryStr = $queryStr = $params ? $qb->toMySQL() : "select * from customers where 1=0";
        
        $this
        ->src('automaker')
        ->query($queryStr)
        ->pipe(new \koolreport\processes\ColumnMeta([
            "Order Number" => [
                "type" => "string"
            ],
            "orderMonth" => [
                "type" => "string"
            ],
        ]))
        ->pipe($this->dataStore('vqDS'));
    } 

}