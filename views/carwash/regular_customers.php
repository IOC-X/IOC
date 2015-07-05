<div>
    <h1 class="text-center">Regular Customers</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
							<th>Customer ID</th>
							<th>Name</th>
							<th>NIC</th>
							<th>Address</th>
                                                        <th>Contact</th>
                                                        <th>Action</th>
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($customers as $customer) : ?>						
							<tr>
								<td><?php echo ($customer->cust_id);  ?></td>
								<td><?php echo ($customer->name); ?></td>
								<td><?php echo ($customer->nic); ?></td>
                                                                <td><?php echo ($customer->address); ?></td>
                                                                <td><?php echo ($customer->contact); ?></td>
								<td>
                                                                    <a class="btn btn-info" id="view" href="carwash/view_customer/<?php echo $customer->cust_id; ?>">View</a>
                                                                       
                                                                        <a class="btn btn-danger" id="delete" href="carwash/delete_customer/<?php echo $customer->cust_id; ?>">Delete Customer</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
    <a class="btn btn-primary" id="create" href="carwash/add_customer/">Add Customer</a>     
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
//                $('#edit').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                    $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                });
//	        });
//                
//                $('#delete').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                    $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                });
//	        });
//                
//                $('#create').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                    $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                });
//	        });
          </script>