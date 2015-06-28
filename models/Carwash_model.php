<?php
include_once 'C:\wamp\www\IOC\libs\Database.php';
	class Carwash_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public static function getPackages(){
			
			$st = $this->db->prepare("SELECT * FROM packages");
			$st->execute();
			$data = $st->fetchAll();
			

                       if ($data->num_rows > 0) {
                            
                            while($row = $result->fetch_assoc()) 
                            {
                                echo $row["name"];
                                echo $row["description"];
                                echo $row["time"];
                                echo $row["price"];
                            }
                        } else {
                            echo "0 results";
                        }

        db::close();
  
                }
	}
	
?>