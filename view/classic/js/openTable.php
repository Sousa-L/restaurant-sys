<?php
  echo '<script>
    function openTable(i) {
        if (window.XMLHttpRequest) {
      // code for modern browsers
      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("done");
            window.location.href = "order_menu.php?mesa=" + i;
          }
      };
      xmlhttp.open("GET", "XMLHttpRequest/Open_Table.php?mesa=" + i, true);
      xmlhttp.send();
    } else {
      // code for old IE browsers
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("done");
            window.location.href = "'. __FILE__ .'";
          }
      };
      xmlhttp.open("GET", "XMLHttpRequest/Open_Table.php?mesa=" + i, true);
      xmlhttp.send();
    }
    }
  </script>'
 ?>
