<?php 
	class Database extends PDO{
		function __construct(){
			try{
				parent::__construct('mysql:host=localhost;dbname=IOC2','root','miyoungrae123');
			}
			catch(PDOException $e){
				echo $e;
			}
		}
		
	}
?>