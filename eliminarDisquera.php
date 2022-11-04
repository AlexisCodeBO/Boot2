<?php
	include('Disquera.php');
	Disquera::eliminar($_GET['id_disquera']);
	header('Location:http://localhost:8081/Boot2/listadisquera.php');
?>