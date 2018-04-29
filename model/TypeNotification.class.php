<?php
     class TypeNotification {
        $idTypeNotification;
        $name;

        function createTypeNotification($name) {
          global $xml;
          $sql = "INSERT INTO TypeNotification (name)
          VALUES (". $name . ")";
          if ($_SESSION['conn']->query($sql) === TRUE) {
            $last_id = $_SESSION['conn']->insert_id;
          } else {
            echo $xml->error . $sql . "<br>" . $_SESSION['conn']->error;
          }
        }

        function getName($idNotification) {
           $sql = "SELECT name FROM Notification WHERE idNotification = " . $idNotification;
           $result = $_SESSION['conn']->query($sql);
           if ($result) {
              while($obj = $result->fetch_object()){
                  return $obj->name;
              }
           }
        }

        function setName($name, $idNotification) {
          global $xml;
          $sql = "UPDATE Notification SET name = " . $name .
        " WHERE idNotification=" . $idNotification;
          if ($_SESSION['conn']->query($sql) === TRUE) {
             echo $xml->sql_sucess_update;
          } else {
            echo $xml->sql_error_update . $conn->error;
            }
          }

     }
 ?>
