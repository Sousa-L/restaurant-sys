<?php
  public class Pagamento {
    private $idPagamento;
    private $idMesa;
    private $idUsuario;
    private $valPedido;
    private $idFormPag;
    private $valFormPag;
    private $datePag;
    $connection = new SQLconn;
    $xml_config = simplexml_load_file(dirname(__DIR__) . "config.xml");
    $xml = simplexml_load_file(dirname(__DIR__) . "language/" .
    $xml_config->language . "/system/system.xml");

    public function createPagamento($idMesa, $idUsuario, $valPedido,
    $idFormPag1, $idFormaPag2, $idFormPag3, $valFormPag1, $valFormPag2,
    $valFormPag3, $datepag){
      $sql = "INSERT INTO Pagamento
      (idMesa, idUsuario, valPedido, idFormPag1, idFormPag2, idFormPag3,
      valFormPag1, valFormPag2, valFormPag3, datePag)
      VALUES (" . $idMesa . "," . $idUsuario . "," . $valPedido . "," .
      $idFormPag1 . "," . $idFormPag2 . "," . $idFormPag3 . "," . $valFormpag1 .
      "," . $valFormPag2 . "," . $idFormPag3 . "," . $datePag . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getIdMesa($idPagamento) {
      $sql = "SELECT idMesa FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idMesa"];
      } else {
        return null;
      }
    }

    public function setIdMesa($idMesa, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET idMesa = " . $idMesa . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdUsuario($idPagamento) {
      $sql = "SELECT idUsuario FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idUsuario"];
      } else {
        return null;
      }
    }

    public function setIdUsuario($idUsuario, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET idUsuario = " . $idUsuario . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getValPedido($idPagamento) {
      $sql = "SELECT valPedido FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["valPedido"];
      } else {
        return null;
      }
    }

    public function setIdUsuario($idUsuario, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET valPedido = " . $valPedido . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdFormPag1($idPagamento) {
      $sql = "SELECT idFormPag1 FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idFormPag1"];
      } else {
        return null;
      }
    }

    public function setIdFormPag1($idUsuario, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET idFormPag1 = " . $idFormPag1 . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdFormPag2($idPagamento) {
      $sql = "SELECT idFormPag2 FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idFormPag2"];
      } else {
        return null;
      }
    }

    public function setIdFormPag2($idFormPag2, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET idFormPag2 = " . $idFormPag2 . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdFormPag3($idPagamento) {
      $sql = "SELECT idFormPag3 FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idFormPag3"];
      } else {
        return null;
      }
    }

    public function setIdFormPag3($idUsuario, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET idFormPag3 = " . $idFormPag3 . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getDatePag($idPagamento) {
      $sql = "SELECT datePag FROM Pagamento WHERE idPagamento = " . $idPagamento;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["datePag"];
      } else {
        return null;
      }
    }

    public function setDatePag($idUsuario, $idPagamento) {
      $sql = "UPDATE Pagamento
      SET datePag = " . $datePag . " WHERE idPagamento=". $idPagamento;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
    function getLastId() {
      global $xml;
      $sql = "SELECT idPagamento FROM Pagamento ORDER BY idPagamento DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idPedido;
        }
      }
    }
  }
 ?>
