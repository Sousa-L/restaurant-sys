<?php
class Couvert {
  private $id_couvert;
  private $couvert;


   function getCouvert($id_couvert) {
     global $xml;
     $sql = "SELECT couvert FROM Couvert WHERE id_couvert = " . $id_couvert;
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->couvert;
       }
     }
   }

   function setCouvert($couvert, $id_couvert) {
     $sql = "UPDATE Couvert
     SET couvert = " . $couvert . " WHERE id_couvert=". $id_couvert;
     if ($conn->query($sql) === TRUE) {
       echo $xml->sql_sucess_update;
     } else {
       echo $xml->sql_error_update . $conn->error;
     }
   }
}

 ?>
