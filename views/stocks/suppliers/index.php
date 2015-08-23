<div class="btn-group btn-group-justified">
    <!-- <a href="javascript:void(0)" class="btn btn-primary" id="search_suppliers">Search</a> -->
	<a href="javascript:void(0)" class="btn btn-primary" id="add_supplier"><i class="mdi-action-account-box"></i>Add New Supplier</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="edit_suppliers"><i class="mdi-action-view-module"></i>Edit entries</a>
</div>
	<script>
        $('#search_suppliers').click(function(){
            $('#subloader2').load('/IOC/stocks/search_suppliers',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#add_supplier').click(function(){
            $('#subloader2').load('/IOC/stocks/add_supplier',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#edit_suppliers').click(function(){
        	$('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<div id="subloader2">

</div>