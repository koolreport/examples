<?php
require_once "Order.php";
$report = new Order;
$report->run()->render();