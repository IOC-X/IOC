	<div>
		<div class="panel panel-warning">
		    <div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		    <div class="panel-body">
		        <a href="assets/equipments" class="btn btn-flat btn-primary" id="equipments">
                            <i class="mdi-action-perm-media"></i>Equipments</a>
		        <a href="assets/supplier" class="btn btn-flat btn-primary" id="supplier">
		        <i class="mdi-maps-local-cafe"></i>Supplier</a>
		        <a href="stocks/history" class="btn btn-flat btn-primary" id="history">
		        <i class="mdi-action-assessment"></i>Report</a>
		        <a href="assets/database_backup" class="btn btn-flat btn-primary" id="database_backup">
		        <i class="mdi-maps-local-cafe"></i>Backup</a>
		        
		    </div>
                      <script type="text/javascript">
		    $('#equipments').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/assets/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
                 $('#supplier').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/assets/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
                     $('#database_backup').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/assets/' + id,function(){
                    //console.log('morning_stock !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
                
	        </script>

                    