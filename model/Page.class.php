<?php
  class Page {
    private $idPage;
    private $name;
    private $title;
    private $idIcon;

    public function createPage($name, $title){
      $sql = "INSERT INTO Page
      (name, title)
      VALUES (" . $name . "," . $title . ")";
      if ($_SESSION['conn']->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getName($idPage) {
      $sql = "SELECT name FROM Page WHERE idPage = " . $idPage. ";";
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->name;
        }
      }
    }

    public function setName($name, $idPage) {
      $sql = "UPDATE Page
      SET name = " . $name . " WHERE idPage=". $idPage;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getTitle($idPage) {
      $sql = "SELECT title FROM Page WHERE idPage = " . $idPage;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->title;
        }
      }
    }

    public function setTitle($title, $idPage) {
      $sql = "UPDATE Page
      SET title = " . $title . " WHERE idPage=". $idPage;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
