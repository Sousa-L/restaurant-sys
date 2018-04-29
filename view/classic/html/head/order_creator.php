<?php
// define variables and set to empty values
$produto = new Produto;
$pedido = new Pedidos;
$idProduto = $qtd = $price = $idComplemento
= $idMesa = $idUsuario = $idStatusPedido = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idProduto = test_input($_POST["prod"]);
  $qtd = test_input($_POST["qtd"]);
  $price = test_input($_POST["price"]);
  $idMesa = test_input($_POST["mesa"]);
  $idUsuario = test_input($_POST["idUsuario"]);
  $stock = test_input($_POST["stock"]);
  $idStatusPedido = 1;

  $total_value = $price * $qtd;
  $new_stock = $stock - $qtd;
  if($stock > $qtd){
  $pedido->createPedidos($idProduto,$qtd,$total_value,$idMesa,$idUsuario,$idStatusPedido);
  $produto->setStock($new_stock, $idProduto);
  header("Location:order_menu.php?mesa=".$idMesa);
} else {
  echo "<script>alert('Estoque insuficiente');</script>";
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
