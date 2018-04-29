<?php
  include dirname(__DIR__) . "/head/mvc.php";
  $order = new Pedidos;
  if($_GET["amount"] > 1) {
    $order->setQtdProduto($_GET["amount"] - 1, $_GET["order"]);
  } else {
    $order->deleteOrder($_GET["order"]);
  }
  $_POST = null;
  $_GET = null;
?>
