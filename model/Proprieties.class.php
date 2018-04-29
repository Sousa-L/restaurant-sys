<?php
  public class Properties {
    private $theme_color;
    private $logo;

    public function getThemeColor() {
      $sql = "SELECT theme_color FROM Properties WHERE idProperties = 1";
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["theme_color"];
      } else {
        return null;
      }
    }

    public function setThemeColor($theme_color) {
      $sql = "UPDATE Properties
      SET theme_color = " . $theme_color . " WHERE idPage = 1";
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }

    public function getLogo() {
      $sql = "SELECT logo FROM Properties WHERE idProperties = 1";
      $result = $connection->conn->query($sql);
      if ($result->num_rows > 0) {
        $return = $result->fetch_assoc();
        return $return["logo"];
      } else {
        return null;
      }
    }

    public function setLogo($logo) {
      $sql = "UPDATE Properties
      SET logo = " . $logo . " WHERE idPage = 1";
      if ($conn->query($sql) === TRUE) {
        echo $xml->sql_sucess_update;
      } else {
        echo $xml->sql_error_update . $conn->error;
      }
    }
  }
 ?>
