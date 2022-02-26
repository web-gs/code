<!DOCTYPE html>
<?php
	$servername = "localhost"; //If you want access our shared database you should keep "localhost"
	$database = "test"; //It is the only database avaible to use in the local server
	$username = "test"; //Do not change
	$password = "password"; //Do not change
	$charset = "utf8mb4"; //Do not change
	try {
		$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>
	<head>
		<title>WEB-GS/code</title>
<?php
		echo “<script> alert("Connection Okay");</script>”;
		return $pdo
	}
	catch (PDOException $e) {
		echo “<script> alert("Connection failed:'. $e->getMessage() .'");</script>”;
	}
?>
	</head>
	<body>
		<h1>This is just a example</h1>
	</body>
</html>
