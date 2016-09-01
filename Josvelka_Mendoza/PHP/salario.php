<?php
	$Pago = $_POST['pago'];
	$Hora = $_POST['hora'];

	$sal=$Pago*$Hora;
	echo '<h3>Sub-total de Salario</h3><br/>';
	echo 'Salario * horas trabajadas: '.$sal.'<br/>';
	echo '<h3>Deducciones</h3><br/>';
	echo 'INSS: '.($sal*0.06).'<br/>';
	echo 'IR: '.($sal*0.15).'<br/>';
	echo '<h3>Salario</h3><br/>';
	echo 'Total a recibir:  '.(($sal-$sal*0.06)-$sal*0.15);
?>