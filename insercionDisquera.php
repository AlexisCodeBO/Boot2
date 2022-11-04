<?php 
	include('Disquera.php');

	$sitio3 = new Disquera($_POST['nombre'],$_POST['dueno']);

	echo $sitio3->insertar();




 ?>