<!DOCTYPE html>
<html>
<head>
	<title>IOC-Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>login.css">
	
</head>
<body>
	<form class="form-horizontal" method="post" action="login/checkin">
	<div class="login-container">
		<h2>IOC</h2>
		<div class="form-group">
            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-2">
                <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-2">
                <input type="text" class="form-control" id="inputPassword" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        
	</div>
	</form>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="<?php echo CSS ?>dist/js/ripples.min.js"></script>
        <script src="<?php echo CSS ?>dist/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
</body>
</html>