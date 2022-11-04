<?php 
	include('Album.php');
	
	$album = new Album($_POST['nombre'],$_POST['lanza'],$_POST['cat'],$_POST['disq'],$_POST['prem']);
	echo $album->modificaractualizar();




?>