<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Artista
	{
		private $id_artista,$nombre,$genero,$cancion,$dueto, $lanzamiento;
		function __construct($nombre,$genero,$cancion,$dueto,$lanzamiento, $id_artista=null)
		{
			$this->id_artista=$id_artista;
			$this->nombre=$nombre;
			$this->genero=$genero;
			$this->cancion=$cancion;
			$this->dueto=$dueto;
			$this->lanzamiento=$lanzamiento;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO artista(nombre,genero,cancion, dueto, lanzamiento) VALUES
			(:nombre,:genero,:cancion,:dueto, :lanzamiento)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':cancion',$this->cancion);
			$query->bindParam(':dueto',$this->dueto);
			$query->bindParam(':lanzamiento',$this->lanzamiento);
			return $query->execute();
		}
		static public function ListarseleccionarTodo()
		{
			$pdo = Conexion::conectar();			
			$sql='SELECT * FROM artista';
			$stn = $pdo->prepare($sql);	
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artista',array('nombre','genero', 'cancion', 'dueto', 'lanzamiento'));
		}
		static public function listarArtista($id_artista)
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM artista WHERE id_artista=:id_artista';
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_artista',$id_artista);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artista',array('nombre','genero','cancion', 'dueto', 'lanzamiento'));
		}
		public function modificaractualizar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE artista set nombre=:nombre , genero=:genero, cancion=:cancion, dueto=:dueto, lanzamiento=:lanzamiento WHERE id_artista=:id";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':cancion',$this->cancion);
			$query->bindParam(':dueto',$this->dueto);
			$query->bindParam(':lanzamiento',$this->lanzamiento);

			return $query->execute();
		}
		public function eliminar($id_artista){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM artista WHERE id_artista = :id_artista";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_artista',$id_artista);

			return $query->execute();

		}
		public function seleccionarartista($id_artista){
			$pdo = Conexion::conectar();
			$sql='SELECT * FROM artista WHERE id_artista = :id';
			$stn = $pdo->prepare($sql);	
			$stn->bindParam(':id',$id,PDO::PARAM_INT); 
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Artista',array('nombre', 'genero', 'cancion', 'dueto', 'lanzamiento'));
		}
		public function getnombre()
		{
			return $this->Nombre;
		}
		public function getgenero()
		{
			return $this->genero;
		}
		public function getcancion()
		{
			return $this->Cancion;
		}
		public function getdueto()
		{
			return $this->Dueto;
		}
		public function getlan(){
			return $this->lanzamiento;
		}
		public function getId(){
			return $this->id_artista;
		}

	}
 ?>