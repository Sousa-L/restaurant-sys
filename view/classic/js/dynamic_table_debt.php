<script>
  $(document).ready(function(){
    var i=1;
       $("#add_row").click(function(){
        $('#debtProd'+i).html("<td>"+ (i+1) +"</td><td><input name=\"nome"+i+"\" type=\"text\" placeholder=\"Nome do Produto\" class=\"form-control\" /> </td><td><input name=\"qtd"+i+"\" type=\"number\" min=\"1\" max=\"10\" step=\"1\"  placeholder=\"Quantidade\"  class=\"form-control\"></td><td><input name=\"valTotal"+i+"\" type=\"number\" min=\"0.1\" max=\"10000\" step=\"0.1\" placeholder=\"Valor Total\"  class=\"form-control\"></td>");
        $('#tab_prod').append('<tr id="debtProd'+(i+1)+'"></tr>');
        i++;
    });
       $("#delete_row").click(function(){
         if(i>1){
       $("#debtProd"+(i-1)).html('');
       i--;
       }
     });
  });
</script>
