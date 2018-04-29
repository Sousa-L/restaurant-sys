<!DOCTYPE html>
<?php
$xml_config = simplexml_load_file(dirname(__DIR__, 4) . "/". "config.xml");
?>
<html lang=<?php echo $xml_config->language ?>>
  <head>
