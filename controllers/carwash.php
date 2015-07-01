<?php 
include_once '/models/Carwash_model.php';
	class Carwash extends Controller{
            public function __construct(){
			parent::__construct();
                        
		}
		public function index(){
			$this->view->render('carwash/index',false);
		}
		public function packages(){
                        $model = new Carwash_model();
                        $packages= $model->selectAllpackages();
                    
			//$this->view->render('carwash/packages',false);
                        include '/views/carwash/packages.php';
		}
                public function transactions(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/transactions',false);
		}
                public function regular_customers(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/regular_customers',false);
		}
                public function report(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('carwash/report',false);
		}
                
                public function edit($id=false){
              //  $this->view->render('carwash/edit',false);
                    $model = new Carwash_model();
                    $name   = '';
		$description  = '';
		$price = '';
		//$id     = $_GET['id'];
                   $package=$model->selectById($id);
                    $title = 'Edit package';
                    echo $id;
		
                if (isset($_POST['form-submitted'])) 
		{
			$name   = isset($_POST['name'])   ? trim($_POST['name']) 	   : null;
			$email  = isset($_POST['description'])  ? trim($_POST['description']) 	   : null;
			$mobile = isset($_POST['price']) ? trim($_POST['price'])     : null;
			{
                    $packages= $model->edit($name, $description, $price,$id);
                 
                        }
                }
                include '/views/carwash/edit.php';
                }
        }           
	
?>