<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "donor";

try {
  $db = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
	
  echo "Connection failed: " . $e->getMessage();
}
?> 