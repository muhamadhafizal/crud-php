<?php

	$servername = "localhost";
	$user		= "root";
	$pass		= "";
	$dbname		= "crud";
	$port		= 21;

	$mysqli 		= mysqli_connect($servername,$user,$pass,$dbname);

	if(!$mysqli) {
		echo "Erro: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging error: ". mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: ". mysqli_connect_error() . PHP_EOL;
		exit;
	}

?>