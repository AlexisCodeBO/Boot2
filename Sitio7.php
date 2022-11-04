<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio
	{
		private $iddisquera,$nombre,$dueno;
		function __construct($nombre,$dueno, $iddisquera=null)
		{
			$this->iddisquera=$iddisquera;
			$this->nombre=$nombre;
			$this->dueno=$dueno;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO disquera(id_disquera,nombre,dueno) VALUES
			(:id_disquera,:nombre,:dueno)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_disquera',$this->iddisquera);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':dueno',$this->dueno);
			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM disquera';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('iddisquera','nombre', 'dueno'));
		}
		public function modificar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE disquera set  nombre=:nombre, dueno=:dueno WHERE id_disquera=:id_disquera";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':dueno',$this->dueno);
			$query->bindParam(':id_disquera',$this->iddisquera);
		}
		public function eliminar($id){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM disquera WHERE id_disquera = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			return $query->execute();

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
			return $this->iddisquera;
		}

	}
 ?>