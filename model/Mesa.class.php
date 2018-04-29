<?php
  class Mesa {
    private $idMesa;
    private $statusMesa;

    public function createMesa($statusMesa){
      $sql = "INSERT INTO Mesa
      (statusMesa)
      VALUES (" . $statusMesa . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    public function getStatusMesa($idMesa) {
      $sql = "SELECT statusMesa FROM Mesa WHERE idMesa = " . $idMesa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->statusMesa;
        }
      }
    }

    public function setStatusMesa($statusMesa, $idMesa) {
      $sql = "UPDATE Mesa
      SET statusMesa = " . $statusMesa . " WHERE idMesa=". $idMesa;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

     function getLastId() {
      global $xml;
      $sql = "SELECT idMesa FROM Mesa ORDER BY idMesa DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idMesa;
        }
      }
    }
  }
 ?>
