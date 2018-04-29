<?php
  class ProdDividas{
    private $idProdDividas;
    private $prodName;
    private $prodQtd;
    private $prodVal;
    private $idDividas;

    public function createProdDivida($prodName, $prodQtd, $prodVal, $idDividas){
      $sql = "INSERT INTO Produtos_Dividas
      (prodName, prodQtd, prodVal, idDividas)
      VALUES (" . $prodName . "," . $prodQtd . "," . $prodVal . "," .
      $idDividas . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getProdName($idProdDividas) {
      $sql = "SELECT prodName FROM Produtos_Dividas WHERE idProdDividas = " . $idProdDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->prodName;
        }
      }
    }

    public function setProdName($prodName, $idProdDividas) {
      $sql = "UPDATE Produtos_Dividas
      SET prodName = " . $prodName . " WHERE idProdDividas=". $idProdDividas;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getProdQtd($idProdDividas) {
      $sql = "SELECT prodQtd FROM Produtos_Dividas WHERE idProdDividas = " . $idProdDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->prodQtd;
        }
      }
    }

    public function setProdQtd($prodQtd, $idProdDividas) {
      $sql = "UPDATE Produtos_Dividas
      SET prodQtd = " . $prodQtd . " WHERE idProdDividas=". $idProdDividas;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getProdVal($idProdDividas) {
      $sql = "SELECT prodVal FROM Produtos_Dividas WHERE idProdDividas = " . $idProdDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->prodVal;
        }
      }
    }

    public function setProdVal($prodVal, $idProdDividas) {
      $sql = "UPDATE Produtos_Dividas
      SET prodVal = " . $prodVal . " WHERE idProdDividas=". $idProdDividas;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdDividas($idProdDividas) {
      $sql = "SELECT idDividas FROM Produtos_Dividas WHERE idProdDividas = " . $idProdDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idDividas;
        }
      }
    }

    public function setIdDividas($idDividas, $idProdDividas) {
      $sql = "UPDATE Produtos_Dividas
      SET idDividas = " . $idDividas . " WHERE idProdDividas=". $idProdDividas;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdProdDividas($idDividas) {
      $sql = "SELECT idProdDividas FROM Produtos_Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idProdDividas;
        }
      }
    }

    function getLastId() {
      global $xml;
      $sql = "SELECT idProdDividas FROM Produtos_Dividas ORDER BY idProdDividas DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idDividas;
        }
      }
    }
  }
 ?>
