<?php
$forne = new Fornecedor;
	include dirname(__DIR__,2) . "/js/remove_provider.php";
  echo '<div class="container w3-container">
    <div class="w3-card-2 w3-white" style="width:98%; height: 98%">
      <div style="padding: 3px 0px 0px 10px">
        <h2>'. $xml_pages_providers->providers_list .'
        <a href="#" class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Adicionar Fornecedor">
          <button class="btn btn-default glyphicon glyphicon-asterisk" data-toggle="modal" data-target="#addForne" ></button>
        </a>
        </h2>
      </div>
      <div class="">
      <table class="table table-hover">
          <thead>
              <tr>
                <th>'. $xml_pages_providers->provider_name .'</th>
								<th>'. $xml_pages_providers->provider_adress .'</th>
								<th>'. $xml_pages_providers->provider_phone .'</th>
								<th>'. $xml_pages_providers->provider_cnpj .'</th>
								<th>'. $xml_pages_providers->edit_provider .'</th>
                <th style="width: 10%">'. $xml_pages_providers->remove_provider .'</th>
              </tr>
          </thead>
          <tbody>';
          for($i = 1; $i <= $forne->getLastId(); $i++){
              if ($forne->getName($i) != null){
            echo '<tr id="'.$i.'">
            <td>'. $forne->getName($i) . ' </td>'
						. '<td>'. $forne->getAdress($i) . '</td>'
						. '<td>'. $forne->getPhone($i) . '</td>'
						. '<td>'. $forne->getCnpj($i) . '</td>'
            . '<td><a data-toggle="modal" href="#editaProd"><button class="btn btn-default glyphicon glyphicon-pencil"></button></a></td>
            <td><button onclick="remove_provider('. $i .')" class="btn btn-default glyphicon glyphicon-remove"></button></td>
          </tr>
          <tr id="detalhes'.$i.'" class="collapse">
            <td colspan="6">
						<p><strong>'. $xml_pages_providers->provider_name .'</strong> '. $forne->getName($i) .'</p>
					  <p><strong>'. $xml_pages_providers->provider_adress .'</strong> '. $forne->getAdress($i) .'</p>
						<p><strong>'. $xml_pages_providers->provider_phone .'</strong> '. $forne->getPhone($i) .'</p>
						<p><strong>'. $xml_pages_providers->provider_cnpj .'</strong> '. $forne->getCnpj($i).'</p>
            </td>
          </tr>
            ';
          }
          }
          echo '</tbody>
      </table>
    </div>
    </div>
    <div id="addForne" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content w3-text-black">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">'. $xml_pages_providers->new_provider .'</h3>
          </div>
          <div class="modal-body" style="padding-bottom: 60px;">
            <form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
              <label>'. $xml_pages_providers->provider_name .' </label>
              <input class="w3-input" type="text" name="nome" required>
							<label>'. $xml_pages_providers->provider_adress .' </label>
							<input class="w3-input" type="text" name="adress" required>
							<label>'. $xml_pages_providers->provider_phone .' </label>
							<input class="w3-input" type="number" name="phone" required>
							<label>'. $xml_pages_providers->provider_cnpj .' </label>
							<input class="w3-input" type="number" name="cnpj" required>

                  ';
              echo '
              <br>
              <div class="w3-left">
                <input class="btn w3-theme" type="submit" value="'. $xml_pages_providers->save .'">
              </div>
              <div class="w3-right">
                <button type="button" class="btn w3-theme" data-dismiss="modal">'. $xml_pages_providers->cancel .'</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="editaForne" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content w3-text-black">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">'. $xml_pages_providers->new_provider .'</h3>
          </div>
          <div class="modal-body" style="padding-bottom: 60px;">
            <form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
              <label>'. $xml_pages_providers->provider_name .'</label>
              <input class="w3-input" type="text" name="nome" required>
              <label>'. $xml_pages_providers->provider_adress .'</label>
              <input class="w3-input" type="text"  name="adress" required>
              <label>'. $xml_pages_providers->provider_phone .'</label>
              <input class="w3-input" type="number" name="phone" required>
							<label>'. $xml_pages_providers->provider_cnpj .'</label>
							<input class="w3-input" type="number" name="cnpj" required>

                  ';
                  for($i = 1; $i <= $forne->getLastId(); $i++){
                    echo '<option value="'.$i.'">'.$forne->getName($i).'</option>';
                   }
              echo '
              <br>
              <div class="w3-left">
                <input class="btn w3-theme" type="submit" value="'. $xml_pages_providers->save .'">
              </div>
              <div class="w3-right">
                <button type="button" class="btn w3-theme" data-dismiss="modal">'. $xml_pages_providers->cancel .'</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>';
  ?>
