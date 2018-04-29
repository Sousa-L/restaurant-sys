<?php
echo '<script>
  function remove_order(i){
    if (window.XMLHttpRequest) {
  // code for modern browsers
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/Remove_Order.php?order=" + i, true);
  xmlhttp.send();
} else {
  // code for old IE browsers
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
      }
  };
  xmlhttp.open("GET", "XMLHttpRequest/Remove_Order.php?order=" + i, true);
  xmlhttp.send();
}
}
</script>';
?>
