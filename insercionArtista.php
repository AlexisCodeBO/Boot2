<?php
	include('Artista.php');
	/*echo $_POST['nombre']; 
	echo $_POST['genero'];
    echo $_POST['cancion'];
    echo $_POST['dueto'];*/
	
	$sitio = new Artista($_POST['nombre'],$_POST['genero'],$_POST['cancion'], $_POST['dueto'], $_POST['lanzamiento']);
	
	
	
	echo $sitio->insertar();
	//echo $sitio2->insertar();
	
	
?>