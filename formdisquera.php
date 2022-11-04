<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('Sitio3.php');
      if (isset($_GET['id'])){
			$arr=Sitio::ListarSitio($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
		<form action="" method="POST" role="form" id="fdisquera">
		<?php if ($sw) { ?>
				<legend>Modificacion Sitio</legend>
			<?php }
			else {
			 ?>
			<legend>Añadir Nueva Disquera</legend>
			<?php } ?>

			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre disco">
			</div>
			<div class="form-group">
				<label for="genero" >Dueño:</label>
				<input type="text" class="form-control" id="dueno" name="dueno" placeholder="Nombre disquera">
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
			var f = document.getElementById('fdisquera');
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
					xht.open('POST','modificarDisquera.php');
				}
				else{
					xht.open('POST','insercionDisquera.php');
				}
				xht.send(new FormData(f));	
			}
		</script>
<?php include('parcia/footer.php') ?>	