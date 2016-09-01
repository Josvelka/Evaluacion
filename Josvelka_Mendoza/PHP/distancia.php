<?php

	$distancia=$_POST['distancia'];
	if (!empty($_POST['centimetro'])) {
		$centimetro=$_POST['centimetro'];
		echo $distancia.'Centimetro';
		echo '<br>';
	}

	if (!empty($_POST['pulgadas'])){
		$pulgadas=$_POST['pulgadas'];
		echo 'La distancia equivale: ' .($distancia/2.5).' Pulgadas';
		echo '<br>';
	}
	if(!empty($_POST['metros'])){
		$metros=$_POST['metros'];
		echo 'La distancia equivale: '.($distancia/100).'Metros';
		echo '<br>';
	}
	if(!empty($_POST['kilometros'])){
		$kilometros=$_POST['kilometros'];
		echo 'La distancia equivale: '.($distancia/100000).'Kilometros';
	}
?>