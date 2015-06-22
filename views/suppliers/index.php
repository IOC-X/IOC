<div>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
                <a href="suppliers/supplier_details" class="btn btn-flat btn-primary btn-lg" id="supplier_details">
                <i class="glyphicon glyphicon-user"></i>  Supplier Details </a>
                
                <a href="suppliers/add_transaction" class="btn btn-flat btn-primary btn-lg" id="add_transaction">
                <i class="glyphicon glyphicon-plus"></i>  Add Transactions </a>
                
                <a href="suppliers/history" class="btn btn-flat btn-primary btn-lg" id="history">
                <i class="glyphicon glyphicon-stats"></i>  History </a>                       
            </div>

            <script type="text/javascript">
            $('#supplier_details').click(function(e2){
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/suppliers/' + id,function(){
                    
                });
            });
            $('#add_transaction').click(function(e2){
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/suppliers/' + id,function(){
                    
                });
            });
            $('#history').click(function(e2){
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/suppliers/' + id,function(){
                    
                });
            });
            </script>
        </div>
               
    </div>
 <marquee behavior="scroll" direction="left">Please add the supplier details first..</marquee>