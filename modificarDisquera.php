<?php 
	include('Disquera.php');
   	
   	$disq = new Disquera($_POST['nombre'],$_POST['dueno']);
	echo $disq->modificaractualizar();


?>