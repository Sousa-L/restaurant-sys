<?php
include dirname(__DIR__) . "/head/mvc.php";
$forne = new Fornecedor;
$forne->deleteForne($_GET["forne"]);
$_POST = null;
$_GET = null;
?>
