<?php
  include dirname(__DIR__) . "/head/mvc.php";
  $mesa = new Mesa;
  $order = new Pedidos;
  $mesa->setStatusMesa(2, $_GET["mesa"]);
 ?>
