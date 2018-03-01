<?php

	function globals(){
	 global $username, $servername, $password, $dbname, $conn;	
	};
	

	$servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db_name";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
?>

  
	
  
  
  
  
  
  
  


