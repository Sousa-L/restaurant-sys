<?php
  class Caixa {
    private $idCaixa;
    private $saldoInicial;
    private $saldoFinal;
    private $dateInicial;
    private $dateFinal;
    private $statusCaixa;

    public function createCaixa($saldoInicial, $dateInicial) {
      $sql = "INSERT INTO Caixa
      (saldoInicial, dateInicial)
      VALUES (" . $saldoInicial . "," . $dateInicial . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    public function getsaldoInicial($idCaixa){
      $sql = "SELECT saldoInicial FROM Caixa WHERE idCaixa = " . $idCaixa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->saldoInicial;
        }
      }
    }

    public function setsaldoInicial($saldoInicial, $idCaixa) {
      $sql = "UPDATE Caixa
      SET saldoInicial = " . $saldoInicial . " WHERE idCaixa=". $idCaixa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getsaldoFinal($idCaixa){
      $sql = "SELECT saldoFinal FROM Caixa WHERE idCaixa = " . $idCaixa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->saldoFinal;
        }
      }
    }

    public function setsaldoFinal($saldoFinal, $idCaixa) {
      $sql = "UPDATE Caixa
      SET saldoInicial = " . $saldoFinal . " WHERE idCaixa=". $idCaixa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getdateInicial($idCaixa){
      $sql = "SELECT dateInicial FROM Caixa WHERE idCaixa = " . $idCaixa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dateInicial;
        }
      }
    }

    public function setdateInicial($dateInicial, $idCaixa) {
      $sql = "UPDATE Caixa
      SET dateInicial = " . $dateInicial . " WHERE idCaixa=". $idCaixa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getdateFinal($idCaixa){
      $sql = "SELECT dateFinal FROM Caixa WHERE idCaixa = " . $idCaixa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dateFinal;
        }
      }
    }

    public function setdateFinal($dateFinal, $idCaixa) {
      $sql = "UPDATE Caixa
      SET dateFinal = " . $dateInicial . " WHERE idCaixa=". $idCaixa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getStatusCaixa($idCaixa){
      $sql = "SELECT statusCaixa FROM Caixa WHERE idCaixa = " . $idCaixa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->statusCaixa;
        }
      }
    }

    public function setStatusCaixa($statusCaixa, $idCaixa) {
      $sql = "UPDATE Caixa
      SET statusCaixa = " . $statusCaixa . " WHERE idCaixa=". $idCaixa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getLastId() {
      global $xml;
      $sql = "SELECT idCaixa FROM Caixa ORDER BY idCaixa DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idCaixa;
        }
      }
    }
    
  }
 ?>
