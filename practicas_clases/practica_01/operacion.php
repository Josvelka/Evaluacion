<?php
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma"){
	$r_suma=sumar($a,$b);
	echo "El resultado de la suma es:".$r_suma;
}
if ($_REQUEST['operador']=="resta") {
	$r_resta=restar($a,$b);
	echo "El resultado de la resta es:".$r_resta;
}
if ($_REQUEST['operador']=="multip") {
	$r_multip=multip($a,$b);
	echo "El resultado de la multiplicación es:".$r_multip;
}
if ($_REQUEST['operador']=="div") {
	$r_div=div($a,$b);
	echo "El resultado de la división es:".$r_div;
}
function sumar($a,$b){
	$suma=$a+$b;
	return $suma;
}
function restar($a,$b){
	$suma=$a-$b;
	return $suma;
}
function multip($a,$b){
	$multip=$a*$b;
	return $multip;
}
function div($a,$b){
	$div=$a/$b;
	return $div;
}
?>