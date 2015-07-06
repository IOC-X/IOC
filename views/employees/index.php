<div>
    
	<div class="panel panel-warning">
		    
			<div class="panel-heading">
		        <h3 class="panel-title"></h3>
		    </div>
		   
		<div class="panel-body">
                    	<a href="employees/database_employees" class="btn btn-flat btn-primary" id="database_employees">
			<i class="mdi-action-description"></i>  Daily Assignment</a>
			
                        <a href="employees/list_employees" class="btn btn-flat btn-primary" id="list_employees">
			<i class="mdi-action-account-circle"></i>  Employees List</a>

			<a href="employees/add_employees" class="btn btn-flat btn-primary" id="add_employees">
			<i class="mdi-social-person-add"></i>  add new employees</a>

			<a href="employees/add_employees" class="btn btn-flat btn-primary" id="add_employees">
			<i class="mdi-notification-event-note"></i>  Shift Management</a>
		</div>



		    <script type="text/javascript">
		    $('#list_employees').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id,function(){
                                 });
	        });
                 $('#add_employees').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id,function(){
                                 });
	        });
                 $('#add_employees').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id,function(){
                                 });
	        });
                 $('#database_employees').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id,function(){
                                 });
	        });
	        </script>

	</div>
</div>


