<?php # - mysqli_connect.php
	//This file contains the database access information
	//It establishes a connection to a MySQL database and selects the database
	
	//Set the database access information as constants
	DEFINE('DB_USER','root');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_HOST','127.0.0.1');
	DEFINE('DB_NAME','db_SAC');

	//Make connection
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR 
	die('Could not connect to MySQL: ' . mysqli_connect_error());
?>
