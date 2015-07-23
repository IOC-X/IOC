<?php 
	class Managers_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function list_managers(){
			$st = $this->db->prepare("SELECT * FROM managers");
			$data = $st->execute();
			$data = $st->fetchAll();
//                        if ($data->num_rows > 0) {
                            // output data of each row
//                        } else {
//                            echo "0 results";
//                        }
                        return $data;

  //              }
                }
        }
?>