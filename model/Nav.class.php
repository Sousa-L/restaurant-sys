<?php
$xml_config = simplexml_load_file(dirname(__DIR__,1) . "/config.xml");
$xml = simplexml_load_file(dirname(__DIR__,1) . "/". "language/" .
$xml_config->language . "/system/system.xml");
class Nav {
  private $idNav;
  private $pageId;
  function createNav($PageId) {
    global $connection, $xml;
    $sql = "INSERT INTO Nav
    (PageId)
    VALUES (" . $pageId . ")";
    if ($connection->conn->query($sql) === TRUE) {
      $last_id = $_SESSION['conn']->insert_id;
    } else {
      echo $xml->error . $sql . "<br>" . $connection->conn->error;
    }
  }

  function getPageId($idNav) {
    global $xml;
    $sql = "SELECT pageId FROM Nav WHERE idNav = " . $idNav;
    $result = $_SESSION['conn']->query($sql);
    if ($result) {
      while($obj = $result->fetch_object()){
          return $obj->pageId;
      }
    }
  }

  function setPageId($pageId, $idNav){
    global $xml;
    $sql = "UPDATE Nav
    SET pageId = " . $pageId . " WHERE idNav=". $idNav;

    if ($_SESSION['conn']->query($sql) === TRUE) {
      echo $xml->sql_sucess_update;
    } else {
      echo $xml->sql_error_update . $connection->conn->error;
    }
  }

  function getLastId() {
    global $xml;
    $sql = "SELECT idNav FROM Nav ORDER BY idNav DESC LIMIT 1";
    $result = $_SESSION['conn']->query($sql);
    if ($result) {
      while($obj = $result->fetch_object()){
          return $obj->idNav;
      }
    }
  }
}
?>
