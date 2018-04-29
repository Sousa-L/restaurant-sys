<div class="container-fluid w3-container" style="margin-top: 4%;  margin-bottom: 5.2%">
  <h2 class="w3-text-white"><?php echo $xml_pages_table->list_table; ?></h2>
  <?php
  $mesa = new Mesa;
  for($i = 1; $i <= $mesa->getLastId();$i++){
    if ($mesa->getStatusMesa($i) == 0) {
      $color = "w3-gray";
    } else {
      $color = "w3-white";
    }
    if($i == 1) {
      echo '<div class="row">';
    }
    echo '
    <div class="col-md-3 col-sm-3 col-xs-12" style="margin-bottom: 5%">
      <a href="order_menu.php?mesa='.$i.'"><div class="w3-card-4 w3-hover-shadow '. $color . '" style="padding-top: 7%;">
        <div class="row">
          <div class="col-sm-3 col-xs-4 col-md-4"></div>
          <div class="col-sm-6 col-xs-4 col-md-4">
            <img src="images/table.png" alt="Mesa ' . $i .'" class="w3-center img-responsive">
          </div>
          <div class="col-sm-3 col-xs-4 col-md-4"></div>
        </div>
        <footer class="w3-light-gray" style="margin-top: 20px;"><p class="w3-center">Mesa ' . $i .'</p></footer>
      </div></a>
    </div>';
    if ($i == $mesa->getLastId()) {
      echo '</div>';
    }
    if ($i % 4 == 0 && $i != $mesa->getLastId()) {
     echo '</div>
      <div class="row">';
    }
  }
  ?>
