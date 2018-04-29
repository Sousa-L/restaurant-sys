<?php
  function getFile($PageId) {
    $page = new Page;
    return "\"" . $page->getName($PageId) . ".php\"";
  }
 ?>
