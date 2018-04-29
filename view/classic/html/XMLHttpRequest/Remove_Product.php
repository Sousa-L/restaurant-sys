<?php
include dirname(__DIR__) . "/head/mvc.php";
$product = new Produto;
$product->deleteProduct($_GET["product"]);
$_POST = null;
$_GET = null;
?>
