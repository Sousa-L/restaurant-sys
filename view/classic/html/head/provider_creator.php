<?php
// define variables and set to empty values
$forne = new Fornecedor;
$name = $adress = $phone = $cnpj = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["nome"];
  $adress = $_POST["adress"];
  $phone = $_POST["phone"];
  $cnpj = $_POST["cnpj"];
  $forne->createFornecedor($name, $adress, $phone, $cnpj);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
