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
//			Session::init();
//			if(isset($_SESSION['loggedIn'])){
				$this->view->render('stocks/index',false);					
//			}
//			else{
//				header('location:'.URL . 'login');
//			}
		}
		public function stocks(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			//if($_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"){
				$this->view->render('stocks/stocks',false);			
			//}
			//else{
			//	$this->view->render('stocks/stocks',true);
			//}

		}
		public function morning_reading(){
			$this->view->render('stocks/morning_reading',false);
		}
		public function evening_reading(){
			$this->view->render('stocks/evening_reading',false);
		}
		public function getTankStocks(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			echo json_encode($model->getTankStocks());
		}
		/**
		*
		*renders orders template for stocks -> orders
		*/
		public function view_orders(){
			$this->view->render('stocks/view_orders',false);	
		}
		/**
		*
		*loads orders data to template rendered 
		*/
		public function loadOrders(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$type = $_GET['type'];
			echo json_encode($model->loadOrders($type));
		}
		/**
		*removes order entries 
		*/
		public function removeOrder(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$id = $_POST['ID'];
			if($model->removeOrder($id)){
				echo "Success";
			}
			else{
				echo "Failed";
			}
		}
		/**
		*Edits order entries
		*/
		public function editOrder(){
			$id = $_POST['Id'];
			$reading = $_POST['reading'];
			$qnty = $_POST['qnty'];
			$order = $_POST['order'];
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$model->editOrder($id,$reading,$qnty,$order);
			echo "Success";
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
			
			$model->updateTank($qntyPetrol,$qntySPetrol,$qntyDiesel,$qntySDiesel);

			echo "DONE";
		}
		/*
		* Insert evening order entries
		*/
		public function insertEveningOrder(){

			require 'models/Stocks_model.php';

			$readingPetrol = $_POST['petrol'];
			$readingSPetrol = $_POST['spetrol'];
			$readingDiesel = $_POST['diesel'];
			$readingSDiesel = $_POST['sdiesel'];

			$qntyPetrol = $_POST['qntyPetrol'];
			$qntySPetrol = $_POST['qntySPetrol'];
			$qntyDiesel = $_POST['qntyDiesel'];
			$qntySDiesel = $_POST['qntySDiesel'];

			$model = new Stocks_model();
			$model->insertEveningStock($readingPetrol,$qntyPetrol,$readingSPetrol,$qntySPetrol,$readingDiesel,$qntyDiesel,$readingSDiesel,$qntySDiesel);

			$model->updateTank($qntyPetrol,$qntySPetrol,$qntyDiesel,$qntySDiesel);
				
			echo "DONE";				
			
		}


		/* 
		*end for fuel calculation functions
		*/
		//returns the stockgraph 
		public function stockgraph(){
			$this->view->render('stocks/stockgraph',false);
		}
		/*
		* renders tanks template
		*/
		public function tank_stocks(){
			$this->view->render('stocks/tanks',false);
		}
		//pumpreadings index page
		public function pump_readings(){
			$this->view->render('stocks/pump/index',false);
		}
		//daily reading of pumps
		public function daily_readings(){
			$this->view->render('stocks/pump/daily_readings',false);
		}
		//inserting pump readings
		public function insertPumpReadings(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$pumpNos = array();
			for($a=1;$a<=10;$a++){
				$pumpNos[$a] = $_POST[$a];
			}
			if($model->insertPumpReadings($pumpNos)){
				echo "Success";
			}
			else{
				echo "Failed";
			}
		}
		//editing previous pump readings
		public function previousEntries(){
			$this->view->render('stocks/pump/previousEntries',false);	
		}
		public function editPumpReading(){
			$id = $_POST['Id'];
			$reading = $_POST['reading'];
			$date = $_POST['date'];
			$date = date("Y-m-d", strtotime($date));
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$model->editPumpReading($id,$reading,$date);
		}
		//loadPreviousentries of pump readings
		public function loadPumpReadings(){
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			$id = $_GET['pumpno'];			
			echo json_encode($model->loadPumpReadings($id));
		}
		//removes pump readings 
		public function removePumpReading(){
			require 'models/Stocks_model.php';
			$id = $_POST['ID'];
			$model = new Stocks_model();
			if($model->removePumpReading($id)){
				echo "Success";
			}
			else{
				echo "Failed";
			}
		}
		//returns statuses of pumps
		public function statuses(){
			$this->view->render('stocks/pump/statuses',false);	
		}
		//return no of pumps 
		public function loadNoOfPumps(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			echo json_encode($model->loadNoOfPumps());
		}
		//add pumps
		public function addPump(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$no = $_GET['no'];
			$fuelType = $_GET['fuelType'];
			$model->addPump($no,$fuelType);
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
//			$name = $_GET['nm'];
			$value = $_POST['key'];
			
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			$result = $model->searchLube($value);

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
			$supplier = $_POST['supplier'];

			$model = new Stocks_model();
			if($model->addLubricant($prdName,$prdPrice,$prdQnty,$supplier)){
				echo "Success";
			}
			else{
				echo "Nah";
			}
		}

		/**
		* returns JSON with lubricant suppliers
		*
		**/
		public function getLubricantSuppliers(){
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			echo json_encode($model->getLubricantSuppliers());
		}
		//renders editing in lubricants 
		public function edit_lube(){
			$this->view->render('stocks/lubricant/edit_lube',false);	
		}
		public function loadLubricants(){
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			echo json_encode($model->loadLubricants());
		}
		/**
		* Edit lubricant entries 
		* @returns boolean
		*/
		public function editLube(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			$qnty = $_POST['qnty'];
			$supplier = $_POST['supplier'];
			
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			if($model->editLube($id,$name,$price,$qnty,$supplier)){
				return true;
			}
			else{
				return false;
			}
			
		}
		public function removeLubricant(){
			require 'models/Stocks_model.php';
			$id = $_POST['ID'];
			$model = new Stocks_model();
			$model->removeLubricant($id);
			echo "Done";
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
		public function add_supplier(){
			$this->view->render('stocks/suppliers/add',false);
		}
		/*
		* Adding suppliers 
		* renders adding page
		* @returns the status of processing | static page |
		*/
		public function checkSupplier(){
			$name = $_POST['name'];
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			echo json_encode($model->checkSupplier($name));
		}
		public function checkLubricantProduct(){
			$name = $_POST['name'];
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			echo json_encode($model->checkLubricantProduct($name));
		}
		public function addSupplier(){
			$name = $_POST['sup-name'];
			$email = $_POST['sup-email'];
			$contact = $_POST['sup-contact'];
			$fuel = $_POST['fuel-sup'];
			$lubricant = $_POST['lubricant-sup'];
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			
			if($fuel == "on"){
				$fuel = "fuel";
			// 	if($model->addSupplier($name,$fuel,$email,$contact)){
			// //		return true;
			// 	}
			// 	else{
			// //		return false;
			// 	}	
				$model->addSupplier($name,$fuel,$email,$contact);
			}
			else if($lubricant == "on"){
				$lubricant = "lubricant";
				$model->addSupplier($name,$lubricant,$email,$contact);
				// if($model->addSupplier($name,$lubricant,$email,$contact)){
				// 	return true;
				// }
				// else{
				// 	return false;
				// }
			}
			else {
				$fuel = "fuel";
				$lubricant = "lubricant";
				$model->addSupplier($name,$fuel,$email,$contact);
				$model->addSupplier($name,$lubricant,$email,$contact);
			}
			
		}
		/*
		* Adding suppliers interacting with the model
		* @returns null
		*/
		public function edit_suppliers(){
			$this->view->render('stocks/suppliers/edit',false);	
		}
		/*
		* Editing suppliers info interacting with the model
		* @returns boolean
		*/
		public function editSupplier(){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			if($model->editSupplier($id,$name,$email,$contact)){
				echo "Success";
			}
		}
		public function emailSupplier(){
			$to = $_POST['email'];
			$subject = $_POST['subject'];
			$txt = $_POST['message'];
			$txt = wordwrap($txt,70);
			
            require 'models/Stocks_model.php';
            $model = new Stocks_model();
            $mailalert = $model->SendMail($to, $txt);
			
		}
		public function loadLubricantEditData(){
			$va = "he";
			return json_encode($va);
		}
		public function loadLubricantsSuppliers(){
			require 'models/Stocks_model.php';

			$model = new Stocks_model();
			echo json_encode($model->loadLubricantsSuppliers());
		}
		public function removeLubricantSupplier(){
			require 'models/Stocks_model.php';
			$id = $_POST['ID'];
			$model = new Stocks_model();
			$model->removeLubricantSupplier($id);
			echo "Done";
		}
		public function history(){
			$this->view->render('stocks/stockgraph',false);
		}
		//Dashboard functions start here
		// public function stockDashboard(){
		// 	$this->view->render('stocks/dashboard/index',false);	
		// }
		// public function customizePumps(){
		// 	$this->view->render('stocks/dashboard/customizePumps',false);	
		// }
		public function pumpStatuses(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			echo json_encode($model->pumpStatuses());
		}
		//renders pumpscards for online and offline pumps
		public function pumpCardOnline(){
			$this->view->render('stocks/pump/pumpcardOnline',false);
		}
		public function pumpCardOffline(){
			$this->view->render('stocks/pump/pumpcardOffline',false);
		}
		public function updatePumpStatus(){
			require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$id = $_GET['id'];
			$status = $_GET['status'];
			$model->updatePumpStatus($id,$status);
		}
        public function report(){
        	$this->view->render('stocks/reports/index',false);
        }
        //stock report 
        public function stockreport(){
        	include 'views/stocks/reports/stockreport.php';
        }        
        public function displayStocksReport(){
        	$this->view->render('stocks/reports/stocksDisplay',false);
        }
        public function retrieveStocksReport(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$yy = $_GET['yy'] . "%";
			$modelStocks = $model->retrieveStockReport($yy);
        	
   			include 'views/stocks/reports/stocksReportSpec.php';
        }
        //pump report 
        public function pumpreport(){
        	include 'views/stocks/reports/pumpreport.php';
        }
        public function displayPumpReport(){
        	$this->view->render('stocks/reports/pumpsDisplay',false);
        }
        public function retrievePumpReport(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$yy = $_GET['yy'] . "%";
			$modelStocks = $model->retrievePumpReport($yy);
        	
   			include 'views/stocks/reports/pumpReportSpec.php';
        }
        //lubricant report
        public function lubricantreport(){
        	include 'views/stocks/reports/lubricantreport.php';	
        }
        public function displayLubricantReport(){
        	include 'views/stocks/reports/pumpsDisplay';
        }
        public function retrieveLubricantReport(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$modelStocks = $model->retrieveLubricantReport();
        	
   			include 'views/stocks/reports/lubricantReportSpec.php';
        }
        //suppliers report
        public function supplierreport(){
        	include 'views/stocks/reports/supplierreport.php';	
        }
        public function displaySupplierReport(){
        	$this->view->render('stocks/reports/supplierDisplay',false);
        }
        public function retrieveSupplierReport(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
			$modelStocks = $model->retrieveSupplierReport();
        	
   			include 'views/stocks/reports/supplierReportSpec.php';
        }
        //renders graph tab
        public function graphs(){
        	//echo "done";
        	$this->view->render('stocks/reports/graphs/index',false);
        }
        //stockgraph
        public function stockGraphs(){
        	$this->view->render('stocks/reports/graphs/stock',false);
        }
        public function getStockGraphComparison(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
		 	echo json_encode($model->getStockGraphComparison());
        }
        //pump graph
        public function pumpGraph(){
        	$this->view->render('stocks/reports/graphs/pump',false);
        }
        public function calcPumpReadingForMonth(){
        	require 'models/Stocks_model.php';
			$model = new Stocks_model();
		 	echo json_encode($model->calcPumpReadingForMonth());
        }
	}
?>
