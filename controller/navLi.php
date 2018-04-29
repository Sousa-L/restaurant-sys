<?php
  function navLi(){
    $nav = new Nav;
    $page = new Page;
    for($i = 1; $i <= $nav->getLastId(); $i++){
      echo "<li><a href=" . getFile($nav->getPageId($i)) .
      ">". $page->getTitle($nav->getPageId($i)) . "</a></li>";
    }
  }
 ?>
