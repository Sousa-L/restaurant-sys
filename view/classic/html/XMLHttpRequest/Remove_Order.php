<?php
include dirname(__DIR__) . "/head/mvc.php";
$order = new Pedidos;
$order->deleteOrder($_GET["order"]);
$_POST = null;
$_GET = null;
?>
