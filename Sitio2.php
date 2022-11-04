<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio2
	{
		private $idSitio,$titulo,$duracion,$genero,$artp,$arts;
		function __construct($titulo,$duracion,$genero,$artp,$arts,$idSitio=null)
		{
			$this->idSitio=$idSitio;
			$this->titulo=$titulo;
			$this->duracion=$duracion;
			$this->genero=$genero;
			$this->artp=$artp;
			$this->arts=$arts;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO cancion(titulo,duracion,genero, artista_principal, artistas_secundarios) VALUES
			(:titulo,:duracion,:genero,:artista_principal, :artistas_secundarios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':titulo',$this->titulo);
			$query->bindParam(':duracion',$this->duracion);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':artista_principal',$this->artp);
			$query->bindParam(':artistas_secundarios',$this->arts);

			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM cancion';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('titulo','duracion','genero', 'artp', 'arts'));
		}
		public function gettitulo()
		{
			return $this->titulo;
		}
		public function getduracion()
		{
			return $this->duracion;
		}
		public function getgenero()
		{
			return $this->genero;
		}
		public function getartprincipal()
		{
			return $this->artp;
		}
		public function getartsecundarios()
		{
			return $this->arts;
		}

	}
 ?>