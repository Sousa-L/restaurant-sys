<?php
  public class Complemento {
    private $idComplemento;
    private $name;
    private $stock;
    $connection = new SQLconn;
    $xml_config = simplexml_load_file(dirname(__DIR__) . "config.xml");
    $xml = simplexml_load_file(dirname(__DIR__) . "language/" .
    $xml_config->language . "/system/system.xml");

    public function createComplemento($name, $stock){
      $sql = "INSERT INTO Complemento
      (name, stock)
      VALUES (" . $name . "," . $stock . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getName($idComplemento) {
      $sql = "SELECT name FROM Complemento WHERE
      idComplemento = " . $idComplemento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["name"];
      } else {
        return null;
      }
    }

    public function setName($name, $idComplemento) {
      $sql = "UPDATE Complemento
      SET name = " . $name . " WHERE idComplemento=". $idComplemento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getStock($idComplemento) {
      $sql = "SELECT stock FROM Complemento WHERE
      idComplemento = " . $idComplemento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["stock"];
      } else {
        return null;
      }
    }

    public function setStock($stock, $idComplemento) {
      $sql = "UPDATE Complemento
      SET stock = " . $stock . " WHERE idComplemento=". $idComplemento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
