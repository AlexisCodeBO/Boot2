<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Sitio2.php');
      if (isset($_GET['id'])){
			$arr=Sitio::ListarSitio($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
		<form action="" method="POST" role="form" id="fcancion">
		<?php if ($sw) { ?>
				<legend>Modificacion Sitio</legend>
			<?php }
			else {
			 ?>
			<legend>Añadir Nueva Canción</legend>
			<?php } ?>
			
			<div class="form-group">
				<label for="nombre">Título:</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre sitio">
			</div>
			<div class="form-group">
				<label for="genero" >Duración:</label>
				<input type="text" class="form-control" id="duracion" name="duracion" placeholder="Nombre sitio">
			</div>
			<div class="form-group">
				<label for="canci" >Género:</label>
				<input type="text" class="form-control" id="genero" name="genero" placeholder="Nombre sitio">
			</div>
			<div class="form-group">
				<label for="dueto" >Artista principal:</label>
				<input type="text" class="form-control" id="artp" name="artp" placeholder="Nombre sitio">
			</div>
			<div class="form-group">
				<label for="textareaDescripcion" class="col-sm-2 control-label">Artistas secundarios:</label>
				<div class="col-sm-10">
					<textarea name="arts" id="arts" class="form-control" rows="3" required="required"></textarea>
				</div>
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
			var f = document.getElementById('fcancion');
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