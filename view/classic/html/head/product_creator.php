<?php
// define variables and set to empty values
$product = new Produto;
$name = $price = $category = $stock
= $profit = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nome"]);
  $price = test_input($_POST["price"]);
  $category = test_input($_POST["category"]);
  $stock = test_input($_POST["stock"]);
  $min_stock = 0.1 * $stock;
  $profit = test_input($_POST["price"] - $_POST["buy_price"]);
  $buy_price = test_input($_POST["buy_price"]);
  $bar_code = test_input($_POST["bar_code"]);
  $description = test_input($_POST["description"]);
  $provider = test_input($_POST["provider"]);
  $product->createProduto($name, $price, $stock, $min_stock, $profit, $category, $buy_price,$bar_code,$description,$provider);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
