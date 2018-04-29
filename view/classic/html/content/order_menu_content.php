<style>
td{
  font-size: 2.5vh;
}
th {
  font-size: 2.5vh;
}
span   {
  font-size: 2.5vh;
}
li   {
  font-size: 2.1vh;
}
.td-nfe {
  padding-left: 1vw;;
}
.cupom-text{
  font-size: 1.25vw;
}
/*@media print {
  body * {
    visibility: hidden;
  }
  #cupom * {
    visibility: visible;
  }
  #cupom {
    position: absolute;
    left: 0;
    top: 0;
  }
}*/
</style>
<?php
  $order = new Pedidos;
  $mesa = new Mesa;
  $produto = new Produto;
  $status = new StatusPedido;
  $category = new Categoria;
  $couvert = new Couvert;
  $statusMesa = new StatusMesa;
  $total = $order->getTotalPedidos($_GET["mesa"]) + tenPerCent($order->getTotalPedidos($_GET["mesa"]));
  include dirname(__DIR__,2) . "/js/remove_order.php";
  include dirname(__DIR__,2) . "/js/minusqtd_order.php";
  include dirname(__DIR__,2) . "/js/load_product_table.php";
  include dirname(__DIR__,2) . "/js/load_total_value.php";
  include dirname(__DIR__,2) . "/js/couvert_multiply.php";
  include dirname(__DIR__,2) . "/js/closeTable.php";
  include dirname(__DIR__,2) . "/js/openTable.php";
  echo '<div class="w3-container container">
    <div class="w3-card-4 w3-white" style="width:98%; height: 98%">
      <div style="padding: 3px 0px 0px 10px">
       <strong>Mesa: '. $_GET["mesa"] .'</strong>  - '. $statusMesa->getStatusMesa($mesa->getStatusMesa($_GET["mesa"])) .'
  <strong>Número de pessoas:</strong>
  <input id="numPeople" onkeyup="couvert_multiply(this.value, ' . $couvert->getCouvert(1). ',' . $total .')" style="height:5vh; width:30vh; margin-left:10vh;" class="w3-input w3-border" type="number">
  <input type="hidden" id="couvertDefault" value="'. $couvert->getCouvert(1) .'">
        <h2>'. $xml_pages_order->orders .'
        <a class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Fechar Mesa">
          <button onclick="closeTable('. $_GET["mesa"] .')" class="btn btn-default"><span>'. $xml_pages_order->close_table .'</span></button>
        </a>
        <a class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Abrir Mesa">
          <button onclick="openTable('. $_GET["mesa"] .')" class="btn btn-default"><span>'. $xml_pages_order->open_table .'</span></button>
          </a>
        ';
        if($mesa->getStatusMesa($_GET["mesa"]) == 2) {
          echo '<a href="#" class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Adicionar Pedido">
          <button class="btn btn-default" data-toggle="modal" data-target="#addOrder"><span>'. $xml_pages_order->add_order .'</span></button>
        </a>';
      } echo '
        </h2>'
         /* <input type="text" class="w3-input" placeholder="'. $xml_pages_order->search .'" id="buscaOrder"  oninput="w3.filterHTML(\'#buscaOrder\', \'.order\', this.value)"/>*/ . '
      </div>
      <div class="row table-responsive" style="margin: 10px 10px 10px 10px; width: 90%;">
        <table class="table table-hover" id="listaOrder">
          <thead>
            <th>'. $xml_pages_order->product_name .'</th>
			<th>'. $xml_pages_order->qtd .'</th>
              <th>'. $xml_pages_order->status .'</th>
            <th>'. $xml_pages_order->sell_value .'</th>
            <th>'. $xml_pages_order->total_value .'</th>
            <th>'. $xml_pages_order->options .'</th>
          </thead>
          <tbody>';
  for($i = 1; $i <= $order->getLastId();$i++) {
    if ($order->getIdMesa($i) == $_GET['mesa']){
      echo '<tr class="order" style="height: 10vh">
        <td>'. $produto->getName($order->getIdProduto($i)) .'</td>
  	    <td>'. $order->getQtdProduto($i) .'</td>
        <td>'. $status->getStatusName($order->getIdStatusPedido($i)) .'</td>
        <td>'. $xml_config->coin . $produto->getPrice($order->getIdProduto($i)) .'</td>
        <td>'. $xml_config->coin . $order->getTotalValue($i) .'</td>
        <td><a style="color: inherit;" href="#detalhes'. $i .'" data-toggle="collapse"><i class="glyphicon glyphicon-chevron-down"></i></button>
        <a style="color: inherit; margin-left: 10%" onclick="minusqtd_order('. $i .','. $order->getQtdProduto($i) .')" data-toggle="collapse"><i class="glyphicon glyphicon-minus"></i></a>
        <a style="color: inherit; margin-left: 10%" onclick="remove_order('. $i .')" data-toggle="collapse"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
      <tr id="detalhes'. $i .'" class="collapse out w3-animate-opacity">
        <td colspan="6">
          <div>
        <p><strong>'. $xml_pages_order->total_profit .': </strong>'. $xml_config->coin . $order->getTotalProfit($i) .'</p>
          </div>
        </td>
      </tr>';
    }
  }
  echo '</tbody>
  </table>
  <ul class="w3-ul w3-hoverable" style="width:50%; margin-left:35vw;">
  <li><strong>Valor Total dos Pedidos: </strong>'. $xml_config->coin . $order->getTotalPedidos($_GET["mesa"], 1) .'</li>
  <li><strong>10% do Garçom: </strong>'. $xml_config->coin . tenPerCent($order->getTotalPedidos($_GET["mesa"])) .'
  <input class="checkbox w3-right" type="checkbox" name="10pct" checked="checked"/></li>
  <li><strong>Couvert: </strong>'. $xml_config->coin . '<span id="couvert">' . $couvert->getCouvert(1) .'</span>
  <input class="checkbox w3-right" type="checkbox" name="couvert" checked="checked"/></li>
  <li><label><strong>Desconto (R$): </strong></label><input type="number" min="0.01" max="1000" step="0.01" name="desconto" style="margin-left: 1vh;"></li>
  <li><strong>Valor a Pagar: </strong>';
  echo $xml_config->coin . '<span id="total">' . $total . '</span></li>
</ul>
  </div>
    <button data-toggle="modal" data-target="#nfe" onclick="generate_nfe('. $order->getTotalPedidos($_GET["mesa"]) .', document.getElementById(\"numPeople\"), document.getElementById(\"couvertDefault\"))" type="button" class="btn w3-theme" style="margin:5px;">
    <span class="glyphicon glyphicon-print" style="margin-right:1vh;"></span>'. $xml_pages_order->generate_nfe .'</button>
  </div>';
  echo '<div id="nfe" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cupom Fiscal</h4>
      </div>
      <div class="modal-body">
      <div id="cupom_content">
        <div class="w3-container">
          <div class="w3-left">
            <img src="" alt="Logo" class="img-responsive">
          </div>
          <div class="w3-right">
            Petiscaria da Estrada LTDA<br/>
            Rua Filipino Silva, 125<br/>
            Centro * Fortaleza - Ceará<br/>
            CNPJ: 07.671.198/0001-84<br/>
            IE: 06.188403-0
          </div>
          </div>
          <div class="w3-container w3-center">
            <span>-----------------------------------------------------------------------------------------------</span><br>
            <span>'.date("d/m/Y h:i:s").'</span><br>
            <span>-----------------------------------------------------------------------------------------------</span><br>
            <span class="text-center">CUPOM FISCAL</span><br>
            <span>-----------------------------------------------------------------------------------------------</span>
            <table>
              <thead>
                <th>
                  <td class="td-nfe">ITEM CODIGO</td>
                  <td class="td-nfe">DESCRIÇÃO</td>
                  <td class="td-nfe">QTD.</td>
                  <td class="td-nfe">VL.<wbr/>UNIT<wbr/>(R$)</td>
                  <td class="td-nfe">VL.<wbr/>ITEM<wbr/>(R$)</td>
                </th>
              </thead>
              <tbody>
                <th>
                  <td>4532</td>
                  <td>'.strtoupper("carne de sol").'</td>
                  <td>1</td>
                  <td>5,00</td>
                  <td>5,00</td>
                </th>
              </tbody>
            </table>
            <span>-----------------------------------------------------------------------------------------------</span><br>
          </div>
          <p>SUBTOTAL: <span class="w3-right">R$ 5,00</span></p>
          <span>---------------------------------------------------------</span><br>
          <p>10% GARÇOM: <span class="w3-right">R$ 0,50</span></p>
          <p>COUVERT: <span class="w3-right">R$ 0,00</span></p>
          <p>DESCONTO: <span class="w3-right">R$ 0,00</span></p>
          <span>---------------------------------------------------------</span><br>
          <p>TOTAL(R$): <span class="w3-right">R$ 5,50</span></p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="print_btn">Imprimir</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>';
	echo '<div id="addOrder" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content w3-text-black">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">'. $xml_pages_order->add_order .'</h3>
          </div> '. '
          <div class="modal-body" style="padding-bottom: 60px;">
            <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
              <label>'. $xml_pages_order->product_name .'</label>
              <select onchange="load_product_table(this.value)" class="w3-select w3-white" name="prod">
                <option> --- </option>';
	for($i = 1; $i <= $category->getLastId(); $i++) {
		echo '<optgroup label="'. $category->getName($i) .'">';
    $produto->getNameByCateg($i);
    echo '</optgroup>';
	}
  echo '</select>
  <label>Quantidade</label><br>
  <input  id="total_p" type="number" class="w3-input" onkeyup="load_total_value(this.value)" name="qtd" value="1"></input>
  <div class="container">
   <div class="row" style="margin: 10px 10px 10px 10px; width:40%">
  <table class="table"><div class="container">
      <thead>
        <tr>
          <th>'. $xml_pages_order->unity_price .'</th>
          <th>'. $xml_pages_order->stock .'</th>
          <th>'. $xml_pages_order->buy_value .'</th>
          <th>'. $xml_pages_order->total_value .'</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="pricet"></td>
          <td id="stockt"></td>
          <td id="buy_pricet"></td>
          <td id="total_pricet"></td>
        </tr>
      </tbody>
     </table>
     <input type="hidden" name="idUsuario" value="'. $_SESSION["idUsuario"] .'">
     <input type="hidden" id="pricehidden" name="price">
     <input type="hidden" id="stockhidden" name="stock">
     <input type="hidden" name="mesa" value="'. $_GET["mesa"] .'">
    </div>

  </div>
  <br>
    <input class="btn w3-theme" style="margin:5px;" type="submit" value="'. $xml_pages_order->save .'">
    <button type="button" class="btn w3-theme" style="margin:5px;" data-dismiss="modal">'. $xml_pages_order->cancel .'</button>
</form>
</div>
</div>
</div>
</div>';
 ?>
