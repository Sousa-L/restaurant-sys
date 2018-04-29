<?php
include dirname(__DIR__) . "/head/mvc.php";
$cate = new Categoria;
$cate->deleteCate($_GET["cate"]);
$_POST = null;
$_GET = null;
?>
