<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Sitio.php');
      if (isset($_GET['id'])){
			$arr=Sitio::ListarSitio($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
		<form action="" method="POST" role="form" id="fartista">
			
			<?php if ($sw) { ?>
				<legend>Modificar Artista</legend>
			<?php }
			else {
			 ?>
			
			<legend>Añadir Nuevo Artista</legend>
			<?php } ?>
			<div class="form-group">
				<label for="nombre">Nombre Artista</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getnombre():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Género</label>
				<input type="text" class="form-control" id="genero" name="genero" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getgenero():''?>">
			</div>
			<div class="form-group">
				<label for="canci" >Canción</label>
				<input type="text" class="form-control" id="cancion" name="cancion" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getcancion():''?>">
			</div>
			<div class="form-group">
				<label for="dueto" >Dueto con:</label>
				<input type="text" class="form-control" id="dueto" name="dueto" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getdueto():''?>">
			</div>
			<div class="form-group">
				<label for="dueto" >Lanzamiento:</label>
				<input type="text" class="form-control" id="lanzamiento" name="lanzamiento" placeholder="Año" value="<?=$sw?$arr[0]->getlan():''?>">
			</div>
			<input type="hidden" name="id" value="<?=$sw?$arr[0]->getId():''?>">
			
			<hr>
			<?php if($sw){ ?>
			<button type="submit" class="btn btn-primary" id="btn">Modificar</button>
			<?php } 
			else { ?>
			<button type="submit" class="btn btn-primary" id="btn">Guardar</button>
			<?php } ?>
		</form>
		<div id="res"></div>

		<footer class="row">
			<hr>
			<p>&copy;ULS 2017</p>
			<ul class="nav navbar-default navbar-right">
				<li><a href="#">Inicio</a></li>
			</ul>	
		</footer>
		</div>
		<script type="text/javascript">
			var f = document.getElementById('fartista');
			f.onsubmit=insertar;
			function insertar(e) {
				e.preventDefault();
				var xht = new XMLHttpRequest();
				xht.onreadystatechange=function () {
					if (this.status==200&&this.readyState==4) {
						document.getElementById('res').innerHTML=this.responseText;	
					}
				}
				var btn=document.getElementById("btn").innerHTML;
				if (btn == 'Modificar') {
					xht.open('POST','modificarArtista.php');
				}
				else{
					xht.open('POST','insercionArtista.php');
				}
				xht.send(new FormData(f));	
			}
		</script>
<?php include('parcia/footer.php') ?>	