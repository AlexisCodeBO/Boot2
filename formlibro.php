<?php include('parcia/cabecera.php') ?>
<?php include('parcia/menu.php'); ?>
	<?php include('libro.php');
      if (isset($_GET['codigo_libro'])){
			$arr=libro::Listarlibro($_GET['id']);
		} 
		$sw = isset($arr);
      ?>
<div class="container">
		<form action="" method="POST" role="form" id="fsitio">
			
			<?php if ($sw) { ?>
				<legend>Modificar libro</legend>
			<?php }
			else {
			 ?>
			
			<legend>Añadir Nuevo libro</legend>
			<?php } ?>
			<div class="form-group">
				<label for="nombre">Código autor</label>
				<input type="text" class="form-control" id="codigo_autor" name="codigo_autor" placeholder="Nombre autor" value="<?=$sw?$arr[0]->getcodautor():''?>">
			</div>
			<div class="form-group">
				<label for="genero" >Paginas</label>
				<input type="text" class="form-control" id="paginas" name="paginas" placeholder="paginas" value="<?=$sw?$arr[0]->getpaginas():''?>">
			</div>
			<div class="form-group">
				<label for="canci" >Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre " value="<?=$sw?$arr[0]->gettitulo():''?>">
			</div>
			<div class="form-group">
				<label for="dueto" >ISBN:</label>
				<input type="text" class="form-control" id="isbn" name="isbn" placeholder="Número isbn" value="<?=$sw?$arr[0]->getisbn():''?>">
			</div>
			<div class="form-group">
				<label for="dueto" >Editorial:</label>
				<input type="text" class="form-control" id="editorial" name="editorial" placeholder="editorial" value="<?=$sw?$arr[0]->geteditorial():''?>">
			</div>
			<input type="hidden" name="id" value="<?=$sw?$arr[0]->getcodlibro():''?>">
			
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
					xht.open('POST','modificarautor.php');
				}
				else{
					xht.open('POST','insercionautor.php');
				}
				xht.send(new FormData(f));	
			}
		</script>
<?php include('parcia/footer.php') ?>	