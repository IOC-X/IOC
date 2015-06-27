	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="carwash/packages" class="btn btn-flat btn-primary" id="packages">
		        <i class="mdi-action-perm-media"></i>Packages</a>
		        <a href="carwash/packages" class="btn btn-flat btn-primary" id="transactions">
		        <i class="mdi-maps-local-cafe"></i>Transactions</a>
		        <a href="carwash/packages" class="btn btn-flat btn-primary" id="regular_customers">
		        <i class="mdi-action-assessment"></i>Regular Customers</a>
                        <a href="carwash/packages" class="btn btn-flat btn-primary" id="report">
		        <i class="mdi-action-assessment"></i>Report</a>
		    </div>
		    <script type="text/javascript">
		    $('#packages').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    //console.log('morning_stock !');
                });
	        });
	        </script>
		</div>
	</div>