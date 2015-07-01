<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Package Update Form</title>
		<meta charset="utf-8">
		
	</head>
	
	<body>
		<div class="container">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Update package</strong></h3>
					
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="control-group">
						<label class="control-label">Name</label>
							<div class="controls">
								<input type="text" name="name" placeholder="Name" value="<?php echo ($package->name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Description</label>
							<div class="controls">
								<input type="text" name="description" placeholder="Description" value="<?php echo ($package->description); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Price</label>
							<div class="controls">
								<input type="text" name="price" placeholder="Price" value="<?php echo ($package->price); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Update</button>
                                                <a class="btn btn-default" id="packages" href="" >Back</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<!--<script type="text/javascript">
		    $('#packages').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                   
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
                
        </script>-->