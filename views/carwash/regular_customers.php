    <div class="btn-group btn-group-justified">
    <a href="carwash/add_customer/" class="btn btn-primary" id="add_customer"><i class="glyphicon glyphicon-user"></i>  Add Customer</a>
    <a href="carwash/EditCustomerEntries/" class="btn btn-primary" id="EditCustomerEntries"><i class="glyphicon glyphicon-edit"></i>  Edit Entries</a>
    <a href="carwash/searchCustomer/" class="btn btn-primary" id="searchCustomer"><i class="glyphicon glyphicon-zoom-in"></i>  Search Customers</a>

    </div>
<div id="subloader2">
    <h1 class="text-center text-success">Regular Customers</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
                        <tr>
                            <th class="text-center">Customer ID</th>
							<th class="text-center">Name</th>
							<th class="text-center">NIC</th>
							<th class="text-center">Address</th>
                            <th class="text-center">Contact</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Date Registered</th>

						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($customers as $customer) : ?>						
							<tr>
                                    <td><?php echo ($customer->cust_id); ?></td>
                                    <td><?php echo ($customer->name); ?></td>
                                    <td><?php echo ($customer->nic); ?></td>
                                    <td><?php echo ($customer->address); ?></td>
                                    <td><?php echo ($customer->contact); ?></td>
                                     <td><?php echo ($customer->email); ?></td>
                                    <td><?php echo ($customer->date); ?></td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
        
	</div>
<script type="text/javascript">
    
              $('#EditCustomerEntries').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
               
               
               
                $('#add_customer').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
            
            $('#searchCustomer').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
          </script>