<nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="w3-button w3-right navbar-toggle menu_toggle">
          <span class="glyphicon glyphicon-bell w3-text-black"></span>
        </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <h4 style="margin-top: 1%">
          <?php
            $establishment = new Estabelecimento;
            echo $establishment->getName(1);
          ?>
          </h4>
        </a>
      </div>
      <!-- Início da barra de navvegação -->
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href=<?php echo getFile(2); ?>>
              <?php echo $xml_pages_nav->home;?>
            </a></li>
             <?php navLi(); ?>
            <!--<li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <li><a href="#" class="menu_toggle">
            <span class="glyphicon glyphicon-bell"></span>
            <?php $xml_pages_nav->account;?>
          </a>
          </li>
          </ul>
      </div>
      <!-- Fim da barra de navegação -->
    </div>
</nav>
