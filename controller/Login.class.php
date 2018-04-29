<?php
  $xml_config = simplexml_load_file(dirname(__DIR__,1) . "/config.xml");
  $xml = simplexml_load_file(dirname(__DIR__,1) . "/". "language/" .
  $xml_config->language . "/system/system.xml");
  class Login {
    static function autentify_login($username, $password) {
      global $xml;
      $usuario = new Usuario;
      if($usuario->checkUsername($username) != null &&
      $password == $usuario->getPassword($username)) {
        //session_start();
        $_SESSION["username"] = $username;
        $_SESSION["idUsuario"] = $usuario->getIdUsuario($username);
        $_SESSION["status"] = $usuario->getStatus($_SESSION["idUsuario"]);
        header("Location: main_menu.php");
        } else {
          echo "<script>
            window.alert(\"". $xml->error_login . "\");
          </script>";
        }
    }
  }
 ?>
