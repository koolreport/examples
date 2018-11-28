<?php 

require_once "SalesByCustomer.php";
$salesbycustomer = new SalesByCustomer;
$salesbycustomer->run()->render();