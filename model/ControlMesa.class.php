<?php
  class ControlMesa {
    private $idControlMesa;
    private $dataAbertura;
    private $dataFechado;
    private $idMesa;

    public function createControlMesa($dataAbertura, $idMesa) {
      $sql = "INSERT INTO Controle_Mesa
      (dataAbertura, idMesa)
      VALUES (" . $dataAbertura . "," . $idMesa . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    public function getDataAbertura($idControlMesa){
      $sql = "SELECT dataAbertura FROM Controle_Mesa WHERE idControlMesa = " . $idControlMesa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dataAbertura;
        }
      }
    }

    public function setDataAbertura($dataAbertura, $idControlMesa) {
      $sql = "UPDATE Caixa
      SET dataAbertura = " . $dataAbertura . " WHERE idControlMesa =". $idControlMesa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getDataFechado($idControlMesa){
      $sql = "SELECT dataFechado FROM Controle_Mesa WHERE idControlMesa = " . $idControlMesa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dataFechado;
        }
      }
    }

    public function setDataFechado($dataFechado, $idControlMesa) {
      $sql = "UPDATE Caixa
      SET dataFechado = " . $dataFechado . " WHERE idControlMesa =". $idControlMesa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdMesa($idControlMesa){
      $sql = "SELECT idMesa FROM Controle_Mesa WHERE idControlMesa = " . $idControlMesa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idMesa;
        }
      }
    }

    public function setIdMesa($idMesa, $idControlMesa) {
      $sql = "UPDATE Caixa
      SET idMesa = " . $idMesa . " WHERE idControlMesa =". $idControlMesa;

      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getLastId() {
      global $xml;
      $sql = "SELECT idControlMesa FROM Controle_Mesa ORDER BY idControlMesa DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idControlMesa;
        }
      }
    }
}
?>