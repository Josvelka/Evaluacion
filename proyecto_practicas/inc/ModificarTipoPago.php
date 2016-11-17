<?php 
	require('conexion.php');

	$id = $_POST['iddetallepago'];
	$nombreS = $_POST['servicios'];
	$rutina = $_POST['rutina'];
	$precio = $_POST['precio'];

	$consulta = "UPDATE detallepago SET nombreS='$nombreS', tipo='$rutina', precio=$precio WHERE iddetallepago = $id";

	$mysqli->query($consulta);

	header("Location: ../serviciosAdmin.php");


 ?>