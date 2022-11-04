<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Sitio.php');
      if (isset($_GET['id_artista'])){
			$arr=Artista::ListarseleccionarTodo($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
	</head>
	<body>	
<?php 
	include('Artista.php');
				$arr = Artista::ListarseleccionarTodo();			
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Lista Artistas</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID ARTISTA</th>
								<th>NOMBRE</th>
								<th>GENERO</th>
								<th>CANCION</th>
								<th>DUETO</th>
								<th>LANZAMIENTO</th>
								<th>ACCIONES</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($arr as $art) { ?>
							<tr>
								<td><?=$art->getId()?></td>
								<td><?=$art->getnombre()?></td>
								<td><?=$art->getgenero()?></td>
								<td><?=$art->getcancion()?></td>
								<td><?=$art->getdueto()?></td>
								<td><?=$art->getlan()?></td>
								<td>
									<div class="btn-group">
									<a href="formartista.php?id_artista=<?=$art->getId()?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="eliminarArtista.php?id_artista=<?=$art->getId()?>" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
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
