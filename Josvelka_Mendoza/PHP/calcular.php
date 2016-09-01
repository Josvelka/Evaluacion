<?php
	$cantidad = $_POST['cantidad'];
	$moneda = $_POST['mon'];

	if ($moneda=="y"){
		$result=$cantidad/29.40;
		echo 'La conversion de cordoba a dolares: '.$result;
	}else{
		$result=$cantidad*29.40;
		echo 'La conversion de dolares a cordoba: '.$result;
	}
?>