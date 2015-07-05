	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="stocks/stocks" class="btn btn-flat btn-primary" id="stocks">
		        <i class="mdi-action-perm-media"></i>Stocks</a>
		        <a href="stocks/pump_readings" class="btn btn-flat btn-primary" id="pump_readings">
		        <i class="mdi-maps-local-cafe"></i>Pump readings</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-action-assessment"></i>Lubricant Store</a>
		        <a href="stocks/evening_stocks" class="btn btn-flat btn-primary" id="evening_stocks">
		        <i class="mdi-maps-local-cafe"></i>Suppliers</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-action-assessment"></i>History</a>
		    </div>
		    <script type="text/javascript">
		    $('#stocks').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
	        $('#pump_readings').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
	        </script>
		</div>
	</div>
