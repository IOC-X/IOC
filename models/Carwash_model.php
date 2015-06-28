<?php
include_once 'C:\wamp\www\IOC\libs\Database.php';
	class Carwash_model extends Model{
		function __construct(){
			parent::__construct();
		}
                 public function selectAll()
	{
		//if (!isset($order))
		//{
		//	$order = 'name';
		//}
		
		$sql = $this->db->prepare("SELECT * FROM packages");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$contacts = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$packages[] = $obj;
		}
		return $packages;
	}
		public function getPackages(){
			
			try
		{
			
                        parent::__construct();    
			$result = $this->selectAll();
			
			return $result;
		}
		catch(Exception $e)
		{	
			
		}
  
                }
	}
	
?>