<?php
  class Icon{
    private $idIcon;
    private $path;

    public function createIcon($url){
      $sql = "INSERT INTO Icon
      (url)
      VALUES (" . $url .  ")";
      if ($connection->conn->query($sql) === TRUE) {
        $last_id = $connection->conn->insert_id;
      } else {
        echo $xml->error . $sql . "<br>" . $connection->conn->error;
      }
    }

    public function getPath($idIcon) {
      $sql = "SELECT path FROM Icon WHERE idIcon = " . $idIcon;
      $result = $_SESSION['conn']->query($sql);
      if ($result) {
        while($obj = $result->fetch_object()){
            return $obj->path;
        }
      }
    }

    public function setPath($url, $idIcon) {
      $sql = "UPDATE Icon
      SET path = " . $path . " WHERE idIcon=". $idIcon;
      if ($_SESSION['conn']->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

  }
 ?>
