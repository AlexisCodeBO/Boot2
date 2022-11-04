<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Cancion
	{
		private $id_cancion,$titulo,$duracion,$genero,$artista_principal, $artistas_secundarios;
		function __construct($titulo,$duracion,$genero,$artista_principal, $artistas_secundarios, $id_cancion=null)
		{
			$this->id_cancion=$id_cancion;
			$this->titulo=$titulo;
			$this->duracion=$duracion;
			$this->genero=$genero;
			$this->artista_principal=$artista_principal;
			$this->artistas_secundarios=$artistas_secundarios;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO cancion(titulo,duracion,genero, artista_principal, artistas_secundarios) VALUES
			(:titulo,:duracion,:genero, :artista_principal, :artistas_secundarios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_cancion',$this->id_cancion);
			$query->bindParam(':titulo',$this->titulo);
			$query->bindParam(':duracion',$this->duracion);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':artista_principal',$this->artista_principal);
			$query->bindParam(':artistas_secundarios',$this->artistas_secundarios);
			return $query->execute();
		}
		static public function ListarseleccionarTodo()
		{
			$pdo = Conexion::conectar();			
			$sql='SELECT * FROM cancion';
			$stn = $pdo->prepare($sql);	
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cancion',array('titulo','duracion', 'genero', 'artista_principal', 'artistas_secundarios'));
		}
		static public function listarCancion()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM cancion WHERE id_cancion=:id_cancion';
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_cancion',$id_cancion);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cancion',array('titulo', 'duracion', 'genero','artista_principal','artistas_secundarios'));
		}
		public function modificaractualizar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE cancion set titulo=:titulo , duracion=:duracion, genero=:genero, artista_principal=:artista_principal, artistas_secundarios=:artistas_secundarios WHERE id_cancion=:id";
			$query=$pdo->prepare($sql);
			$query->bindParam(':titulo',$this->titulo);
			$query->bindParam(':duracion',$this->duracion);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':artista_principal',$this->artista_principal);
			$query->bindParam(':artistas_secundarios',$this->artistas_secundarios);
			
			return $query->execute();
		}
		public function eliminar($id_cancion){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM cancion WHERE id_cancion = :id_cancion";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_cancion',$id_cancion);
			return $query->execute();

		}
		public function seleccionarcancion($id_cancion){
			$pdo = Conexion::conectar();
			$sql='SELECT * FROM cancion WHERE id_cancion = :id_cancion';
			$stn = $pdo->prepare($sql);	
			$stn->bindParam(':id_cancion',$id_cancion,PDO::PARAM_INT); 
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'album',array('titulo', 'duracion', 'genero', 'artista_principal', 'artistas_secundarios'));
		}
		public function gettitulo()
		{
			return $this->titulo;
		}
		public function getdurac()
		{
			return $this->duracion;
		}
		public function getgenero()
		{
			return $this->genero;
		}
		public function getartp()
		{
			return $this->artista_principal;
		}
		public function getarts(){
			return $this->artistas_secundarios;
		}
		public function getId(){
			return $this->id_cancion;
		}

	}
 ?>