<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Album.php');
      if (isset($_GET['id_disquera'])){
			$arr=Disquera::ListarseleccionarTodo($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
	</head>
	<body>	
<?php 
	include('Disquera.php');
				$arr = Disquera::ListarseleccionarTodo();			
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Lista Disquera</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID DISQUERA</th>
								<th>NOMBRE</th>
								<th>DUEÑO</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($arr as $dis) { ?>
							<tr>
								<td><?=$dis->getId()?></td>
								<td><?=$dis->getnombre()?></td>
								<td><?=$dis->getdueno()?></td>
								
								<td>
									<div class="btn-group">
									<a href="formdisquera.php?id_disquera=<?=$dis->getId()?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="eliminarDisquera.php?id_disquera=<?=$dis->getId()?>" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
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
