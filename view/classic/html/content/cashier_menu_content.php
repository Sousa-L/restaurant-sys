<?php
$cashier = new Caixa;
$control_table = new ControlMesa;
$order = new Pedidos;
echo '
<div class="w3-container container">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<div class="w3-card-4 w3-white" style="padding-left: 10px;">
				<h2>Caixa
				<p class="w3-right hidden-sm hidden-md hidden-lg">
					<div class="dropdown w3-right hidden-sm hidden-md hidden-lg" style="margin-right: 15%;">
					<button href="" class="dropdown-toggle glyphicon glyphicon-cog btn btn-primary" data-toggle="dropdown"></button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">'.$xml_pages_cashier->options.'</li>
					    <li class="disabled"><a href="#">'.$xml_pages_cashier->open_cashier.'</a></li>
					    <li><a href="#">'.$xml_pages_cashier->close_cashier.'</a></li>
					    <li><a href="#">'.$xml_pages_cashier->view_old.'</a></li>
  					</ul>
  					<button href="" class="glyphicon glyphicon-plus btn btn-default" data-toggle="collapse" data-target="#status"></button>
  					</div>
				</p>
				</h2>
				<div id="status" class="collapse">
					<h4 class="w3-center"><strong>'.$xml_pages_cashier->cashier_status.':</strong><span class="w3-text-green"> Aberto</span></h2>
					<h4 class="w3-center"><strong>'.$xml_pages_cashier->daily_sales.':</strong> R$ 100,20</h2>
				</div>
				<h4 style="padding-left: 10px;">'.$xml_pages_cashier->order_list.': </h4>
				<div class="table-responsive"  style="padding-left: 10px;">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>'.$xml_pages_cashier->order_id.'</th>
								<th>'.$xml_pages_cashier->order_value.'</th>
								<th>'.$xml_pages_cashier->table.'</th>
								<th>'.$xml_pages_cashier->status.'</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>R$ 100,20</td>
								<td>1</td>
								<td>Fechado</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">'.$xml_pages_cashier->cashier_status.':</h2>
				<h3 class="w3-text-green w3-center">Aberto</h3>
			</div>
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">'.$xml_pages_cashier->daily_sales.':</h2>
				<h3 class="w3-center">R$ 100,20</h3>
			</div>
			<div class="w3-card-4 w3-white" style="padding-bottom: 10%">
				<h2 class="w3-center">'.$xml_pages_cashier->options.':</h2>
				<div class="w3-center">
				<div class="btn-group-vertical w3-center">
				  <button type="button" class="btn btn-success" disabled>'.$xml_pages_cashier->open_cashier.'</button>
				  <button type="button" class="btn btn-danger">'.$xml_pages_cashier->close_cashier.'</button>
				  <button type="button" class="btn btn-info">'.$xml_pages_cashier->view_old.'</button>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>';
?>