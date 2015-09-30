<?php 
	class Database extends PDO{
		function __construct(){
			try{
<<<<<<< HEAD
				parent::__construct('mysql:host=localhost;dbname=IOC2','root','miyoungrae123');
=======
				parent::__construct('mysql:host=localhost;dbname=IOC','root','');
>>>>>>> 692d359a2bb7a0bd3cad5f669e63c907c3479308
			}
			catch(PDOException $e){
				echo $e;
			}
		}
		
	}
?>