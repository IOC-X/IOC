    <div class="btn-group btn-group-justified">
    <a href="lube_service/add_customer/" class="btn btn-primary" id="add_customer"><i class="mdi-social-group-add"></i>  Add Customer</a>
    <a href="lube_service/EditCustomerEntries/" class="btn btn-primary" id="EditCustomerEntries"><i class="glyphicon glyphicon-edit"></i>  Edit Entries</a>
<!--    <a href="carwash/searchCustomer/" class="btn btn-primary" id="searchCustomer"><i class="glyphicon glyphicon-zoom-in"></i>  Search Customers</a>-->

    </div>

<div id="subloader2">
    
</div>

<script type="text/javascript">
    
              $('#EditCustomerEntries').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/lube_service/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
               
               
               
                $('#add_customer').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/lube_service/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
            
           
          </script>
          
          