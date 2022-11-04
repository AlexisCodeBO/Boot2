<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio
	{
		private $idcancion,$titulo,$duracion,$genero,$artp, $arts;
		function __construct($titulo,$duracion,$genero,$artp, $arts, $idcancion=null)
		{
			$this->idcancion=$idcancion;
			$this->titulo=$titulo;
			$this->duracion=$duracion;
			$this->genero=$genero;
			$this->artp=$artp;
			$this->arts=$arts;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO cancion(id_cancion,titulo,duracion,genero, artista_principal, artistas_secundarios) VALUES
			(:id_cancion,:titulo,:duracion,:genero, :artista_principal, :artistas_secundarios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_cancion',$this->idcancion);
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
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('idcancion','titulo', 'duracion', 'genero','artp','arts'));
		}
		public function modificar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE cancion set titulo=:titulo , duracion=:duracion, genero=:genero, artista_principal=:artista_principal, artistas_secundarios=:artistas_secundarios WHERE id_cancion=:id";
			$query=$pdo->prepare($sql);
			$query->bindParam(':titulo',$this->titulo);
			$query->bindParam(':duracion',$this->duracion);
			$query->bindParam(':genero',$this->genero);
			$query->bindParam(':artista_principal',$this->artp);
			$query->bindParam(':artistas_secundarios',$this->arts);
			$query->bindParam(':id_cancion',$this->idcancion);
		}
		public function eliminar($id){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM cancion WHERE id_cancion = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			return $query->execute();

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
			return $this->artp;
		}
		public function getarts(){
			return $this->arts;
		}
		public function getId(){
			return $this->idcancion;
		}

	}
 ?>