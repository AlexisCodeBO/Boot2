<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio
	{
		private $idSitio,$nombre,$genero,$cancion,$dueto, $lanzami;
		function __construct($nombre,$genero,$cancion,$dueto,$lanzami, $idSitio=null)
		{
			$this->idartista=$idartista;
			$this->nombre=$nombre;
			$this->genero=$genero;
			$this->cancion=$cancion;
			$this->dueto=$dueto;
			$this->lanzami=$lanzamiento;
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
		public function modificar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE artista set nombre_artista=:nombre_artista , genero=:genero, cancion=:cancion, nombre_dueto=:nombre_dueto, lanzamiento=:lanzamiento WHERE id_artista=:id";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre_artista',$this->nombre);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':cancion',$this->cancion);
			$query->bindParam(':nombre_dueto',$this->dueto);
			$query->bindParam(':lanzamiento',$this->lanzami);
			$query->bindParam(':id_artista',$this->idartista);
		}
		public function eliminar($id){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM artista WHERE idartista = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			return $query->execute();

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
		public function getlan(){
			return $this->lanzami;
		}
		public function getId(){
			return $this->idartista;
		}

	}
 ?>