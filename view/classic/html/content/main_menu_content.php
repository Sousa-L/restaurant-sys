<?php
  $menu = new Menu;
  $icon = new Icon;
  echo '<div class="w3-container container-fluid" id="main_menu" style="margin-top: 4%; margin-bottom: 5.2%">' .
  '<div class="row">';
  for($i = 1; $i <= $menu->getLastId();$i++){
    echo '<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 5%">
      <a href="'. $menu->getHref($i) .'"><div class="w3-card-4 w3-hover-shadow w3-white " style="padding-top: 7%">
        <div class="row">
          <div class="col-sm-4 col-xs-4 col-md-4"></div>
          <div class="col-sm-4 col-xs-4 col-md-4">
            <img src="' . $icon->getpath($menu->getIdIcon($i)) . '" alt="' . $menu->getName($i) . '" class="w3-center img-responsive">
          </div>
          <div class="col-sm-4 col-xs-4 col-md-4"></div>
        </div>
        <footer class="w3-light-gray" style="margin-top: 20px;"><p class="w3-center">' . $menu->getName($i) . '</p></footer>
      </div></a>
    </div>';
    if ($i == $menu->getLastId()) {
      echo '</div>';
    }
    if ($i % 4 == 0 && $i != $menu->getLastId()) {
     echo '</div>
      <div class="row">';
    }
  }
 ?>
