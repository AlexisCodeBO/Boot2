<?php 
	include('parcia/cabecera.php');
 ?>

		<h1 class="text-left">Bienvenido...</h1>
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img alt="Bootstrap Image Preview" src="img/logo.jpg" />
			<?php 
            include('parcia/menu.php');
			?>
			    <?php include('Sitio.php');
				//$arr = Sitio::listarTodo();
				//$i=0; 
				//var_dump($arr);
			?>
		</div>
		<!-- carrusel -->
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="thumbnail">
			<img data-src="#" alt="">
			<div class="caption">
				<h3>Radio Latina</h3>
				<p>
					Es una página hecha para ser almacén de la música de artistas latinos, junto a la información referida. Artistas clásicos como Juan Gabriel y modernos como JBalvin, Maluma y Joey Montana se incluyen en la lista.
				</p>
				<div>
				<strong>Año de creación:</strong> 2017
				</div>
				<div>
				Materia: <span>Programación III</span>
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
                  <a href="gente.php">
                  <button type="button" class="btn btn-default" >Escuchar</button><br />
					</a>
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
                  <a href="bonita.php">
                  <button type="button" class="btn btn-default" >Escuchar</button>
                  </a></div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
    <div class="col-md-3 ">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/despacito.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Despacito</p>
                  </h4>
                  <h3>Luis Fonsi</h3>
                  <a href="despacito.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
                  </a></div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>
	<div class="col-md-3 col-md-offset-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/labici.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>La Bicicleta</p>
                  </h4>
                  <h3>Carlos Vives</h3>
				  <a href="bicicleta.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/pretty.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Pretty Boy Dirty Boy</p>
                  </h4>
                  <h3>Maluma</h3>
				  <a href="pretty.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>
    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/picky.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Picky: Back to the roots</p>
                  </h4>
                  <h3>Joey Montana</h3>
				  <a href="picky.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>
    <div class="row">
    <div class="col-md-3 col-md-offset-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/fenix.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Fénix</p>
                  </h4>
                  <h3>Nicky Jam</h3>
				  <a href="amante.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/palacio.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>En el palacio de Bellas Artes</p>
                  </h4>
                  <h3>Juan Gabriel</h3>
				  <a href="amoreterno.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
    <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/iconos.jpg" alt="" height="200" width="200"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <p>Íconos</p>
                  </h4>
                  <h3>Marc Anthony</h3>
				  <a href="mentirle.php">
                  <button type="button" class="btn btn-default">Escuchar</button>
				  </a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>


		<?php  
		include('parcia/footer.php');
		?>
</html>