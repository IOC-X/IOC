<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Package Form</title>
		<meta charset="utf-8">
		 <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Create a Package</strong></h3>
					
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="control-group">
						<label class="control-label">Name</label>
							<div class="controls">
								<input type="text" name="name" placeholder="Name" value="<?php echo ($name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Description</label>
							<div class="controls">
								<input type="text" name="description" placeholder="Description" value="<?php echo ($description); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label">Time</label>
							<div class="controls">
								<input type="text" name="time" placeholder="Time" value="<?php echo ($time); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Price</label>
							<div class="controls">
								<input type="text" name="price" placeholder="Price" value="<?php echo ($price); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Create</button>
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>