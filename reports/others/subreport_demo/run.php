<?php

require_once "CustomerOrders.php";

$report = new CustomerOrders;

$report->run()->render();