<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio3
	{
		private $idSitio,$nombre,$dueño;
		function __construct($nombre,$dueño,$idSitio=null)
		{
			$this->nombre=$nombre;
			$this->dueno=$dueno;
			$this->idSitio=$idSitio;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO disquera(nombre,dueño) VALUES
			(:nombre,:dueño)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':dueño',$this->dueno);
			

			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM disquera';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','dueno'));
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getdueno()
		{
			return $this->dueno;
		}
		

	}
 ?>