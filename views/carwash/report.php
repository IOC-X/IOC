	<div class="btn-group btn-group-justified">
    <a href="carwash/CustomerReport" class="btn btn-primary" id="CustomerReport">Customer Registrations</a>
    <a href="carwash/packageReport" class="btn btn-primary" id="packageReport">Package Usage</a>
    </div>
		    <script type="text/javascript">
		    $('#CustomerReport').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                        
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                        
                });
	        });
                
               
                
                $('#packageReport').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                });
	        });
                
                $('#report').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                });
	        });
	        </script>
		