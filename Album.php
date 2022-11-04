<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Album
	{
		private $id_album,$nombre,$lanzamiento, $genero, $disquera, $premios;
		function __construct($nombre,$lanzamiento, $genero, $disquera, $premios, $id_album=null)
		{
			$this->id_album=$id_album;
			$this->nombre=$nombre;
			$this->lanzamiento=$lanzamiento;
			$this->genero=$genero;
			$this->disquera=$disquera;
			$this->premios=$premios;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO album(nombre,lanzamiento, genero, disquera, premios) VALUES
			(:nombre,:lanzamiento,:genero, :disquera, :premios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':lanzamiento',$this->lanzamiento);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':disquera',$this->disquera);
			$query->bindParam(':premios',$this->premios);

			return $query->execute();
		}
		static public function ListarseleccionarTodo()
		{
			$pdo = Conexion::conectar();			
			$sql='SELECT * FROM album';
			$stn = $pdo->prepare($sql);	
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array('nombre','lanzamiento', 'genero', 'disquera', 'premios'));
		}
		static function ListarAlbum($id_album){
			$pdo = Conexion::conectar();
			$sql="SELECT * FROM album WHERE id_album = :id_album";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_album',$id_album);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Album',array('nombre', 'lanzamiento', 'genero', 'disquera', 'premios'));
		}
		public function modificaractualizar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE album set  nombre=:nombre, lanzamiento=:lanzamiento,genero=:genero,disquera=:disquera,premios=:premios   WHERE id_album=:id_album";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':lanzamiento',$this->lanzamiento);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':disquera',$this->disquera);
			$query->bindParam(':premios',$this->premios);
			
			return $query->execute();

		}
		public function eliminar($id_album){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM album WHERE id_album = :id_album";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_album',$id_album);
			return $query->execute();

		}
		public function seleccionaralbum($id_album){
			$pdo = Conexion::conectar();
			$sql='SELECT * FROM album WHERE id_album = :id_album';
			$stn = $pdo->prepare($sql);	
			$stn->bindParam(':id_album',$id_album,PDO::PARAM_INT); 
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'album',array('nombre', 'lanzamiento', 'genero', 'disquera', 'premios'));
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getanio()
		{
			return $this->lanzamiento;
		}
		public function getgenero(){
			return $this->genero;
		}
		public function getdisquera(){
			return $this->disquera;
		}
		public function getpremios(){
			return $this->premios;
		}
		public function getId(){
			return $this->id_album;
		}

	}
 ?>