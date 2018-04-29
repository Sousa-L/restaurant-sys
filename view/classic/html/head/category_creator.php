<?php
// define variables and set to empty values

$cate = new Categoria;
$idCategoria = $name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["nome"];

  $cate->createCategoria($name);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
