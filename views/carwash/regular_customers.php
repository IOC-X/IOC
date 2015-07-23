    <div class="btn-group btn-group-justified">
    <a href="carwash/add_customer/" class="btn btn-primary" id="add_customer">Add Customer</a>
    <a href="carwash/EditCustomerEntries/" class="btn btn-primary" id="EditCustomerEntries">Edit Entries</a>
    </div>
<div>
    <h1 class="text-center text-success">Regular Customers</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
                        <tr>
                            <th class="text-center">Customer ID</th>
							<th class="text-center">Name</th>
							<th class="text-center">NIC</th>
							<th class="text-center">Address</th>
                            <th class="text-center">Contact</th>
<!--                            <th>Action</th>-->
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
<!--								<td>
                                                                    <a class="btn btn-info" id="view_customer" href="carwash/view_customer/<?php echo $customer->cust_id; ?>">View</a>
                                                                       
                                                                        <a class="btn btn-danger" id="delete_customer" href="carwash/delete_customer/<?php echo $customer->cust_id; ?>">Delete Customer</a>
								</td>-->

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
        
	</div>
<script type="text/javascript">
// $('#view').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                    $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                });
//	        });
//                
              $('#EditCustomerEntries').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
//                
//               
//                
                $('#add_customer').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
          </script>