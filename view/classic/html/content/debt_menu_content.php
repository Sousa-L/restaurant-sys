<?php
$debt = new Dividas;
$provider = new Fornecedor;
$prod_debt = new ProdDividas;
echo '
<div class="container w3-container">
<div class="w3-card-2 w3-white" style="width:98%; height: 98%">
<div style="padding: 3px 0px 0px 10px">
<h2>'.$xml_pages_payment->payments.'
<a href="#" class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="'.$xml_pages_payment->add_payment.'">
<button class="btn btn-default glyphicon glyphicon-asterisk" data-toggle="modal" data-target="#addPaga" ></button>
</a>
</h2>
</div>
<div class="">
<table class="table table-hover">
<thead>
<tr>
<th>'.$xml_pages_payment->provider.'</th>
<th>'.$xml_pages_payment->value.'</th>
<th>'.$xml_pages_payment->due_date.'</th>
<th style="width: 10%">'.$xml_pages_payment->edit.'</th>
<th style="width: 10%">'.$xml_pages_payment->details.'</th>
</tr>
</thead>
<tbody>
';
for($i = 1; $i <= $debt->getLastId(); $i++){
	echo '
	<tr>
	<td>'.$provider->getName($debt->getIdFornecedor($i)).'</td>
	<td>'.$debt->getPrice($i).'</td>
	<td>'.$debt->getDateVencimento($i).'</td>
	<td><a><button class="btn btn-default glyphicon glyphicon-pencil"></button></a></td>
	<td><button class="btn btn-default glyphicon glyphicon-plus" data-toggle="collapse" data-target="#detalhes'.$i.'"></button></td>
	</tr>
	<tr id="detalhes'.$i.'" class="collapse">
	<td colspan="6"><div>
	<p><strong>'.$xml_pages_payment->provider.':</strong> Ambev</p>
	<p><strong>'.$xml_pages_payment->price.': </strong> R$ 500,00</p>
	<p><strong>'.$xml_pages_payment->due_date.':</strong> 30/06/2017</p>
	<p><strong>'.$xml_pages_payment->nfe.':</strong> 000000000</p>
	<table class="table table-hover">
	<thead>
	<th>'.$xml_pages_payment->product.'</th>
	<th>'.$xml_pages_payment->qtd.'</th>
	<th>'.$xml_pages_payment->total_val.'</th>
	</thead>
	<tbody>
	';
	for($a = 1; $a <= $prod_debt->getLastId(); $a++){
		echo'
		<tr>
		<td>'.$prod_debt->getProdName($prod_debt->getIdProdDividas($i)).'</td>
		<td>'.$prod_debt->getProdQtd($prod_debt->getIdProdDividas($i)).'</td>
		<td>'.$prod_debt->getProdVal($prod_debt->getIdProdDividas($i)).'</td>
		</tr>';
	}
	echo'
	</tbody>
	</table>
	</div></td>
	</tr>';
}
echo '
</tbody>
</table>
</div>
</div>
<div id="addPaga" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content w3-text-black">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">Novo Pagamento</h3>
</div>
<div class="modal-body" style="padding-bottom: 60px;">
<form method="post" action="#">
<label>Nome do Fornecedor: </label>
<input class="w3-input" type="text" name="name_prod" required>
<label>Valor da Nota: </label>
<input class="w3-input" type="number" step="0.1" min="0.1" name="preco" required>
<label>Tipo: </label>
<select class="w3-select w3-white" name="tipo">
<option value="1">Bebidas</option>
<option value="2">Petiscos</option>
<option value="3">Carnes</option>
</select>
<label>Produtos: </label>
<!-- Início da tabela-->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<table class="table table-hover" id="tab_prod">
<thead>
<th class="text-center">
#
</th>
<th class="text-center">
Nome
</th>
<th class="text-center">
Quantidade
</th>
<th class="text-center">
Valor Total
</th>
</thead>
<tbody>
<tr id="debtProd0">
<td>
1
</td>
<td>
<input type="text" name="nome0"  placeholder="Nome do Produto" class="form-control"/>
</td>
<td>
<input type="text" name="qtd0" placeholder="Quantidade" class="form-control"/>
</td>
<td>
<input type="number" min="0.1" max="10000" step="0.1" name="valTotal0" placeholder="Valor Total(R$)" class="form-control"/>
</td>
</tr>
<tr id="debtProd1"></tr>
</tbody>
</table>
</div>
</div>
<a id="add_row" class="btn btn-default pull-left">Adicionar Produto</a>
<a id="delete_row" class="pull-right btn btn-default">Excluir Produto</a>
</div>
<!-- Fim da tabela-->
<div class="w3-left">
<input class="btn w3-theme" type="submit" value="Salvar">
</div>
<div class="w3-right">
<button type="button" class="btn w3-theme" data-dismiss="modal">Cancelar</button>
</div>
</form>
<br><br><br>
</div>
</div>
</div>
</div>
<div id="detalheProd" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content w3-text-black">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">Detalhes</h3>
</div>
<div class="modal-body" style="padding-bottom: 60px;">
<form method="post" action="#">
<label>Nome do Produto: </label>
<input class="w3-input" type="text" name="name_prod" required>
<label>Preço: </label>
<input class="w3-input" type="number" step="0.1" min="0.1" name="preco" required>
<label>Categoria: </label>
<select class="w3-select w3-white" name="categoria">
<option value="1">Bebidas</option>
<option value="2">Petiscos</option>
<option value="3">Carnes</option>
</select>
<label>Descrição: </label>
<input class="w3-input" type="text" name="descricao">
<label>Estoque: </label>
<input class="w3-input" type="number" step="1" min="1" max="1000" name="estoque">
<br>
<div class="w3-left">
<input class="btn w3-theme" type="submit" value="Salvar">
</div>
<div class="w3-right">
<button type="button" class="btn w3-theme" data-dismiss="modal">Cancelar</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>';
?>
