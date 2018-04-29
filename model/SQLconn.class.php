<?php
	$xml_config = simplexml_load_file(dirname(__DIR__,1) . "/config.xml");
	$xml = simplexml_load_file(dirname(__DIR__,1) . "/". "language/" .
	$xml_config->language . "/system/system.xml");
	class SQLconn {
		protected $conn = "";
	    // Create connection
	    static function createConn(){
				global $xml, $xml_config;
					$servername = $xml_config->sql_servername;
					$username = $xml_config->sql_username;
					$password = $xml_config->sql_password;
					$sql_db = $xml_config->sql_db;
	      	$conn = new mysqli($servername, $username, $password, $sql_db);
	      	// Check connection
	      	if ($conn->connect_error) {
	        	die($xml->error_connection . $conn->connect_error);
	      	}
					mysqli_query($conn,'SET character_set_client=utf8');
					mysqli_query($conn,'SET character_set_results=utf8');
	      	return $conn;
	    }
  	}
 ?>
