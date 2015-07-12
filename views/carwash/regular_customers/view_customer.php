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
		<div class="container col-lg-6">
			<div class="span10 offset 1">
				<div class="row">
					<h3><strong>View Customer</strong></h3>
				</div>

				<div class="form-horizontal col-lg-6">
					<div class="control-group">
						<label class="control-label">Customer ID:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-center">
									<?php echo $customer->cust_id; ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Name:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-center">
									<?php echo $customer->name; ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">NIC:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-info">
									<?php echo $customer->nic; ?>
								</label>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label">Address:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-info">
									<?php echo $customer->address; ?>
								</label>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label">Contact:</label>
							<div class="panel panel-default">
								<label class="checkbox label-info text-info">
									<?php echo $customer->contact; ?>
								</label>
							</div>
					</div>
					<br>
					<div class="form-actions">
						<a class="btn btn-default btn-raised" href="">Back</a>
					</div>
			</div>
		</div>
	</body>
</html>