<div data-role="page">
    <h1 class="text-center">Carwash Packages</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
                                                        <th>Time</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($packages as $package) : ?>						
							<tr>
								<td><?php echo ($package->name);  ?></td>
								<td><?php echo ($package->description); ?></td>
                                                                <td><?php echo ($package->time)." Hours";  ?></td>
								<td><?php echo "Rs.".($package->price); ?></td>
								<td>
                                                                        <a class="btn btn-info" id="view_package" href="carwash/view_package/<?php echo $package->id; ?>">View</a>
                                                                        <a class="btn btn-success" id="edit_package" href="carwash/edit_package/<?php echo $package->id; ?>">Update</a>
                                                                        <a class="btn btn-danger" id="delete_package" href="carwash/delete_package/<?php echo $package->id; ?>">Delete Package</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
    <a class="btn btn-primary" id="create_package" href="carwash/create_package/">Add Package</a>     
	</div>
<script type="text/javascript">
// $('#view_package').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                        $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                        //$('#subloader').empty();
//                       
//                });
//	        });
                
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
                $('#create_package').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');
                });
	        });
          </script>