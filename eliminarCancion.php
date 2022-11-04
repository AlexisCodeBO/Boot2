<?php
	include('Cancion.php');
	Cancion::eliminar($_GET['id_cancion']);
	header('Location:http://localhost:8081/Boot2/listacancion.php');
?>