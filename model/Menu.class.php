<?php
 class Menu {
   private $idMenu;
   private $name;
   private $idIcon;

   function createMenu($idMenu, $name, $idIcon){
     $sql = "INSERT INTO Menu
     (idMenu, name, idIcon)
     VALUES (" . $idMenu . "," . $name . "," . $idIcon . ")";
     if ($_SESSION['conn']->query($sql) === TRUE) {
       $last_id = $_SESSION['conn']->insert_id;
     } else {
       echo $xml->error . $sql . "<br>" . $connection->conn->error;
     }
   }

   function getName($idMenu) {
     $sql = "SELECT name FROM Menu WHERE idMenu = ". $idMenu;
     $result = $_SESSION['conn']->query($sql);
     if ($result) {
       while($obj = $result->fetch_object()){
           return $obj->name;
       }
     }
   }

     function setName($name, $idMenu) {
       $sql = "UPDATE Menu
       SET name = " . $name . " WHERE idMenu=". $idMenu;
       if ($_SESSION['conn']->query($sql) === TRUE) {
         echo $xml->sql_sucess_update;
       } else {
         echo $xml->sql_error_update . $conn->error;
       }
     }

     function getHref($idMenu) {
       $sql = "SELECT href FROM Menu WHERE idMenu = ". $idMenu;
       $result = $_SESSION['conn']->query($sql);
       if ($result) {
         while($obj = $result->fetch_object()){
             return $obj->href;
         }
       }
     }

       function setHref($name, $idMenu) {
         $sql = "UPDATE Menu
         SET href = " . $href . " WHERE idMenu=". $idMenu;
         if ($_SESSION['conn']->query($sql) === TRUE) {
           echo $xml->sql_sucess_update;
         } else {
           echo $xml->sql_error_update . $conn->error;
         }
       }

     function getIdIcon($idMenu) {
       $sql = "SELECT idIcon FROM Menu WHERE idMenu = ". $idMenu;
       $result = $_SESSION['conn']->query($sql);
       if ($result) {
         while($obj = $result->fetch_object()){
             return $obj->idIcon;
         }
       }
     }

     function getLastId() {
       global $xml;
       $sql = "SELECT idMenu FROM Menu ORDER BY idMenu DESC LIMIT 1";
       $result = $_SESSION['conn']->query($sql);
       if ($result) {
         while($obj = $result->fetch_object()){
             return $obj->idMenu;
         }
       }
     }

 }
 ?>
