<?php 
	
		$mysqli= new mysqli('localhost','root','root','gym');
        
        if(mysqli_connect_error()){
            die('Error en la conexion ('.mysqli_connect_errno().')'.mysqli_connect_error());
        }

        mysqli_set_charset($mysqli,"utf8");

 ?>