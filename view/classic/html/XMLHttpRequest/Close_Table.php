<?php
  include dirname(__DIR__) . "/head/mvc.php";
  $mesa = new Mesa;
  $order = new Pedidos;
  $mesa->setStatusMesa(1, $_GET["mesa"]);
  $order->deleteOrderTable($_GET["mesa"]);
 ?>
