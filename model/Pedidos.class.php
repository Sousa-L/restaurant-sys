<?php
  class Pedidos {
    private $idPedido;
    private $idProduto;
    private $qtdProduto;
    private $valProduto;
    private $idComplemento;
    private $dateP;
    private $idMesa;
    private $idUsuario;
    private $idStatusPedido;

    function createPedidos($idProduto, $qtdProduto, $total_value, $idMesa, $idUsuario, $idStatusPedido){
      global $xml;
      $sql = "INSERT INTO Pedidos
      (idProduto, qtdProduto, total_value, dateP, idMesa,
        idUsuario, idStatusPedido)
      VALUES (" . $idProduto . "," . $qtdProduto . "," . $total_value . ", NOW()," . $idMesa . "," . $idUsuario .
      "," . $idStatusPedido . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    public function getIdProduto($idPedido) {
      $sql = "SELECT idProduto FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idProduto;
        }
      }
    }

    public function setIdProduto($idPedido, $idProduto) {
      $sql = "UPDATE Pedidos
      SET idProduto = " . $idProduto . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getQtdProduto($idPedido) {
      $sql = "SELECT qtdProduto FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->qtdProduto;
        }
      }
    }

    function setQtdProduto($qtdProduto, $idPedido) {
      global $xml;
      $sql = "UPDATE Pedidos
      SET qtdProduto = " . $qtdProduto . " WHERE idPedido=". $idPedido;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getTotalValue($idPedido) {
      $sql = "SELECT total_value FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->total_value;
        }
      }
    }

    public function setTotalValue($total_value, $idPedido) {
      global $xml;
      $sql = "UPDATE Pedidos
      SET total_value = " . $total_value . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getTotalProfit($idPedido) {
      $sql = "SELECT total_profit FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->total_profit;
        }
      }
    }

    function setTotalProfit($total_profit, $idPedido) {
      global $xml;
      $sql = "UPDATE Pedidos
      SET total_profit = " . $total_profit . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }



    public function getIdComplemento($idPedido) {
      $sql = "SELECT idComplemento FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idComplemento;
        }
      }
    }

    public function setIdComplemento($idPedido, $idComplemento) {
      $sql = "UPDATE Pedidos
      SET idComplemento = " . $idComplemento . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getDateP($idPedido) {
      $sql = "SELECT dateP FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->dateP;
        }
      }
    }

    public function setDateP($dateP, $idPedido) {
      $sql = "UPDATE Pedidos
      SET dateP = " . $dateP . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdMesa($idPedido) {
      $sql = "SELECT idMesa FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idMesa;
        }
      }
    }

    public function setIdMesa($idMesa, $idPedido) {
      $sql = "UPDATE Pedidos
      SET idMesa = " . $idMesa . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdUsuario($idPedido) {
      $sql = "SELECT idUsuario FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idUsuario;
        }
      }
    }

    public function setIdUsuario($idUsuario, $idPedido) {
      $sql = "UPDATE Pedidos
      SET idUsuario = " . $idUsuario . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getIdStatusPedido($idPedido) {
      $sql = "SELECT idStatusPedido FROM Pedidos WHERE idPedido = " . $idPedido;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idStatusPedido;
        }
      }
    }

    public function setIdStatusPedido($idPedido, $idStatusPedido) {
      $sql = "UPDATE Pedidos
      SET idStatusPedido = " . $idStatusPedido . " WHERE idPedido=". $idPedido;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getLastId() {
      global $xml;
      $sql = "SELECT idPedido FROM Pedidos ORDER BY idPedido DESC LIMIT 1";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idPedido;
        }
      }
    }
    function deleteOrder($idPedido){
      global $xml;
      $sql = "DELETE FROM Pedidos WHERE idPedido = ". $idPedido;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function deleteOrderTable($idMesa) {
      global $xml;
      $sql = "DELETE FROM Pedidos WHERE idMesa = ". $idMesa;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

  function getTotalPedidos($idMesa) {
    global $xml;
    $sql = "SELECT SUM(total_value) AS soma FROM Pedidos WHERE idMesa = ". $idMesa . " AND idStatusPedido = 1";
    $result = $_SESSION['conn']->query($sql);
    if ($result) {
      while($obj = $result->fetch_object()){
          return $obj->soma;
      }
    }
  }
  }
 ?>
