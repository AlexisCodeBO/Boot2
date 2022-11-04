<?php 
	include('Cancion.php');

	$sitio2 = new Cancion($_POST['titulo'],$_POST['duracion'],$_POST['genero'], $_POST['artista_principal'], $_POST['artistas_secundarios']);
	
	echo $sitio2->insertar();
	


 ?>