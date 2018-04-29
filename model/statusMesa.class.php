<?php
  class StatusMesa {

    public function getStatusMesa($idStatusMesa) {
      $sql = "SELECT statusMesa FROM StatusMesa WHERE idStatusMesa = " . $idStatusMesa;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->statusMesa;
        }
      }
    }

    public function setStatusMesa($statusMesa, $idStatusMesa) {
      $sql = "UPDATE StatusMesa
      SET statusMesa = " . $statusMesa . " WHERE idStatusMesa=". $idStatusMesa;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $_SESSION['conn']->error;
      }
    }

  }
 ?>
