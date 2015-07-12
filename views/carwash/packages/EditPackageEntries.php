<div data-role="page">
    
    <h1 class="text-center text-success">Carwash Packages</h1>
            <table class="table table-striped table-bordered">
		
                    <thead>
						<tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
						</tr>
                    </thead>
                    <tbody>
						<?php  foreach ($packages as $package) : ?>						
							<tr>
                                    <td><?php echo ($package->id); ?></td>
                                    <td><?php echo ($package->name); ?></td>
                                    <td><?php echo ($package->description); ?></td>
                                    <td><?php echo ($package->time) . " Hours"; ?></td>
                                    <td><?php echo "Rs." . ($package->price); ?></td>
								<td>
                                    <a id="edit_package" href="carwash/edit_package/<?php echo ($package->id); ?>"> <i class="mdi-content-create"></i> </a>                                                                      
								</td>
                                <td>
                                     <a id="delete_package" href="carwash/delete_package/<?php echo $package->id; ?>"> <i class="mdi-content-remove-circle"></i></a>
                                </td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
     
	</div>
<script type="text/javascript">

                
                $('#edit_package').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id+'/'+<?php echo ($package->id); ?>,function(){
                    
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
            
//  var id;
//  function colvalue(row){
//           var x=row.cells;
//           id = x[0].innerHTML;
//           id = id.toString();
//                 
//$.post("carwash/editPackage",{ id:id},
//                        function(data) {
//                        //alert(data);
//                        
//                    }   );
// console.log(id);
//       }
// 
//function LoadEdit()
//{
//var xmlhttp;
//if (window.XMLHttpRequest)
//  {// code for IE7+, Firefox, Chrome, Opera, Safari
//  xmlhttp=new XMLHttpRequest();
//  }
//
//xmlhttp.onreadystatechange=function()
//  {
//  if (xmlhttp.readyState==4 && xmlhttp.status==200)
//    {
//    document.getElementById("subloader").innerHTML=xmlhttp.responseText;
//    }
//  }
//xmlhttp.open("GET","carwash/edit_package/"+id  ,true);
//xmlhttp.send();
//console.log("edit");
//}

 
          </script>