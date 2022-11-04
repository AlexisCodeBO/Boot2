<?php
	include('Artista.php');
	Artista::eliminar($_GET['id_artista']);
	header('Location:http://localhost:8081/Boot2/listaartista.php');
?>