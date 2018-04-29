<?php
  class Estabelecimento {
    private $name;
    private $phone;
    private $cnpj;
    private $adress;
    private $default;


    public function createEstabelecimento($name, $phone, $cnpj, $adress){
      $sql = "INSERT INTO Estabelecimento
      (name, phone, cnpj, adress)
      VALUES (" . $name . "," . $phone . "," . $cnpj . "," .
      $adress . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getName($idEstabelecimento) {
      $sql = "SELECT name FROM Estabelecimento ";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->name;
        }
      }
      /*if (mysqli_num_rows($result) > 0) {
        $return = mysqli_fetch_row($result);
        return $return["name"];
      } else {
        return null;
      }*/
    }

    public function setName($name, $idEstabelecimento) {
      $sql = "UPDATE Estabelecimento
      SET name = " . $name . " WHERE idEstabelecimento=". $idComplemento;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getPhone($idEstabelecimento) {
      $sql = "SELECT phone FROM Estabelecimento WHERE
      idEstabelecimento = " . $idEstabelecimento;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["phone"];
      } else {
        return null;
      }
    }

    public function setPhone($phone, $idEstabelecimento) {
      $sql = "UPDATE Estabelecimento
      SET phone = " . $phone . " WHERE idEstabelecimento=". $idComplemento;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getCnpj($idEstabelecimento) {
      $sql = "SELECT cnpj FROM Estabelecimento WHERE
      idEstabelecimento = " . $idEstabelecimento;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["cnpj"];
      } else {
        return null;
      }
    }

    public function setCnpj($cnpj, $idEstabelecimento) {
      $sql = "UPDATE Estabelecimento
      SET cnpj = " . $cnpj . " WHERE idEstabelecimento=". $idEstabelecimento;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
    public function getAdress($idEstabelecimento) {
      $sql = "SELECT adress FROM Estabelecimento WHERE
      idEstabelecimento = " . $idEstabelecimento;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["adress"];
      } else {
        return null;
      }
    }

    public function setAdress($adress, $idEstabelecimento) {
      $sql = "UPDATE Estabelecimento
      SET adress = " . $adress . " WHERE idEstabelecimentoo=". $idEstabelecimento;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
