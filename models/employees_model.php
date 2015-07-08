<?php
	class Employees_model extends Model{
		function __construct(){
			parent::__construct();

		}
		public function list_employees(){
//			$st = $this->db->prepare("SELECT * FROM managers");
//			$data = $st->execute();
//			$data = $st->fetchAll();
//
//                        return $data;

                    $st=$this->db->query("SELECT * FROM managers");
                    return $st;
                }
                public function add_employees($code,$fname,$lname,$address,$nic,$hpnumber,$mpnumber,$bday,$hireday,$email,$user,$password,$image,$area){

                    $adder = $this->db->prepare("INSERT INTO managers (managerCode,firstName,lastName,address,nicNumber,homePhone,mobilePhone,birthDate,hireDate,email,userName,password,file,textarea)"
                            . "VALUES(:code,:fname,:lname,:address,:nic,:hpnumber,:mpnumber,:bday,:hireday,:email,:user,:password,:image,:area)");

                    $adder->execute(array(':code'=>$code,':fname'=>$fname,':lname'=>$lname,':address'=>$address,':nic'=>$nic,':hpnumber'=>$hpnumber,':mpnumber'=>$mpnumber,':bday'=>$bday,':hireday'=>$hireday,
                        ':email'=>$email,':user'=>$user,':password'=>$password,':image'=>$image,':area'=>$area));

                }
                public function search_employees($id){
//
//                        $st=$this->db->prepare("SELECT * FROM managers WHERE managerCode=?");
//                      $st->bindValue(1,$id);
//
//                    $st->execute();
//                    $st->fetch(PDO::FETCH_OBJ);
//                    return $st;
//									  echo $val = "MN1411864";
										$val = (string)$id;
                    $st=$this->db->prepare("SELECT * FROM managers WHERE managerCode=:ID");
                    $st->execute(array(
											':ID' => $val
										));
                    print_r($st->fetchAll());
                }
        }
?>
