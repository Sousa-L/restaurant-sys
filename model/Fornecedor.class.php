<?php
  class Fornecedor {
    private $idFornecedores;
    private $name;
    private $adress;
    private $phone;
    private $cnpj;


   function createFornecedor($name, $adress, $phone, $cnpj){
     global $xml;
     $sql = "INSERT INTO Fornecedores
      (name, adress, phone, cnpj)
      VALUES (\"" . $name . "\",\"" . $adress . "\"," . $phone . "," .
      $cnpj . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
              echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
    }
}
   function getName($idFornecedores) {
      $sql = "SELECT name FROM Fornecedores WHERE
      idFornecedores = " . $idFornecedores;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["name"];
      } else {
        return null;
      }
    }

   function setName($name, $idFornecedores) {
      $sql = "UPDATE Fornecedores
      SET name = " . $name . " WHERE idFornecedores=". $idFornecedores;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

   function getAdress($idFornecedores) {
      $sql = "SELECT adress FROM Fornecedores WHERE
      idFornecedores = " . $idFornecedores;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["adress"];
      } else {
        return null;
      }
    }

   function setAdress($name, $idFornecedores) {
      $sql = "UPDATE Fornecedores
      SET adress = " . $adress . " WHERE idFornecedores=". $idFornecedores;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

  function getPhone($idFornecedores) {
      $sql = "SELECT phone FROM Fornecedores WHERE
      idFornecedores = " . $idFornecedores;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["phone"];
      } else {
        return null;
      }
    }

  function setPhone($name, $idFornecedores) {
      $sql = "UPDATE Fornecedores
      SET phone = " . $phone . " WHERE idFornecedores=". $idFornecedores;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

   function getCnpj($idFornecedores) {
      $sql = "SELECT cnpj FROM Fornecedores WHERE
      idFornecedores = " . $idFornecedores;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["cnpj"];
      } else {
        return null;
      }
    }

   function setCnpj($name, $idFornecedores) {
      $sql = "UPDATE Fornecedores
      SET cnpj = " . $cnpj . " WHERE idFornecedoresr=". $idFornecedores;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }


   function getLastId() {
      global $xml;
      $sql = "SELECT idFornecedores FROM Fornecedores ORDER BY idFornecedores DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
        return $obj->idFornecedores;
           }
         }
       }

       function deleteForne($idFornecedores){
         global $xml;
         $sql = "DELETE FROM Fornecedores WHERE idFornecedores = ". $idFornecedores;
         if ($_SESSION['conn']->query($sql) === TRUE) {
           echo $xml->sql_sucess_update;
         } else {
           echo $xml->sql_error_update . $conn->error;
         }
       }
    }
 ?>
