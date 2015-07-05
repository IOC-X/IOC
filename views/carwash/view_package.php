<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>View Package</title>
		<meta charset="utf-8">
<!--<link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">-->
	</head>
	
        <body> 
            <?php
            //include_once 'C:\wamp\www\IOC\controllers\carwash.php';
           // $model = new Carwash_model();
            //$id='4';
            //$id=(isset($_POST['id']) ? $_POST['id'] : null);
           // echo $id;
          // $package = $model->selectPackgeById($id); 
            ?>
		<div class="container col-lg-6">
			<div class="span10 offset 1">
				<div class="row">
					<h3><strong>View Package</strong></h3>
				</div>

				<div class="form-horizontal col-lg-6">
					<div class="control-group">
						<label class="control-label">Name:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-center">
									<?php echo ($package->name); ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Description:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-center">
									<?php echo $package->description; ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label text-center">Price:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-center">
									<?php echo "Rs.".$package->price; ?>
								</label>
							</div>
					</div>
					<br>
					
			</div>
		</div>
	</body>
</html>