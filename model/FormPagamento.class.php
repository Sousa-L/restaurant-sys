<?php
  public class FormPagamento {
    private $idFormPag;
    private $formPag;
    private $tipoFormPag;
    $connection = new SQLconn;
    $xml_config = simplexml_load_file(dirname(__DIR__) . "config.xml");
    $xml = simplexml_load_file(dirname(__DIR__) . "language/" .
    $xml_config->language . "/system/system.xml");

    public function createFormPagamento($idFormPag, $formPag, $tipoFormPag){
      $sql = "INSERT INTO FormPagamento
      (formPag, tipoFormPag)
      VALUES (" . $formPag . "," . $tipoFormPag . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getFormPag($idFormPag) {
      $sql = "SELECT formPag FROM FormPagamento WHERE
      idFormPag = " . $idFormPag;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["formPag"];
      } else {
        return null;
      }
    }

    public function setFormPag($formPag, $idFormPag) {
      $sql = "UPDATE FormPagamento
      SET formPag = " . $formPag . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getTipoFormPag($idFormPag) {
      $sql = "SELECT tipoFormPag FROM FormPagamento WHERE
      idFormPag = " . $idFormPag;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["tipoFormPag"];
      } else {
        return null;
      }
    }

    public function setFormPag($tipoFormPag, $idFormPag) {
      $sql = "UPDATE FormPagamento
      SET tipoFormPag = " . $tipoFormPag . " WHERE idDividas=". $idDividas;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

  }
 ?>
