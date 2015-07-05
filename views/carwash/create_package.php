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
					<h3><strong>Create a Package</strong></h3>
					
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="control-group panel panel-info">
						<label class="control-label col-lg-4">Name</label>
							<div class="controls col-lg-6 panel">
                                                            <input type="text" class="form-control" name="name" placeholder=" Package Name" value="<?php echo ($name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Description</label>
							<div class="controls col-lg-6 panel">
                                                            <textarea  name="description"class="form-control floating-label" placeholder="Package Description" rows="4" cols="50"><?php echo ($description); ?></textarea>
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">Time</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="time" placeholder="Time in Hours" value="<?php echo ($time); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Price</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="price" placeholder="Package Price" value="<?php echo ($price); ?>">
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