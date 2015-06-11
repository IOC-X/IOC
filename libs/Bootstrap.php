<?php 
	class Bootstrap{
		function __construct(){
			$url = isset($_GET['url']) ? $_GET['url'] : null;
			$url = explode('/', $url);
			//print_r($url);
			//if empty redirect to index
			if(empty($url[0])){	
				require 'controllers/index.php';
				$controller = new Index();
				$controller->index();
				return false;
			} 
			$file = 'controllers/'. $url[0] .'.php';
			if(file_exists($file)){
				require $file;
				$controller = new $url[0]();
				
				if(isset($url[1])){
					if($url[1] == ""){
						$controller->index();
					}
					else if(isset($url[2])){			
						if($url[2] == ""){
							$controller->$url[1]();
						}
						else{
							$controller->$url[1]($url[2]);
						}
					}
					else{
						if(method_exists($controller, $url[1])){
					//	$controller->index();
							$controller->$url[1]();
						}
						else{
							require 'controllers/error.php';
							$controller = new Error();
							$controller->index();
							return false;
						}	
					}	
				}
				if(!isset($url[1])){
					$controller->index();
				}	
			}
			else{
				require 'controllers/error.php';
				$controller = new Error();
				$controller->index();
				return false;
			}
			
		}
	}
?>