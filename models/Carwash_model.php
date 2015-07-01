<?php
include_once 'C:\wamp\www\IOC\libs\Database.php';
	class Carwash_model extends Model{
		function __construct(){
			parent::__construct();
		}
                 public function selectAllpackages()
	{
		//if (!isset($order))
		//{
		//	$order = 'name';
		//}
		
		$sql = $this->db->prepare("SELECT * FROM packages");
		$sql->execute();
		//$result = $sql->fetchAll(PDO::FETCH_ASSOC);

		//$contacts = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$packages[] = $obj;
		}
		return $packages;
	}
        public function selectById($id)
	{
		
		$sql = $this->db->prepare("SELECT * FROM packages WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	public function edit($name, $description, $price, $id)
	{
		//$pdo = Database::connect();
		$sql = $this->db->prepare("UPDATE packages SET name = ?, description = ?, price = ? WHERE id = ? LIMIT 1");
		$result = $sql->execute(array($name, $description, $price, $id));
	}	
  
                
	}
	
?>