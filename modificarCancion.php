<?php 
	include('Cancion.php');
   	
   	$cancion = new Cancion($_POST['titulo'],$_POST['duracion'],$_POST['genero'], $_POST['artp'], $_POST['arts']);
    echo $cancion->modificaractualizar();




?>