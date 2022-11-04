<?php 
 	include('Album.php');

 	$sitio4 = new Album($_POST['nombre'],$_POST['lanzamiento'],$_POST['genero'],$_POST['disquera'],$_POST['premios']);


 	echo $sitio4->insertar();


 ?>