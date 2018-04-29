<?php
  $xml_config = simplexml_load_file(dirname(__DIR__,1) . "/config.xml");
  $xml = simplexml_load_file(dirname(__DIR__,1) . "/". "language/" .
  $xml_config->language . "/system/system.xml");
  class Usuario {
    private $idUsuario;
    private $username;
    private $password;
    private $status;
    private $name;
    private $cpf;
    private $rg;
    private $dateNasc;
    private $phone;
    private $adress;
    private $idCargo;
    private $cargo;
    private $nivelAcesso;
    private $email;
    private $porcentagem;
    private $tipoUsuario;
    function createUsuario($username, $password, $name, $cpf, $rg, $dateNasc,
  $phone, $adress, $idCargo, $cargo, $nivelAcesso, $email, $porcentagem, $tipoUsuario) {
      global $connection, $xml;
      $sql = "INSERT INTO Usuario
      (username, password, name, cpf, rg, dateNasc, phone, adress, idCargo, cargo, nivelAcesso, email, porcentagem,
      tipoUsuario)
      VALUES (" . $username . "," . $password . "," . $name . "," . $cpf . ","
      . $rg . "," . $dateNasc . "," . $phone . "," . $adress . ","
      . idCargo . "," . $cargo . "," . $nivelAcesso . "," . $email . "," . $porcentagem . "," . $tipoUsuario . ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
        $this->idUsuario = $last_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
      $this->cpf = $cpf;
      $this->rg = $rg;
      $this->dateNasc = $dateNasc;
      $this->phone = $phone;
      $this->adress = $adress;
      $this->idCargo = $idCargo;
      $this->cargo = $cargo;
      $this->nivelAcesso = $nivelAcesso;
      $this->email = $email;
      $this->porcentagem = $porcentagem;
      $this->tipoUsuario = $tipoUsuario;
    }

    function setSessionIdUsuario($idUsuario){
      $this->idUsuario = $idUsuario;
    }

    function getIdUsuario($username) {
      global $connection, $xml;
      $sql = "SELECT idUsuario FROM Usuario WHERE username = \"" . $username."\";";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idUsuario;
        }
      }
    }

    function checkUsername($username) {
      global $xml;
      //$conn = $connection->createConn();
      $sql = "SELECT username FROM Usuario WHERE username = \"" . $username . "\";";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->username;
        }
      }
    }

    function getUsername($idUsuario) {
      global $xml;
      $sql = "SELECT username FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["username"];
      } else {
        return null;
      }
    }

    function setUsername($username, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET username = " . $username . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getPassword($username){
      global $xml;
      $sql = "SELECT password FROM Usuario WHERE username = \"" . $username."\";";
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["password"];
      } else {
        return null;
      }
    }

    function setPassword($password, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET password = " . $password . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getStatus($idUsuario){
      global $xml;
      $sql = "SELECT status FROM Usuario WHERE idUsuario = \"" . $idUsuario."\";";
      $result = $_SESSION['conn']->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["idUsuario"];
      } else {
        return null;
      }
    }

    function setStatus($status, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET status = " . $status . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getName($idUsuario){
      global $xml;
      $sql = "SELECT name FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->name;
        }
      }
    }

    function setName($name, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET name = " . $name . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getCpf($idUsuario){
      global $connection, $xml;
      $sql = "SELECT cpf FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["cpf"];
      } else {
        return null;
      }
    }

    function setCpf($cpf, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET cpf = " . $cpf . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getRg($idUsuario){
      global $connection, $xml;
      $sql = "SELECT rg FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["rg"];
      } else {
        return null;
      }
    }

    function setRg($rg, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET rg $tipoUsuario= " . $rg . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getDateNasc($idUsuario){
      global $connection, $xml;
      $sql = "SELECT dateNasc FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["dateNasc"];
      } else {
        return null;
      }
    }

    function setDateNasc($dateNasc, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET dateNasc = " . $dateNasc . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getPhone($idUsuario){
      global $connection, $xml;
      $sql = "SELECT phone FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["phone"];
      } else {
        return null;
      }
    }

    function setPhone($phone, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET phone = " . $phone . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getAdress($idUsuario){
      global $connection, $xml;
      $sql = "SELECT adress FROM Usuario WHERE idUsuario = " . $idUsuario;
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["adress"];
      } else {
        return null;
      }
    }

    function setAdress($adress, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET adress = " . $adress . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

    function getIdCargo($idUsuario){
      global $xml;
      $sql = "SELECT idCargo FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->idCargo;
        }
      }
    }

    function setIdCargo($idCargo, $idUsuario){
      global $connection, $xml;
      $sql = "UPDATE Usuario
      SET idCargo = " . $name . " WHERE idUsuario=". $idUsuario;

      if ($connection->conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $connection->conn->error;
      }
    }

   function getCargo($idUsuario) {
     global $xml;
     $sql = "SELECT cargo FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->cargo;
       }
     }
  }

  function setCargo($cargo, $idUsuario) {
    global $xml;
    $sql = "UPDATE Usuario
    SET cargo = " . $cargo . " WHERE idUsuario=". $idUsuario;

    if ($_SESSION['conn']->query($sql) === TRUE) {
      echo $xml->sql_sucess_update;
    } else {
      echo $xml->sql_error_update . $conn->error;
    }

  }

  function getNivelAcesso($idUsuario) {
    global $xml;
    $sql = "SELECT nivelAcesso FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
    $result = $_SESSION['conn']->query($sql);
    if ($result) {
      while($obj = $result->fetch_object()){
          return $obj->nivelAcesso;
      }
    }
  }

  function setNivelAcesso($nivelAcesso, $idUsuario) {
    global $xml;
    $sql = "UPDATE Usuario
    SET nivelAcesso = " . $nivelAcesso . " WHERE idUsuario=". $idUsuario;

    if ($_SESSION['conn']->query($sql) === TRUE) {
      echo $xml->sql_sucess_update;
    } else {
      echo $xml->sql_error_update . $conn->error;
    }
 }

 function getEmail($idUsuario) {
   global $xml;
   $sql = "SELECT email FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
   $result = $_SESSION['conn']->query($sql);
   if ($result) {
     while($obj = $result->fetch_object()){
         return $obj->email;
     }
   }
 }

 function setEmail($email, $idUsuario) {
   global $xml;
   $sql = "UPDATE Usuario
   SET email = " . $email . " WHERE idUsuario=". $idUsuario;

   if ($_SESSION['conn']->query($sql) === TRUE) {
     echo $xml->sql_sucess_update;
   } else {
     echo $xml->sql_error_update . $conn->error;
   }
 }
 function getPorcentagem($idUsuario) {
   global $xml;
   $sql = "SELECT porcentagem FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
   $result = $_SESSION['conn']->query($sql);
   if ($result) {
     while($obj = $result->fetch_object()){
         return $obj->porcentagem;
     }
   }
 }

 function setPorcentagem($porcentagem, $idUsuario) {
   global $xml;
   $sql = "UPDATE Usuario
   SET porcentagem = " . $porcentagem . " WHERE idUsuario=". $idUsuario;

   if ($_SESSION['conn']->query($sql) === TRUE) {
     echo $xml->sql_sucess_update;
   } else {
     echo $xml->sql_error_update . $conn->error;
   }
 }

 function getTipoUsuario($idUsuario) {
   global $xml;
   $sql = "SELECT tipoUsuario FROM Usuario WHERE idUsuario = " . $idUsuario . ";";
   $result = $_SESSION['conn']->query($sql);
   if ($result) {
     while($obj = $result->fetch_object()){
         return $obj->tipoUsuario;
     }
   }
 }

 function setTipoUsuario($tipoUsuario, $idUsuario) {
   global $xml;
   $sql = "UPDATE Usuario
   SET tipoUsuario = " . $tipoUsuario . " WHERE idUsuario=". $idUsuario;

   if ($_SESSION['conn']->query($sql) === TRUE) {
     echo $xml->sql_sucess_update;
   } else {
     echo $xml->sql_error_update . $conn->error;
   }
  }
}
 ?>
