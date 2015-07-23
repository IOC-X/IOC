<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>View Package</title>
		<meta charset="utf-8">
	</head>
	
        <body> 
		<div class="container col-lg-6">
			<div class="span10 offset 1">
				<div class="row">
					<h3><strong>View Package</strong></h3>
				</div>
<?php ?>
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