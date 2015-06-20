	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="stocks/morning_stocks" class="btn btn-flat btn-primary" id="morning_stocks">
		        <i class="mdi-action-perm-media"></i>Morning stocks</a>
		        <a href="stocks/evening_stocks" class="btn btn-flat btn-primary" id="evening_stocks">
		        <i class="mdi-maps-local-cafe"></i>Evening stocks</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-action-assessment"></i>History</a>
		    </div>
		    <script type="text/javascript">
		    $('#morning_stocks').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/stocks/' + id,function(){
                    //console.log('morning_stock !');
                });
	        });
	        </script>
		</div>
	</div>