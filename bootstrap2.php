<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Artistas</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet"  type="text/css" href="config.css">

	</head>
	<body>

		<h1 class="text-left">Bienvenido...</h1>
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img alt="Bootstrap Image Preview" src="img/logo.jpg" />
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">AcercaDe</a>
				</li>
				<li>
					<a href="#">AcercaDe</a>
				</li>
			
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Artista <span class="caret"></span></a>
							<ul class="dropdown-menu">
							
							    <li><a href="#">Insertar artista</a></li> 	
								<li><a href="#">Modificar artista</a></li>
								<li><a href="#">Eliminar</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Canción<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Insertar canción</a></li>
								<li><a href="#">Modificar canción</a></li>
								<li><a href="#">Eliminar</a></li>
															
							</ul>
						</li>
				 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Disquera<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Insertar disquera</a></li>
								<li><a href="#">Modificar disquera</a></li>
								<li><a href="#">Eliminar</a></li>
															
							</ul>
						</li>				
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Álbum<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Insertar álbum</a></li>
								<li><a href="#">Modificar
								 álbum</a></li>
								 <li><a href="#">Eliminar</a></li>
															
							</ul>
						</li>
				</li>
			</ul>
					
				<div>
					<br />
				</div>

				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Artistas<strong class="caret"></strong></a>
					 <ul class="dropdown-menu">
					 <li><a href="jbalvin.html">JBalvin</a></li>
					 <li><a href="fonsi.html" >Luis Fonsi</a></li>
					 <li><a href="chayanne.html" >Chayanne</a></li>
					 <li><a href="eiglesias.html" >Enrique Iglesias</a></li>
					 <li><a href="joey.html" >Joey Montana</a></li>
					 <li><a href="juangabriel.html" >Juan Gabriel</a></li>
					 <li><a href="manthony.html" >Marc Anthony</a></li>
				
					</ul>
				</li>
			    <?php include('Sitio.php');
				//$arr = Sitio::listarTodo();
				//$i=0; 
				//var_dump($arr);
			?>
		</div>
		<!-- carrusel -->
	<div id="carousel-music" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="img/fondo1.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h4>"Mi Gente"</h4>
						<p>Además de la participación del colombiano como líder del material, esta nueva propuesta audiovisual llega de la mano del artista y productor musical Willy William, quien fuera en el año 2016 el artista francés más buscado mundialmente en Shazam.</p>
						
					</div>
				</div>
			</div>
			<div class="item">
				<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="img/fondo2.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h4>Aquí hay música latina.</h4>
						<p>Escogimos algunos artistas latinos solo para mostrarte algunos de sus sencillos.Escucha la música disponible.</p>
						
					</div>
				</div>
			</div>
			<div class="item active">
				<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="img/fondo3.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h4>Aquí hay música latina.</h4>
						<p>Escogimos algunos artistas latinos solo para mostrarte algunos de sus sencillos.Escucha la música disponible.</p>
						
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<!-- fin carrusel -->
</div>
<div class="row">
	<div class="col-md-3">
		<div class="thumbnail">
			<img data-src="#" alt="">
			<div class="caption">
				<h3>Mi Gente</h3>
				<p>
					<span><strong>Álbum:</strong></span> <span>Mi Gente</span><br /><span><strong>Artista:</strong></span> <span><a href="https://www.buenamusica.com/j-balvin">J Balvin</a></span><br /><span><strong>Año:</strong></span> <span>2017</span><br /><span><strong>Tipo:</strong></span> <span>Disco sencillo</span><br /><span><strong>Lanzamiento:</strong></span> <span>30 de junio de 2017</span><br /><span><strong>Disquera:</strong></span> <span>Universal Music Spain S.L.</span>
				</p>
				<div>
				<strong>Descripción:</strong> Además de la participación del colombiano como líder del material, esta nueva propuesta audiovisual llega de la mano del artista y productor musical Willy William, quien fuera en el año 2016 el artista francés más buscado mundialmente en Shazam.
				</div>
				<div>
				Canciones: <span>01. Mi Gente (Featuring Willy William)</span>
				</div>
				
			</div>
		</div>

	</div>
	<div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/gente.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Mi Gente</p>
                  </h4>
                  <h3>JBalvin</h3>
                  <button type="button" class="btn btn-default">Escuchar</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/bonita2.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Bonita</p>
                  </h4>
                  <h3>JBalvin</h3>
                  <button type="button" class="btn btn-default">Escuchar</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/despacito.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Despacito</p>
                  </h4>
                  <h3>Luis Fonsi</h3>
                  <button type="button" class="btn btn-default">Escuchar</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

	
	

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>