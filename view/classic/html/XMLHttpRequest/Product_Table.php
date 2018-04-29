<?php
include dirname(__DIR__) . "/head/mvc.php";
  $produto = new Produto;
  $product_id = $_GET["product"];
  echo $produto->getPrice($product_id) . "#" .
  $produto->getStock($product_id) . "#" .
  $produto->getBuyPrice($product_id);
  $_POST = null;
  $_GET = null;
 ?>
