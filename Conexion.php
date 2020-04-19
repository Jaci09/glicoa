<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'glico';

	$conection = mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

?>