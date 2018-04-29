<?php
	$cate = new Categoria;
  include dirname(__DIR__,2) . "/js/remove_category.php";
  echo '<div class="container w3-container">
    <div class="w3-card-2 w3-white" style="width:98%; height: 98%">
      <div style="padding: 3px 0px 0px 10px">
        <h2>'. $xml_pages_category->category_list .'
        <a href="#" class="w3-right" style="padding-right: 10px" data-toggle="tooltip" title="Adicionar Categoria">
          <button class="btn btn-default glyphicon glyphicon-asterisk" data-toggle="modal" data-target="#addCate" ></button>
        </a>
        </h2>
      </div>
      <div class="">
      <table class="table table-hover">
          <thead>
              <tr>
                <th>'. $xml_pages_category->category_name .'</th>
								<th>'. $xml_pages_category->edit_category .'</th>
                <th style="width: 10%">'. $xml_pages_category->remove_category.'</th>
              </tr>
          </thead>
          <tbody>';
          for($i = 1; $i <= $cate->getLastId(); $i++){
              if ($cate->getName($i) != null){
            echo '<tr id="'.$i.'">
            <td>'. $cate->getName($i) . ' </td>'
            . '<td><a data-toggle="modal" href="#editaProd"><button class="btn btn-default glyphicon glyphicon-pencil"></button></a></td>
            <td><button onclick="remove_category('. $i .')" class="btn btn-default glyphicon glyphicon-remove"></button></td>
          </tr>
          <tr id="detalhes'.$i.'" class="collapse">
            <td colspan="6">


          </tr>
            ';
          }
          }
          echo '</tbody>
      </table>
    </div>
    </div>
    <div id="addCate" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content w3-text-black">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">'. $xml_pages_category->new_category .'</h3>
          </div>
          <div class="modal-body" style="padding-bottom: 60px;">
            <form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
              <label>'. $xml_pages_category->category_name .' </label>
              <input class="w3-input" type="text" name="nome" required>

                  ';
              echo '
              <br>
              <div class="w3-left">
                <input class="btn w3-theme" type="submit" value="'. $xml_pages_category->save .'">
              </div>
              <div class="w3-right">
                <button type="button" class="btn w3-theme" data-dismiss="modal">'. $xml_pages_category->cancel .'</button>
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
