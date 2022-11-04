<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
      <?php include('Sitio.php');
      if (isset($_GET['id'])){
			$arr=Sitio::ListarSitio($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
		<form action="" method="POST" role="form" id="fsitio">
		<?php if ($sw) { ?>
				<legend>Modificacion Sitio</legend>
			<?php }
			else {
			 ?>
			<legend>Añadir Nuevo Álbum</legend>
			<?php } ?>

			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getnombre():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Año de lanzamiento:</label>
				<input type="text" class="form-control" id="lanza" name="lanza" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getanio():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Categoría/Género:</label>
				<input type="text" class="form-control" id="cat" name="cat" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getcategoria():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Disquera:</label>
				<input type="text" class="form-control" id="disq" name="disq" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getdisq():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Premios:</label>
				<input type="text" class="form-control" id="prem" name="prem" placeholder="Nombre sitio" value="<?=$sw?$arr[0]->getpremio():''?>">
			</div>
			<input type="hidden" name="id" value="<?=$sw?$arr[0]->getId():''?>">
			
		
			<?php } ?>
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
			var f = document.getElementById('fsitio');
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
					xht.open('POST','modificarSitio.php');
				}
				else{
					xht.open('POST','insercionSitio.php');
				}
				xht.send(new FormData(f));
			}
		</script>
<?php include('parcia/footer.php') ?>	