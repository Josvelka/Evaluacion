<?php 
	require('conexion.php');

	$servicio = $_POST['servicio'];
	if (isset($_POST['chrutina'])){
		$prutina = $_POST['prutina'];
		$consulta = "INSERT INTO detallepago(nombreS,tipo,precio)VALUES('$servicio','Rutina','$prutina')";
		$mysqli->query($consulta);
	}
	if (isset($_POST['chsemanal'])){
		$psemanal = $_POST['psemanal'];
		$consulta = "INSERT INTO detallepago(nombreS,tipo,precio)VALUES('$servicio','Semanal','$psemanal')";
		$mysqli->query($consulta);
	}
	if (isset($_POST['chquincenal'])){
		$pquincenal = $_POST['pquincenal'];
		$consulta = "INSERT INTO detallepago(nombreS,tipo,precio)VALUES('$servicio','Quincenal','$pquincenal')";
		$mysqli->query($consulta);
	}
	if (isset($_POST['chmensualidad'])){
		$pmensualidad = $_POST['pmensualidad'];
		$consulta = "INSERT INTO detallepago(nombreS,tipo,precio)VALUES('$servicio','Mensualidad','$pmensualidad')";
		$mysqli->query($consulta);
	}


	header("Location: ../serviciosAdmin.php");



 ?>