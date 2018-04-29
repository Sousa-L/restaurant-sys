<?php
  echo '<script>
  function load_product_table(i){
    if (window.XMLHttpRequest) {
  // code for modern browsers
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        res = this.responseText.split("#")
        document.getElementById("pricet").innerHTML = res[0];
        document.getElementById("stockt").innerHTML = res[1];
        document.getElementById("buy_pricet").innerHTML = res[2];
        document.getElementById("total_pricet").innerHTML =
        document.getElementById("total_p").value * res[0];
        document.getElementById("pricehidden").value = res[0];
        document.getElementById("stockhidden").value = res[1];
        document.getElementById("buypricehidden").value = res[2];

      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/Product_Table.php?product=" + i, true);
  xmlhttp.send();
} else {
  // code for old IE browsers
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/Product_Table.php?product=" + i, true);
  xmlhttp.send();
}
}
  </script>'
 ?>
