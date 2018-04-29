<?php
$xml_config = simplexml_load_file(dirname(__DIR__, 4) . "/config.xml") or die("Error: Cannot create object");
$xml_pages_login = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/login.xml") or die("Error: Cannot create object");
$xml_pages_nav = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/nav.xml") or die("Error: Cannot create object");
$xml_pages_side = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/side.xml") or die("Error: Cannot create object");
$xml_pages_table = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/table.xml") or die("Error: Cannot create object");
$xml_pages_product = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/product.xml") or die("Error: Cannot create object");
$xml_pages_order = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/order.xml") or die("Error: Cannot create object");
$xml_pages_payment = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/payment.xml") or die("Error: Cannot create object");
$xml_pages_cashier = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/cashier.xml") or die("Error: Cannot create object");
$xml_pages_category = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/category.xml") or die("Error: Cannot create object");
$xml_pages_providers = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/providers.xml") or die("Error: Cannot create object");
$xml_pages_user = simplexml_load_file(dirname(__DIR__, 4) . "/" . "language/" .
$xml_config->language . "/pages/user.xml") or die("Error: Cannot create object");

?>
