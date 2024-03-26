<?php
include "CustomersCategoriesProducts.php";
$report = new CustomersCategoriesProducts;
$report->run();
$report->exportToExcel('CustomersCategoriesProductsExcel')->toBrowser("CustomersCategoriesProducts.xlsx");