<div class="w3-sidebar w3-bar-block w3-border-right w3-light-grey" style="display:none" id="menu_user">
      <button class="w3-bar-item w3-large menu_toggle"><p class="w3-right">Fechar &times;</p></button>
      <div class="row" style="margin-top: 15px">
        <div class="col-xs-3 col-sm-3"></div>
        <div class="col-xs-6 col-sm-6">
          <img src="images/person.jpg" alt="username" class="img-circle w3-center w3-image"/>
          <p class="w3-center" style="margin-top: 10px;">
            <?php
              $usuario = new Usuario;
              echo $usuario->getName($_SESSION['idUsuario']);
           ?>
         </p>
          <p class="w3-center" style="margin-top: 10px;">
            <?php
              $cargo = new Cargo;
              echo $cargo->getCargo($usuario->getIdCargo($_SESSION['idUsuario']));
           ?>
          </p>
        </div>
        <div class="col-xs-3 col-sm-3"></div>
      </div>
      <a href="menu_user.php" style="text-decoration: none;"><button class="w3-button w3-theme-l1 w3-block w3-border-bottom w3-hover-grey">Perfil</button></a>
      <button class="w3-button w3-theme-l1 w3-block w3-hover-grey w3-border-bottom">
        <?php
          echo $xml_pages_side->notification;
       ?>
      <span class="w3-tag w3-white w3-round w3-right">8</span>
      </button>
      <button class="w3-button w3-theme-l1 w3-block w3-hover-grey w3-border-bottom">
        <?php
          echo $xml_pages_side->config;
       ?>
      </button>
      <a href="index.php"><button class="w3-button w3-theme-l1 w3-block w3-hover-grey" style="margin-top: 50%">Logout</button></a>
    </div>
