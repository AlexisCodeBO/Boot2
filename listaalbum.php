<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php 
      if (isset($_GET['id_album'])){
			$arr=Album::ListarseleccionarTodo($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
	</head>
	<body>	
<?php 
	include('Album.php');
				$arr = Album::ListarseleccionarTodo();			
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Lista Álbum</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID ALBUM</th>
								<th>NOMBRE</th>
								<th>AÑO DE LANZAMIENTO</th>
								<th>CATEGORIA/GENERO</th>
								<th>DISQUERA</th>
								<th>PREMIOS</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($arr as $alb) { ?>
							<tr>
								<td><?=$alb->getId()?></td>
								<td><?=$alb->getnombre()?></td>
								<td><?=$alb->getanio()?></td>
								<td><?=$alb->getgenero()?></td>
								<td><?=$alb->getdisquera()?></td>
								<td><?=$alb->getpremios()?></td>
								<td>
									<div class="btn-group">
									<a href="formalbum.php?id_album=<?=$alb->getId()?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="eliminarAlbum.php?id_album=<?=$alb->getId()?>" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
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
