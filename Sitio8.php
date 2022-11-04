<?php 
	include_once('Conexion.php');
	/**
	* 
	*/
	class Sitio
	{
		private $idalbum,$nombre,$lanzami, $categ, $disq, $premios;
		function __construct($nombre,$lanzami, $categ, $disq, $premios, $idalbum=null)
		{
			$this->idalbum=$idalbum;
			$this->nombre=$nombre;
			$this->lanzami=$lanzami;
			$this->categ=$categ;
			$this->disq=$disq;
			$this->premios=$premios;
			
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO album(id_album,nombre,ano_de_lanzamiento, categoria_genero, disquera, premios) VALUES
			(:id_album,:nombre,:ano_de_lanzamiento,:categoria_genero, :disquera, :premios)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id_album',$this->idalbum);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':ano_de_lanzamiento',$this->lanzami);
			$query->bindParam(':categoria_genero',$this->categ);
			$query->bindParam(':disquera',$this->disq);
			$query->bindParam(':premios',$this->premios);

			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM album';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('idalbum','nombre', 'lanzami', 'categ', 'disq', 'premios'));
		}
		public function modificar(){
			$pdo = Conexion::conectar();
			$sql="UPDATE album set  nombre=:nombre, ano_de_lanzamiento=:ano_de_lanzamiento,categoria_genero=:categoria_genero,disquera=:disquera,premios=:premios   WHERE id_album=:id_album";
			$query=$pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':ano_de_lanzamiento',$this->lanzami);
			$query->bindParam(':categoria_genero',$this->categ);
			$query->bindParam(':disquera',$this->disq);
			$query->bindParam(':premios',$this->premios);
			$query->bindParam(':id_album',$this->idalbum);

		}
		public function eliminar($id){
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM album WHERE id_album = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			return $query->execute();

		}
		public function getnombre()
		{
			return $this->nombre;
		}
		public function getanio()
		{
			return $this->lanzami;
		}
		public function getcategoria(){
			return $this->categ;
		}
		public function getdisq(){
			return $this->disq;
		}
		public function getpremio(){
			return $this->premios;
		}
		public function getId(){
			return $this->idalbum;
		}

	}
 ?>