<?php
  if ($SESSION["username"] = null) {
    header("Location: " . __DIR__ . index.php);
  }
 ?>
