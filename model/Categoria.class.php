<?php
  class Categoria {
    private $idCategoria;
    private $name;


    function createCategoria($name) {
      global $xml;
$sql = "INSERT INTO Categoria (name) VALUES (\"" . $name . "\")";
if ($_SESSION['conn']->query($sql) === TRUE) {
  $last_id = $_SESSION['conn']->insert_id;
} else {
  echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
 }
}

    function getName($idCategoria) {
      $sql = "SELECT name FROM Categoria WHERE idCategoria = " . $idCategoria;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->name;
        }
      }
    }

    function setName($idCategoria) {
      $sql = "UPDATE Produto
      SET name = " . $name . " WHERE idProduto=". $idProduto;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
    function getLastId() {
     global $xml;
     $sql = "SELECT idCategoria FROM Categoria ORDER BY idCategoria DESC LIMIT 1";
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->idCategoria;
       }
    }
  }
    function deleteCate($idCategoria){
      global $xml;
      $sql = "DELETE FROM Categoria WHERE idCategoria = ". $idCategoria;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
         }
       }
  }
 ?>
