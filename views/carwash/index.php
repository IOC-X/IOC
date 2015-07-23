	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="carwash/packages" class="btn btn-flat btn-primary" id="packages">
		        <i class="glyphicon glyphicon-briefcase"></i> Packages</a>
                        <a href="carwash/regular_customers" class="btn btn-flat btn-primary" id="regular_customers">
		        <i class="glyphicon glyphicon-user"></i> Regular Customers</a>
                        <a href="carwash/transactions" class="btn btn-flat btn-primary" id="transactions">
		        <i class="glyphicon glyphicon-plus"></i> Transactions</a>
                        <a href="carwash/report" class="btn btn-flat btn-primary" id="report">
		        <i class="glyphicon glyphicon-tasks"></i> Report</a>
		    </div>
		    <script type="text/javascript">
		    $('#packages').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                        
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                        
                });
	        });
                
               
                
                $('#transactions').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                });
	        });
                $('#regular_customers').click(function(e2){
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
		</div>
	</div>