<?php 
	class Database extends PDO{
		function __construct(){
			try{
				parent::__construct('mysql:host=localhost;dbname=IOC2','root','');
			}
			catch(PDOException $e){
				echo $e;
			}
		}
		
	}
?>