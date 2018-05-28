<?php 
	$host = "mysql:host=localhost;dbname=truckworld";
	$username = "root";
	$password = "";

	try
	{
		$connection = new PDO($host, $username, $password);
		$connect = 1;
	}
	catch(PDOException $error)
	{
		$error->getMessage();
	}
?>