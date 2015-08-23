	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="stocks/stocks" class="btn btn-flat btn-primary" id="stocks">
		        <i class="mdi-action-trending-up"  style="margin-right:10px"></i>Stocks</a>
		        <a href="stocks/pump_readings" class="btn btn-flat btn-primary" id="pump_readings">
		        <i class="mdi-image-tune" style="margin-right:10px"></i>Pump readings</a>
		        <a href="stocks/lubricant" class="btn btn-flat btn-primary" id="lubricant">
		        <i class="mdi-notification-drive-eta" style="margin-right:10px"></i>Lubricant Store</a>
		        <a href="stocks/suppliers" class="btn btn-flat btn-primary" id="suppliers">
		        <i class="mdi-maps-directions-bike" style="margin-right:10px"></i>Suppliers</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-maps-layers" style="margin-right:10px"></i>Report</a>
		    </div>
		    <script type="text/javascript">
		    function hashCheck(url){
		    	var hashURL = url.split('-');
		    	//if(typeof hashURL[1] == 'string'){
		    		return hashURL[1];
		    	//}
		    }
		    $('#stocks').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/stocks/" + id;
                });
	        });
	        $('#pump_readings').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/stocks/" + id;
                });
	        });
	        $('#lubricant').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/stocks/" + id;
                });
	        });
	        $('#suppliers').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/stocks/" + id;
                });
	        });
	       	$('#history').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/stocks/" + id;
                });
	        });	        
	        </script>
		</div>
	</div>
