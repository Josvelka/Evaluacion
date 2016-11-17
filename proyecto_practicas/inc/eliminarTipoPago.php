<?php 

	require('conexion.php');

	$id = $_GET['id'];


	$consulta = "DELETE FROM detallepago WHERE iddetallepago=$id";

	$mysqli->query($consulta);

	header("Location: ../serviciosAdmin.php");
 ?>