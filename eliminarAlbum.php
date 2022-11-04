<?php
	include('Album.php');
	Album::eliminar($_GET['id_album']);
	header('Location:http://localhost:8081/Boot2/listaalbum.php');
?>