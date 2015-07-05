<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Package Form</title>
		<meta charset="utf-8">
<!--		 <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">-->
	</head>
	
	<body>
		<div class="container col-lg-8">
			<div class="span">
				<div class="row">
					<h3><strong>Add a Customer</strong></h3>
					
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="control-group panel panel-info">
						<label class="control-label col-lg-4">Customer ID</label>
							<div class="controls col-lg-6 panel">
                                                            <input type="text" class="form-control" name="cust_id" placeholder="Customer ID" value="<?php echo ($cust_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Name</label>
							<div class="controls col-lg-6 panel">
                                                            <input type="text" class="form-control floating-label" name="name" placeholder="Name" value="<?php echo ($name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">NIC</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="nic" placeholder="NIC" value="<?php echo ($nic); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Address</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="address" placeholder="Address" value="<?php echo ($address); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">Contact</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="contact" placeholder="Contact Number" value="<?php echo ($contact); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions col-lg-12 col-lg-offset-8">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success btn-raised ">Create</button>
						
					</div>
				</form>
			</div>
		</div>
	</body>
</html>