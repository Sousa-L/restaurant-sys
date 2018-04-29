<?php
/*
  require dirname(__DIR__,4) . "/controller/Login.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Usuario.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/StatusPedido.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/SQLconn.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Produto.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Pedidos.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Pagamento.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Mesa.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Fornecedor.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/FormPagamento.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Estabelecimento.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Dividas.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/model/Complemento.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/" . "model/Cargo.php" or die ("Erro na importação");
  require dirname(__DIR__,4) . "/" . "model/Caixa.php" or die ("Erro na importação");
  */
  include_once dirname(__DIR__,4). "/controller/Login.class.php";
  include_once dirname(__DIR__,4). "/controller/SessionConn.php";
  include_once dirname(__DIR__,4). "/controller/getFile.php";
  include_once dirname(__DIR__,4). "/controller/navLi.php";
  function __autoload($classe){
    //busca dentro da pasta classes a classe necessaria...
    include_once dirname(__DIR__,4). "/model/{$classe}.class.php";
  }
 ?>
