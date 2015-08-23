<div class="btn-group btn-group-justified">
    <!--<a href="javascript:void(0)" class="btn btn-primary" id="search_lube">Search</a> -->
	<a href="javascript:void(0)" class="btn btn-primary" id="add_lube"><i class="mdi-action-shopping-cart"></i>Add Products</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="edit_lube"><i class="mdi-action-view-array"></i>Edit entries</a>
</div>
	<script>
        $('#search_lube').click(function(){
            $('#subloader2').load('/IOC/stocks/search_lube',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#add_lube').click(function(){
            $('#subloader2').load('/IOC/stocks/add_lube',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#edit_lube').click(function(){
        	$('#subloader2').load('/IOC/stocks/edit_lube',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<div id="subloader2">

</div>