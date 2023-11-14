<?php
include 'classes/Product.php';
include 'database.php';
include 'processData/process_xml.php';
require_once 'processData/xml_checker.php';
require_once 'processData/global_error_handler.php';


set_error_handler(['ErrorHandler', 'handleError']);
set_exception_handler(['ErrorHandler', 'handleException']);

$xmlReader = loadXmlFile();

$productLoader = new ProductLoader();
$products = $productLoader->loadProductsFromXML($xmlReader);

$productInserter = new ProductInserter();
$productInserter->insertProducts($conn, $products);

$xmlReader->close();
?>
