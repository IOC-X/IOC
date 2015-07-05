<?php 
	class View{
		function __construct(){
			
		}
		public function render($name,$arg = false){
			if($arg == false){
				require 'views/'. $name. '.php';
				require_once 'views/footer/footer.php';
			}
			else{
				require 'views/header/header.php';
				require 'views/'. $name. '.php';
				require 'views/footer/footer.php';
			}
		}
	}
?>