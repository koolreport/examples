<?php
require_once "../../../load.koolreport.php";
use \koolreport\processes\ColumnMeta;
class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "president"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"table",
                    "data"=>[
                        ['President','Start','End'],
                        [ 'Gerald Ford',  "1974-01-20",  "1977-01-20" ],
                        [ 'Jimmy Carter',  "1977-01-20",  "1981-01-20" ],
                        [ 'Ronald Reagan',  "1981-01-20",  "1989-01-20" ],
                        [ 'George H. W. Bush',  "1989-01-20",  "1993-01-20" ],
                        [ 'Bill Clinton',  "1993-01-20",  "2001-01-20" ],
                        [ 'George W. Bush',  "2001-01-20",  "2009-01-20" ],
                        [ 'Barack Obama',  "2009-01-20",  "2017-01-20" ],
                        [ 'Donald Trump',  "2017-01-20",  date("Y-m-d") ],
                    ]
                )
            )
        );
    }

    protected function setup()
    {
        $this->src("president")
        ->pipe($this->dataStore("data"));
    }


}