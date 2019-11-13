<?php

require_once "../../../load.koolreport.php";

require_once "CustomerOrders.php";

$report = new CustomerOrders;

$report->run()->render();