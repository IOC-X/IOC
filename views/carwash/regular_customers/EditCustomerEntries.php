
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
							<tr onmouseover="colvalue(this)">
                                    <td><?php echo ($customer->cust_id); ?></td>
                                    <td><?php echo ($customer->name); ?></td>
                                    <td><?php echo ($customer->nic); ?></td>
                                    <td><?php echo ($customer->address); ?></td>
                                    <td><?php echo ($customer->contact); ?></td>
								<td>
                                <a id="edit_customer" onclick="LoadEditCustomer()"> <i class="mdi-content-create"></i> </a>
                                </td>
                                <td>
                                <a id="delete_customer" href="carwash/delete_customer/<?php echo $customer->cust_id; ?>"> <i class="mdi-content-remove-circle"></i></a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
            </table>
        
	</div>
<script type="text/javascript">
            var id;
            function colvalue(row){
                     var x=row.cells;
                     id = x[0].innerHTML;
                     id = id.toString();
                 }         

            function LoadEditCustomer()
            {
            var xmlhttp;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
              }

            xmlhttp.onreadystatechange=function()
              {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                document.getElementById("subloader").innerHTML=xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","carwash/edit_customer/"+id  ,true);
            xmlhttp.send();
            }           
                $('#add_customer').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
          </script>