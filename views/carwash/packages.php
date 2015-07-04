<div>
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($packages as $package) : ?>						
							<tr>
								<td><?php echo ($package->name);  ?></td>
								<td><?php echo ($package->description); ?></td>
								<td><?php echo ($package->price); ?></td>
								<td>
									<a class="btn btn-info" href="carwash/view/<?php echo $package->id; ?>">View</a>
                                                                        <a class="btn btn-success" id="edit" href="carwash/edit/<?php echo $package->id; ?>">Update</a>
									<a class="btn btn-danger" href="carwash/delete/<?php echo $package->id; ?>">Delete Package</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
               <a class="btn btn-primary" href="carwash/create/">Add Package</a>     
	</div>
<script type="text/javascript">
// $('#edit').click(function(e2){
//	        	e2.preventDefault();
//	        	var id = $(this).attr('id');
//                $('#subloader').load('/IOC/carwash/' + id,function(){
//                    
//                    $('#subloader').hide();
//                	$('#subloader').fadeIn('fast');
//                });
//	        });
//            </script>