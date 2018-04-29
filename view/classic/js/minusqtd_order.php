<?php
echo '<script>
  function minusqtd_order(i, qtd){
    if (window.XMLHttpRequest) {
  // code for modern browsers
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/MinusQtd_Order.php?order=" + i  + "&amount=" + qtd, true);
  xmlhttp.send();
} else {
  // code for old IE browsers
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/MinusQtd_Order.php?order=" + i + "&amount=" + qtd, true);
  xmlhttp.send();
}
}
</script>';
?>
