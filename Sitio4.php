<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio4
	{
		private $idSitio,$nombre,$lanza,$cat, $disq, $prem;
		function __construct($nombre,$lanza,$cat, $disq, $prem,$idSitio=null)
		{
			$this->nombre=$nombre;
			$this->lanza=$lanza;
			$this->cat=$cat;
			$this->disq=$disq;
			$this->prem=$prem;
			$this->idSitio=$idSitio;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO album(nombre,año_de_lanzamiento,categoria_genero,disquera,premios) VALUES
			(:nombre,:año_de_lanzamiento,:categoria_genero, :disquera, :premios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':año de lanzamiento',$this->lanza);
			$query->bindParam(':categoria_genero',$this->cat);
			$query->bindParam(':disquera',$this->disq);
			$query->bindParam(':premios',$this->prem);

			

			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM album';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','lanza','cat', 'disq', 'prem'));
		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getanio()
		{
			return $this->anio;
		}
		public function getcategoria()
		{
			return $this->categoria;
		}
		public function getdisquera()
		{
			return $this->disquera;
		}
		public function getpremios()
		{
			return $this->premios;
		}
		

	}
 ?>