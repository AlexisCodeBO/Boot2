<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Sitio.php');
      if (isset($_GET['id_cancion'])){
			$arr=Cancion::ListarseleccionarTodo($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
	</head>
	<body>	
<?php 
	include('Cancion.php');
				$arr = Cancion::ListarseleccionarTodo();			
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Lista Canción</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID CANCION</th>
								<th>TITULO</th>
								<th>DURACION</th>
								<th>GENERO</th>
								<th>ARTISTA PRINCIPAL</th>
								<th>ARTISTAS SECUNDARIOS</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($arr as $can) { ?>
							<tr>
								<td><?=$can->getId()?></td>
								<td><?=$can->gettitulo()?></td>
								<td><?=$can->getdurac()?></td>
								<td><?=$can->getgenero()?></td>
								<td><?=$can->getartp()?></td>
								<td><?=$can->getarts()?></td>
								<td>
									<div class="btn-group">
									<a href="formcancion.php?id_cancion=<?=$can->getId()?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="eliminarCancion.php?id_cancion=<?=$can->getId()?>" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
<?php include('parcia/footer.php') ?>	
