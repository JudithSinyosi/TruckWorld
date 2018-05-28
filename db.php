<?php 
	$host = "mysql:host=localhost;dbname=truckworld";
	$username = "root";
	$password = "";

	try
	{
		$connection = new PDO($host, $username, $password);
	}
	catche(PDOException $error)
	{
		$error->getMessage();
	}
?>