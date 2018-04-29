<div class="w3-container container">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<div class="w3-card-4 w3-white" style="padding-left: 10px;">
				<h2>Mesa 1
				<p class="w3-right hidden-sm hidden-md hidden-lg">
					<div class="dropdown w3-right hidden-sm hidden-md hidden-lg" style="margin-right: 15%;">
					<button href="" class="dropdown-toggle glyphicon glyphicon-cog btn btn-primary" data-toggle="dropdown"></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Opções</li>
					    <li class="disabled"><a href="#">Abrir Mesa</a></li>
					    <li><a href="#">Fechar Mesa</a></li>
					    <li><a href="#">Visualizar<wbr/> Pedidos<wbr/> Anteriores</a></li>
  					</ul>
  					<button href="" class="glyphicon glyphicon-plus btn btn-default" data-toggle="collapse" data-target="#status"></button>
  					</div>
				</p>
				</h2>
				<div id="status" class="collapse">
					<h4 class="w3-center"><strong>Status da Mesa:</strong><span class="w3-text-green"> Aberta</span></h2>
					<h4 class="w3-center"><strong>Valor Total:</strong> R$ 8,00</h2>
				</div>
				<h4 style="padding-left: 10px;">Lista de produtos pedidos: </h4>
				<div class="table-responsive"  style="padding-left: 10px;">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Id Pedido</th>
								<th>Produto</th>
								<th>Quantidade</th>
								<th>Valor Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Skol 600mL</td>
								<td>2</td>
								<td>R$ 8,00</td>
								<td>Entregue</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">Status da Mesa:</h2>
				<h3 class="w3-text-green w3-center">Aberta</h3>
			</div>
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">Valor Total:</h2>
				<h3 class="w3-center">R$ 8,00</h3>
			</div>
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">Opções:</h2>
				<div class="w3-center">
				<div class="btn-group-vertical w3-center">
				  <button type="button" class="btn btn-success" disabled>Abrir Mesa</button>
				  <button type="button" class="btn btn-danger">Fechar Mesa</button>
				  <button type="button" class="btn btn-info">Visualizar <wbr/>Pedidos<wbr/> Anteriores</button>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>