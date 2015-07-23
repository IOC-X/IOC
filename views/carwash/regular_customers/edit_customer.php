
		<title>Customer Update Form</title>
		<meta charset="utf-8">	
	<body>
		<div class="container col-lg-10">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Update Customer Details</strong></h3>
					
				</div>

                <form id="form" class="form-horizontal col-lg-5" action="carwash/editCustomer" method="post">
					
                    <div class="control-group">
						<label class="control-label">ID</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="ID" id="ID" placeholder="Customer Id" readonly="readonly" value="<?php echo ($customer->cust_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label">Customer Name</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="name" id="name" placeholder="Customer Name" value="<?php echo ($customer->name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">NIC</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="nic" id="nic" placeholder="Customer NIC" value="<?php echo ($customer->nic); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label">Address</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="address" id="address" placeholder="Customer Address" value="<?php echo ($customer->address); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Contact</label>
							<div class="controls panel panel-default">
                                <input type="number" class="form-control floating-label" name="contact" id="contact" placeholder="Contact Number" value="<?php echo ($customer->contact); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						
						<button type="submit"  name="form-submitted" id="form-submitted" class="btn btn-success btn-raised">Update Customer</button>
                        
					</div>
				</form>
			</div>
		</div>
	</body>


