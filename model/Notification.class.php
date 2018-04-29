<?php
     class Notification {
       $idNotification;
       $idTypeNotification;
       $description;
       $idProduto;
       $idDivida;
       $resolvePath;

    function createNotificationStock($idTypeNotification, $description, $idProduto, $resolvePath) {
      global $xml;
      $sql = "INSERT INTO Notification (idTypeNotification, description, idProduto, resolvePath)
      VALUES (" . $idTypeNotification . ",". $description . "," . $idProduto . "," . $resolvePath . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
          $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    function createNotificationPayment($idTypeNotification, $description, $idDivida, $resolvePath) {
      global $xml;
      $sql = "INSERT INTO Notification (idTypeNotification, description, idDivida
      resolvePath) VALUES (" . $idTypeNotification . "," . $description . "," . $idDivida . "," . $resolvePath . ")";
      if($_SESSION['conn']->query($sql) === TRUE) {
         $last_id = $_SESSION['conn']->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
      }
    }

    function getIdTypeNotification($idNotification) {
       $sql = "SELECT idTypeNotification FROM Notification WHERE idNotification = " . $idNotification;
       $result = $_SESSION['conn']->query($sql);
       if ($result) {
          while($obj = $result->fetch_object()){
              return $obj->idTypeNotification;
          }
       }
    }

    function setIdTypeNotification($idTypeNotification, $idNotification) {
      global $xml;
      $sql = "UPDATE Notification SET idTypeNotification = " . $idTypeNotification .
    " WHERE idNotification=" . $idNotification;
      if ($_SESSION['conn']->query($sql) === TRUE) {
         echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
        }
      }

      function getDescription($idNotification) {
        $sql = "SELECT description FROM Notification WHERE idNotification = " . $idNotification;
        $result = $_SESSION['conn']->query($sql);
        if ($result) {
           while($obj = $result->fetch_object()){
               return $obj->description;
           }
         }
      }

      function setDescription($description, $idNotification) {
        global $xml;
        $sql = "UPDATE Notification SET description = " . $description .
      " WHERE idNotification=" . $idNotification;
        if ($_SESSION['conn']->query($sql) === TRUE) {
           echo $xml->sql_sucess_update;
        } else {
          echo $xml->sql_error_update . $conn->error;
          }
       }

       function getIdProduto($idNotification) {
         $sql = "SELECT idProduto FROM Notification WHERE idNotification = " . $idNotification;
         $result = $_SESSION['conn']->query($sql);
         if ($result) {
            while($obj = $result->fetch_object()){
                return $obj->idProduto;
            }
          }
       }

       function setIdProduto($idProduto, $idNotification) {
         global $xml;
         $sql = "UPDATE Notification SET idProduto = " . $idProduto .
       " WHERE idNotification=" . $idNotification;
         if ($_SESSION['conn']->query($sql) === TRUE) {
            echo $xml->sql_sucess_update;
         } else {
           echo $xml->sql_error_update . $conn->error;
           }
        }

        function getIdDivida($idNotification) {
          $sql = "SELECT idDivida FROM Notification WHERE idNotification = " . $idNotification;
          $result = $_SESSION['conn']->query($sql);
          if ($result) {
             while($obj = $result->fetch_object()){
                 return $obj->idDivida;
             }
           }
        }

        function setIdDivida($idDivida, $idNotification) {
          global $xml;
          $sql = "UPDATE Notification SET idDivida = " . $idDivida .
        " WHERE idNotification=" . $idNotification;
          if ($_SESSION['conn']->query($sql) === TRUE) {
             echo $xml->sql_sucess_update;
          } else {
            echo $xml->sql_error_update . $conn->error;
            }
         }

         function getResolvePath($idNotification) {
           $sql = "SELECT resolvePath FROM Notification WHERE idNotification = " . $idNotification;
           $result = $_SESSION['conn']->query($sql);
           if ($result) {
              while($obj = $result->fetch_object()){
                  return $obj->resolvePath;
              }
            }
         }

         function setResolvePath($resolvePath, $idNotification) {
           global $xml;
           $sql = "UPDATE Notification SET resolvePath = " . $resolvePath .
         " WHERE idNotification=" . $idNotification;
           if ($_SESSION['conn']->query($sql) === TRUE) {
              echo $xml->sql_sucess_update;
           } else {
             echo $xml->sql_error_update . $conn->error;
             }
          }
     }

?>
