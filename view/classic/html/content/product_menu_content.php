<?php
	$prod = new Produto;
	$category = new Categoria;
	$provider = new Fornecedor;
	include dirname(__DIR__,2) . "/js/remove_product.php";
	echo '<div class="container w3-container">
		<div class="w3-card-2 w3-white" style="width:98%; height: 98%">
			<div style="padding: 3px 0px 0px 10px">
				<h2>'. $xml_pages_product->product_list .'
				<a href="#" class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Adicionar Produto">
					<button class="btn btn-default glyphicon glyphicon-asterisk" data-toggle="modal" data-target="#addProd" ></button>
				</a>
				</h2>
			</div>
			<div class="">
			<table class="table table-hover">
					<thead>
							<tr>
								<th>'. $xml_pages_product->name .'</th>
								<th class="hidden-xs">'. $xml_pages_product->category . '</th>
								<th>'. $xml_pages_product->value .'</th>
								<th style="width: 10%">'. $xml_pages_product->edit .'</th>
								<th style="width: 10%">'. $xml_pages_product->details .'</th>
								<th style="width: 10%">'. $xml_pages_product->options.'</th><th
							</tr>
					</thead>
					<tbody>';
					for($i = 1; $i <= $prod->getLastId(); $i++){
						  if ($prod->getName($i) != null){
						echo '<tr id="'.$i.'">
						<td>'. $prod->getName($i) . ' </td>
						<td class="hidden-xs">' . $category->getName($prod->getIdCategoria($i)).'</td>'
						. '<td>'. $xml_config->coin . $prod->getPrice($i) .' </td>
						<td><a data-toggle="modal" href="#editaProd"><button class="btn btn-default glyphicon glyphicon-pencil"></button></a></td>
						<td><button class="btn btn-default glyphicon glyphicon-plus" data-toggle="collapse" data-target="#detalhes'.$i.'">
								<!-- O id serve para indicar qual o produto a ser adicionado ao pedido -->
						</button></td>
						<td><button onclick="remove_product('. $i .')" class="btn btn-default glyphicon glyphicon-remove"></button></td>
					</tr>
					<tr id="detalhes'.$i.'" class="collapse">
						<td colspan="6">
							<p><strong>'. $xml_pages_product->product_name .'</strong> '. $prod->getName($i) .'</p>
							<p><strong>'. $xml_pages_product->category_wdd .'</strong> '. $category->getName($prod->getIdCategoria($i)) .'</p>
							<p><strong>'. $xml_pages_product->price .'</strong> '. $xml_config->coin . $prod->getPrice($i) .'</p>
              <p><strong>'. $xml_pages_product->bar_code .'</strong> '. $prod->getBarCode($i) .'</p>
							<p><strong>'. $xml_pages_product->buy_price .'</strong> ---</p>
							<p><strong>'. $xml_pages_product->stock.'</strong> '. $prod->getStock($i) .'</p>
							<p><strong>'. $xml_pages_product->description.'</strong> '. $prod->getDescription($i) .'</p>
						</td>
					</tr>
						';
					}
					}
					echo '</tbody>
			</table>
		</div>
		</div>
		<div id="addProd" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content w3-text-black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title">'. $xml_pages_product->new_product .'</h3>
					</div>
					<div class="modal-body" style="padding-bottom: 60px;">
						<form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
							<label>'. $xml_pages_product->product_name .' </label>
							<input class="w3-input" type="text" name="nome" required>
							<label>'. $xml_pages_product->price .' </label>
							<input class="w3-input" type="number" step="0.01" min="0.01" name="price" required>
							<label>'. $xml_pages_product->bar_code .'</label>
							<input class="w3-input" type="text" name="bar_code">
							<label>'. $xml_pages_product->buy_price.'</label>
							<input class="w3-input" type="number" min="0.01" max="10000" step="0.01" name="buy_price">
							<label>'. $xml_pages_product->category_wdd .' </label>
							<select class="w3-select w3-white" name="category">
								<option> --- </option>
									';
									for($i = 1; $i <= $category->getLastId(); $i++){
										echo '<option value="'.$i.'">'.$category->getName($i).'</option>';
									 }
							echo '</select>
							<label>'. $xml_pages_product->stock .' </label>
							<input class="w3-input" type="number" step="1" min="1" max="1000" name="stock">
							<label>'. $xml_pages_product->description .'</label>
							<input class="w3-input" type="text" name="description" placeholder="Digite uma descrição para o produto...">
							<label>'.$xml_pages_product->provider.'</label>
							<select class="w3-select w3-white" name="provider">
								<option> --- </option>
									';
									for($i = 1; $i <= $provider->getLastId(); $i++){
										echo '<option value="'.$i.'">'.$provider->getName($i).'</option>';
									 }
							echo '</select>
							<br>
							<div class="w3-left">
								<input class="btn w3-theme" type="submit" value="'. $xml_pages_product->save .'">
							</div>
							<div class="w3-right">
								<button type="button" class="btn w3-theme" data-dismiss="modal">'. $xml_pages_product->cancel .'</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="editaProd" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content w3-text-black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title">'. $xml_pages_product->new_product .'</h3>
					</div>
					<div class="modal-body" style="padding-bottom: 60px;">
						<form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
							<label>'. $xml_pages_product->product_name .'</label>
							<input class="w3-input" type="text" name="nome" required>
							<label>'. $xml_pages_product->price .'</label>
							<input class="w3-input" type="number" step="0.1" min="0.1" name="price" required>
							<label>'. $xml_pages_product->category_wdd .'</label>
							<select class="w3-select w3-white" name="category">
								<option> --- </option>
									';
									for($i = 1; $i <= $category->getLastId(); $i++){
										echo '<option value="'.$i.'">'.$category->getName($i).'</option>';
									 }
							echo '</select>
							<label>'. $xml_pages_product->description .' </label>
							<input class="w3-input" type="text" name="descricao">
							<label>'. $xml_pages_product->stock .' </label>
							<input class="w3-input" type="number" step="1" min="1" max="1000" name="estoque">
							<br>
							<div class="w3-left">
								<input class="btn w3-theme" type="submit" value="'. $xml_pages_product->save .'">
							</div>
							<div class="w3-right">
								<button type="button" class="btn w3-theme" data-dismiss="modal">'. $xml_pages_product->cancel .'</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>';
 ?>
