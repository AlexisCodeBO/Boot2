<?php
	include('Sitio.php');
	/*echo $_POST['nombre']; 
	echo $_POST['genero'];
    echo $_POST['cancion'];
    echo $_POST['dueto'];*/
	
	//$sitio = new Sitio($_POST['nombre'],$_POST['genero'],$_POST['cancion'], $_POST['dueto']);
	$sitio2 = new Sitio($_POST['titulo'],$_POST['duracion'],$_POST['genero'], $_POST['artp'], $_POST['arts']);
	//$sitio3 = new Sitio($_POST['nombre'],$_POST['dueno']);
	//$sitio4 = new Sitio($_POST['nombre'],$_POST['lanza'],$_POST['cat'],$_POST['disq'],$_POST['prem']);
	//echo $sitio->insertar();
	echo $sitio2->insertar();
	//echo $sitio3->insertar();
	//echo $sitio4->insertar();
?>