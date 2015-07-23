
    <div class="btn-group btn-group-justified">
    <a href="carwash/create_package/" class="btn btn-primary" id="create_package">Add Package</a>
    <a href="carwash/EditPackageEntries/" class="btn btn-primary" id="EditPackageEntries">Edit Entries</a>
    </div>
<div data-role="page">
    <h1 class="text-center text-success">Carwash Packages</h1>
            <table class="table table-striped table-bordered table-hover">
		
                    <thead>
						<tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Price</th>
                            
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($packages as $package) : ?>						
                        <tr onmouseover="colvalue(this);">
                                    <td><?php echo ($package->id); ?></td>
                                    <td><?php echo ($package->name); ?></td>
                                    <td><?php echo ($package->description); ?></td>
                                    <td><?php echo ($package->time) . " Hours"; ?></td>
                                    <td><?php echo "Rs." . ($package->price); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
   
	</div>
<script type="text/javascript">
               
                $('#EditPackageEntries').click(function(e2){
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
                $('#create_package').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');
                });
	        });
            
            var idValue;
            function colvalue(row){
                     var x=row.cells;
                     idValue = x[0].innerHTML;
                     idValue = idValue.toString();

                 }
       
            $.post("carwash/view_package/",
            {id:idValue},
            function(data, textStatus, jqXHR)
            {
                //data : Data from server
            });
 
 $('#view_package').click(function(e2){
	        	e2.preventDefault();
	        	//var id = $(this).attr('id');
                $('#subloader').load('carwash/view_package/' + idValue,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                       console.log('Success !');
                });
	        });
          </script>