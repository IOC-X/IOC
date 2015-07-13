<?php
	class Stocks extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			// if($_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"){
			// 	$this->view->render('stocks/index',false);				
			// }
			// else{
			// 	$this->view->render('header/header',false);		
			// 	$this->view->render('stocks/index',false);				
			// }
			$this->view->render('stocks/index',false);				
		}
		public function stocks(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			if($_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"){
				$this->view->render('stocks/stocks',false);			
			}
			else{
				$this->view->render('stocks/stocks',true);
			}

		}
		public function morning_reading(){
			$this->view->render('stocks/morning_reading',false);
		}
		public function evening_reading(){
			$this->view->render('stocks/evening_reading',false);
		}
		/*
		* calculating stocks values
		* @return reading in litres after calculation
		*/
		public function calculateStocks(){
			//assigning form data
			$petrol = $_POST['petrol'];
			$spetrol = $_POST['spetrol'];
			$diesel = $_POST['diesel'];
			$sdiesel = $_POST['sdiesel'];
			//returning calculated value to ajax call
			$Apetrol =  self::petrolReading($petrol);
			$Aspetrol = self::spetrolReading($spetrol);
			$Adiesel = self::dieselReading($diesel);
			$Asdiesel = self::sdieselReading($sdiesel);

			$petrol = self::suggestionPetrol($Apetrol);
			$spetrol = self::suggestionSPetrol($Aspetrol);
			$diesel = self::suggestionDiesel($Adiesel);
			$sdiesel = self::suggestionSDiesel($sdiesel);		


			$suggestions = array("petrol" => $petrol , "spetrol" => $spetrol, "diesel"=> $diesel, "sdiesel" => $sdiesel);
			
			$values = array("petrol" => $Apetrol , "spetrol" => $Aspetrol,"diesel"=> $Adiesel, "sdiesel" => $Asdiesel);
			$json_array = array($values,$suggestions);
			echo json_encode($json_array);
		}
		//calculates the quantity for each fuel type
		private function petrolReading($petrol){
			return $petrol*2;
		}
		private function spetrolReading($spetrol){
			return $petrol*2;
		}
		private function dieselReading($diesel){
			return $petrol*2;
		}
		private function sdieselReading($sdiesel){
			return $petrol*2;
		}

		/* 
		* calculates order suggestions for each fuel type
		*/
		private function suggestionPetrol($Apetrol){
			if($Apetrol > 100){
				return 1600;
			}
		}
		private function suggestionSPetrol($Aspetrol){
			if($Aspetrol > 400){
				return 1600;
			}
		}
		private function suggestionDiesel($Adiesel){
			if($Adiesel > 400){
				return 1600;
			}
		}
		private function suggestionSDiesel($Asdiesel){
			if($Asdiesel > 400){
				return 1600;
			}
		}	

		/*
		*  saves order details
		*/
		public function insertMrngOrder(){

			require 'models/Stocks_model.php';

			$readingPetrol = $_POST['petrol'];
			$readingSPetrol = $_POST['spetrol'];
			$readingDiesel = $_POST['diesel'];
			$readingSDiesel = $_POST['sdiesel'];

			$qntyPetrol = $_POST['qntyPetrol'];
			$qntySPetrol = $_POST['qntySPetrol'];
			$qntyDiesel = $_POST['qntyDiesel'];
			$qntySDiesel = $_POST['qntySDiesel'];
			
			$orderpetrol = $_POST['orderPetrol'];
			$orderspetrol = $_POST['orderSPetrol'];
			$orderdiesel = $_POST['orderDiesel'];
			$ordersdiesel = $_POST['orderSDiesel'];
			
			$model = new Stocks_model();
			$model->insertMrngOrder($readingPetrol,$qntyPetrol,$orderpetrol,$readingSPetrol,$qntySPetrol,$orderspetrol,$readingDiesel,$qntyDiesel,$orderdiesel,$readingSDiesel,$qntySDiesel,$ordersdiesel);
		}



		/* 
		*end for fuel calculation functions
		*/
		//returns the stockgraph 
		public function stockgraph(){
			$this->view->render('stocks/stockgraph',false);
		} 
		//pumpreadings index page
		public function pump_readings(){
			$this->view->render('stocks/pump_readings',false);
		}
		//daily reading of pumps
		public function daily_readings(){
			$this->view->render('stocks/daily_readings',false);
		}
		//inserting pump readings
		public function insertPumpReadings(){
			echo 'Success reponse';
		}
		//editing previous pump readings
		public function previousEntries(){
			$this->view->render('stocks/pump/previousEntries',false);	
		}
		//returns statuses of pumps
		public function statuses(){
			$this->view->render('stocks/pump/statuses',false);	
		}
		//Lubricant store
		public function lubricant(){
			$this->view->render('stocks/lubricant/index',false);
			// self::search_lube();
		}
		//Lube search
		public function search_lube(){
			$this->view->render('stocks/lubricant/search_lube',false);
		}
		/*
		* search function for lubricant search 
		* @returns String 
		* search results 
		*/
		public function searchLube(){
			//$name = $_POST['name'];
			$name = $_GET['nm'];
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			$result = $model->searchLube($name);
			echo json_encode($result);
		}
		//renders add lubes page
		public function add_lube(){
			$this->view->render('stocks/lubricant/add_lube',false);	
		}
		//handles data from add lubePage
		public function addLube(){
			require 'models/Stocks_model.php';

			$prdName =  $_POST['prd-name'];
			$prdPrice = $_POST['prd-price'];
			$prdQnty = $_POST['prd-qnty'];

			$model = new Stocks_model();
			if($model->addLubricant($prdName,$prdPrice,$prdQnty)){
				echo "Success";
			}
			else{
				echo "Nah";
			}
		}
		//renders editing in lubricants 
		public function edit_lube(){
			$this->view->render('stocks/lubricant/edit_lube',false);	
		}
		//renders suppliers
		public function suppliers(){
			$this->view->render('stocks/suppliers/index',false);
		}
		/*
		* Supplier handling functions start here
		*/
		//renders suppliers
		public function search_suppliers(){
			$this->view->render('stocks/suppliers/search',false);
		}
		/*
		* Adding suppliers 
		* renders adding page
		* @returns the status of processing
		*/
		public function add_supplier(){
			$this->view->render('stocks/suppliers/add',false);
		}
		public function history(){
			$this->view->render('stocks/stockgraph',false);
		}
	}
?>
