<?php
  class Dividas{
    private $idDividas;
    private $price;
    private $dateVencimento;
    private $dateR;
    private $idFornecedor;
    private $nfe;

    public function createDivida($price, $dateVencimento, $dateR, $idFornecedor,
  $nfe){
      $sql = "INSERT INTO Dividas
      (price, dateVencimento, dateR, idFornecedor, nfe)
      VALUES (" . $price . "," . $dateVencimento . "," . $dateR . "," .
      $idFornecedor . "," . $nfe . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getPrice($idDividas) {
      $sql = "SELECT price FROM Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->price;
        }
      }
    }

    public function setPrice($price, $idDividas) {
      $sql = "UPDATE Dividas
      SET price = " . $price . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getDateVencimento($idDividas) {
      $sql = "SELECT dateVencimento FROM Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dateVencimento;
        }
      }
    }

    public function setDateVencimento($dateVencimento, $idDividas) {
      $sql = "UPDATE Dividas
      SET dateVencimento = " . $dateVencimento . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getDateR($idDividas) {
      $sql = "SELECT dateR FROM Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dateR;
        }
      }
    }

    public function setDateR($dateR, $idDividas) {
      $sql = "UPDATE Dividas
      SET dateR = " . $dateR . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdFornecedor($idDividas) {
      $sql = "SELECT idFornecedor FROM Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idFornecedor;
        }
      }
    }

    public function setIdFornecedor($idFornecedor, $idDividas) {
      $sql = "UPDATE Dividas
      SET idFornecedor = " . $idFornecedor . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getNfe($idDividas) {
      $sql = "SELECT nfe FROM Dividas WHERE idDividas = " . $idDividas;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->nfe;
        }
      }
    }

    public function setNfe($nfe, $idDividas) {
      $sql = "UPDATE Dividas
      SET nfe = " . $nfe . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
    function getLastId() {
      global $xml;
      $sql = "SELECT idDividas FROM Dividas ORDER BY idDividas DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idDividas;
        }
      }
    }
  }
 ?>
