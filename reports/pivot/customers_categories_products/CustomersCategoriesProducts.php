<?php
require_once "../../../load.koolreport.php";
use \koolreport\processes\Filter;
use \koolreport\processes\ColumnMeta;
use \koolreport\pivot\processes\Pivot;

class CustomersCategoriesProducts extends koolreport\KoolReport
{
    use \koolreport\excel\ExcelExportable;
    use \koolreport\export\Exportable;
    use \koolreport\inputs\Bindable;
    use \koolreport\inputs\POSTBinding;

    protected function defaultParamValues()
    {
        return array(
            "dateRange"=>array(date("2004-01-01"),date("2005-01-01")),
        );
    }
    protected function bindParamsToInputs()
    {
        return array(
            "dateRange",
        );
    }

    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales"=>array(
                    'filePath' => '../../../databases/customer_product_dollarsales2.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"      
                ), 
            )
        );
    }
    function setup()
    {
        $node = $this->src('dollarsales');
        
        if(!empty($this->params['dateRange'])){
            $node->pipe(new Filter(array(
                array('orderDate', '>=', $this->params['dateRange'][0]),
                array('orderDate', '<=', $this->params['dateRange'][1]),
            )))
            ->saveTo($node);
        }

        $node->pipe(new Filter(array(
            array('customerName', '<', 'Am'),
        )))
        ->pipe(new ColumnMeta(array(
            'dollar_sales'=>array(
                'type' => 'number',
                'prefix' => '$',
                'decimals'=>2,
            ),
        )))
        ->pipe(new Pivot(array(
            'dimensions'=>array(
                'row'=>'customerName, productLine, productName'
            ),
            'aggregates'=>array(
                'sum'=>'dollar_sales',
                'count'=>'dollar_sales'
            )
        )))
        ->pipe($this->dataStore('sales'));  
    }
}
