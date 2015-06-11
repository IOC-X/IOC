<?php 
	class Login_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function login($username,$password){
			$st = $this->db->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
			$st->execute(array(
				':username' => $username,
				':password' => $password
			));
			$data = $st->fetchAll();
			if(count($data) ==1){
				Session::init();
				$_SESSION['loggedIn'] = $username;
				header('location:' . URL);
			}
			else{
				echo "Oops something went wrong !";
			}
		}
		public function signup(){
			$st = $this->db->prepare("");
			$st->execute(array(
		
			));
		}
	}
?>