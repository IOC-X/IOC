	<div>
		<div class="panel panel-info">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="stocks/customizePumps" class="btn btn-flat btn-primary" id="customizePumps">
		        <i class="mdi-av-recent-actors"></i>Customize Pumps</a>
		        <a href="stocks/lubricant" class="btn btn-flat btn-primary" id="lubricant">
		        <i class="mdi-action-assessment"></i>Lubricant Store</a>
		        <a href="stocks/suppliers" class="btn btn-flat btn-primary" id="suppliers">
		        <i class="mdi-maps-local-cafe"></i>Suppliers</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-action-assessment"></i>History</a>
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
	        $('#customizePumps').click(function(e2){
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
