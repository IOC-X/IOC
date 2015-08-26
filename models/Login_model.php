<?php 
	class Login_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function login($username,$password){
			$st = $this->db->prepare("SELECT * FROM employee_list WHERE userName=:username AND userPassword=:password");
			$st->execute(array(
				':username' => $username,
				':password' => $password
			));
			$data = $st->fetchAll();
			if(count($data) ==1){
				Session::init();
				$_SESSION['loggedIn'] = $username;
				header('location:' . URL );
			}
			else{
				header('location:' . URL . 'login');
			}
		}
		public function loadProfileDetails($employeeCode){
			$st = $this->db->prepare("SELECT * FROM employee_list WHERE employeeCode=:empCode");
			$st->execute(array(
				':empCode' => $employeeCode
			));
			return $st->fetchAll();
		}
		public function signup(){
			$st = $this->db->prepare("");
			$st->execute(array(
		
			));
		}
		public function getEmployeeCode($username){
			$st = $this->db->prepare("SELECT employeeCode FROM employee_list WHERE userName=:username");
			$st->execute(array(
				':username' => $username
			));
			return ($st->fetch());
		}
	}
?>