<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio
	{
		private $id_artista, $idSitio,$nombre,$genero,$cancion,$dueto;
		function __construct( $nombre,$genero,$cancion,$dueto, $id_artista=NULL)
		{
			$this->id_artista=$id_artista;
			$this->nombre=$nombre;
			$this->genero=$genero;
			$this->cancion=$cancion;
			$this->dueto=$dueto;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO artista(nombre_artista,genero,cancion, nombre_dueto) VALUES
			(:nombre_artista,:genero,:cancion,:nombre_dueto)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre_artista',$this->nombre);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':cancion',$this->cancion);
			$query->bindParam(':nombre_dueto',$this->dueto);
			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM artista';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','genero','cancion', 'dueto'));
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getgenero()
		{
			return $this->genero;
		}
		public function getcancion()
		{
			return $this->cancion;
		}
		public function getdueto()
		{
			return $this->dueto;
		}
		public function getId(){
			return $this->id_artista;
		}

	}
 ?>