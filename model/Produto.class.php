<?php

  class Produto{
    private $idProduto;
    private $name;
    private $price;
    private $stock;
    private $lucro;
    private $idFornecedor;
     function createProduto($name, $price, $stock, $min_stock, $profit, $idCategoria, $buy_price, $bar_code,$description,$provider){
      global $xml;
      $sql = "INSERT INTO Produto
      (`name`, `price`, `stock`, `min_stock`, `profit`, `idCategoria`, `buy_price`, `barcode`, `description`, `idFornecedores`)
      VALUES (\"" . $name . "\"," . $price . "," . $stock . "," . $min_stock . "," . $profit . "," . $idCategoria .  "," . $buy_price . "," . $bar_code . ",\"" . $description ."\",". $provider . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    function getIdProduto($name) {
      global $xml;
     $sql = "SELECT idProduto FROM Produto WHERE name = \"" . $name."\"";
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->idProduto;
       }
     }
   }

     function getName($idProduto) {
       global $xml;
      $sql = "SELECT name FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->name;
        }
      }
    }

    function getNameByCateg($idCategoria) {
      global $xml;
     $sql = "SELECT name FROM Produto WHERE idCategoria = " . $idCategoria;
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           echo '<option value="'.$this->getIdProduto($obj->name).'">'.$obj->name.'</option>';
       }
     }
   }

     function setName($name, $idProduto) {
       global $xml;
      $sql = "UPDATE Produto
      SET name = \"" . $name . "\" WHERE idProduto=". $idProduto;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $_SESSION['conn']->error;
      }
    }

     function getPrice($idProduto) {
       global $xml;
      $sql = "SELECT price FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->price;
        }
      }
    }

     function setPrice($price, $idProduto) {
       global $xml;
      $sql = "UPDATE Produto
      SET price = " . $price . " WHERE idProduto=". $idProduto;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getBuyPrice($idProduto) {
      $sql = "SELECT buy_price FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->buy_price;
        }
      }
    }

    function setBuyPrice($buy_price, $idProduto) {
      global $xml;
     $sql = "UPDATE Produto
     SET buy_price = " . $buy_price . " WHERE idProduto=". $idProduto;
     if ($_SESSION['conn']->query($sql) === TRUE) {
       echo $xml->sql_sucess_update;
     } else {
       echo $xml->sql_error_update . $conn->error;
     }

  }
     function getStock($idProduto) {
       global $xml;
      $sql = "SELECT stock FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->stock;
        }
      }
    }

     function setStock($stock, $idProduto) {
       global $xml;
      $sql = "UPDATE Produto
      SET stock = " . $stock . " WHERE idProduto=". $idProduto;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        //echo '<script>alert("' . $xml->sql_sucess_update . '");</script>';
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getProfit($idProduto) {
      $sql = "SELECT profit FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->profit;
        }
      }
    }

    function setProfit($profit, $idProduto) {
      global $xml;
      $sql = "UPDATE Produto
      SET profit = " . $profit . " WHERE idProduto=". $idProduto;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getBarCode($idProduto) {
      $sql = "SELECT barcode FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->barcode;
        }
      }
    }

    function setBarCode($barcode, $idProduto) {
      global $xml;
      $sql = "UPDATE Produto
      SET barcode = " . $barcode . " WHERE idProduto=". $idProduto;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    function getDescription($idProduto) {
      $sql = "SELECT description FROM Produto WHERE idProduto = " . $idProduto;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->description;
        }
      }
    }

    function setDescription($description, $idProduto) {
      global $xml;
      $sql = "UPDATE Produto
      SET description = " . $description . " WHERE idProduto=". $idProduto;
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }


    function getLastId() {
     global $xml;
     $sql = "SELECT idProduto FROM Produto ORDER BY idProduto DESC LIMIT 1";
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->idProduto;
       }
     }
   }

   function getIdCategoria($idProduto) {
     global $xml;
     $sql = "SELECT idCategoria FROM Produto WHERE idProduto = " . $idProduto;
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->idCategoria;
       }
     }
   }

   function deleteProduct($idProduto){
     global $xml;
     $sql = "DELETE FROM Produto WHERE idProduto = $idProduto";
     if ($_SESSION['conn']->query($sql) === TRUE) {
       echo $xml->sql_sucess_update;
     } else {
       echo $xml->sql_error_update . $conn->error;
     }
   }


  }
 ?>
