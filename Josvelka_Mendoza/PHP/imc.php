<?php
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$t_alt= $altura*$altura;
	$masa = $peso / $t_alt;

	echo 'La masa corporal es: '.$masa;

?>
