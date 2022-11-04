<?php
	include('Sitio.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/boot2/bootstrap2.php');
?>