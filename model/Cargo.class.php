<?php
  class Cargo {
    private $idCargo;
    private $cargo;

    public function createCargo($cargoMesa){
      $sql = "INSERT INTO Cargo
      (cargo)
      VALUES (" . $cargo . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    function getCargo($idCargo) {
      $sql = "SELECT cargo FROM Cargo WHERE idCargo = " . $idCargo;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->cargo;
        }
      }
    }

    public function setCargo($cargo, $idCargo) {
      $sql = "UPDATE Cargo
      SET cargo = " . $cargo . " WHERE idCargo=". $idCargo;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
