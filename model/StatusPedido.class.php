<?php
  class StatusPedido {
    private $idStatusPedido;
    private $statusName;

    public function createStatusPedido($statusName){
      $sql = "INSERT INTO Statuspedido
      (statusName)
      VALUES (" . $statusName . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getStatusName($idStatusPedido) {
      $sql = "SELECT statusName FROM StatusPedido WHERE
      idStatusPedido = " . $idStatusPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->statusName;
        }
      }
    }

    public function setStatusName($statusName, $idStatusPedido) {
      $sql = "UPDATE StatusPedido
      SET statusName = " . $statusName . " WHERE
      idStatusPedido=". $idStatusPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
