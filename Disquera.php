<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Disquera
	{
		private $id_disquera,$nombre,$dueno;
		function __construct($nombre,$dueno, $id_disquera=null)
		{
			$this->id_disquera=$id_disquera;
			$this->nombre=$nombre;
			$this->dueno=$dueno;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO disquera(nombre,dueno) VALUES
			(:nombre,:dueno)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':dueno',$this->dueno);
			return $query->execute();
		}
		static public function ListarseleccionarTodo()
		{
			$pdo = Conexion::conectar();			
			$sql='SELECT * FROM disquera';
			$stn = $pdo->prepare($sql);	
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Disquera',array('nombre','dueno'));
		}
		static public function listarDisquera($id_disquera)
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM disquera WHERE id_disquera= :id_disquera';
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_disquera',$id_disquera);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Disquera',array('nombre', 'dueno'));
		}
		public function modificaractualizar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE disquera set  nombre=:nombre, dueno=:dueno WHERE id_disquera=:id_disquera";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':dueno',$this->dueno);
			
			return $query->execute();
		}
		public function eliminar($id_disquera){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM disquera WHERE id_disquera = :id_disquera";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_disquera',$id_disquera);
			return $query->execute();

		}
		public function seleccionardisquera($id_disquera){
			$pdo = Conexion::conectar();
			$sql='SELECT * FROM disquera WHERE id_disquera = :id_disquera';
			$stn = $pdo->prepare($sql);	
			$stn->bindParam(':id_disquera',$id_disquera,PDO::PARAM_INT); 
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Disquera',array('nombre', 'dueno'));
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getdueno()
		{
			return $this->dueno;
		}

		public function getId(){
			return $this->id_disquera;
		}

	}
 ?>