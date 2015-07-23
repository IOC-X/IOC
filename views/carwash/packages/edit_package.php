
		<title>Package Update Form</title>
		<meta charset="utf-8">	
	<body>
		<div class="container col-lg-10">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Update package</strong></h3>
					
				</div>

                <form id="form" class="form-horizontal col-lg-5" action="carwash/editPackage" method="post">
					
                    <div class="control-group">
						<label class="control-label">ID</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="ID" id="ID" placeholder="ID" readonly="readonly" value="<?php echo ($package->id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label">Name</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="name" id="name" placeholder="Name" value="<?php echo ($package->name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Description</label>
							<div class="controls panel panel-default">
                                                            <textarea  name="description" id="description" class="form-control floating-label" placeholder="Description" rows="4" cols="50"> <?php echo ($package->description); ?></textarea>
								<span class="help-inline"></span>
							</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label">Time</label>
							<div class="controls panel panel-default">
                                <input type="number" class="form-control floating-label" name="time" id="time" placeholder="Time" value="<?php echo ($package->time); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Price</label>
							<div class="controls panel panel-default">
                                <input type="number" class="form-control floating-label" name="price" id="price" placeholder="Price" value="<?php echo ($package->price); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						
						<button type="submit"  name="form-submitted" id="form-submitted" class="btn btn-success btn-raised">Update</button>
                        
					</div>
				</form>
			</div>
		</div>
	</body>


