
<div>
    <h1 class="text-center text-success">Regular Customers</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
							<th>Customer ID</th>
							<th>Name</th>
							<th>NIC</th>
							<th>Address</th>
                            <th>Contact</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
								<td>
                                                                    <a id="view_customer" href="carwash/view_customer/<?php echo $customer->cust_id; ?>"><i class="mdi-content-create"></i></a>
                                </td>
                                <td>
                                                                        <a id="delete_customer" href="carwash/delete_customer/<?php echo $customer->cust_id; ?>"><i class="mdi-content-remove-circle"></i></a>
								</td>

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