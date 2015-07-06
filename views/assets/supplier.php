<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="add_supplier">Add Supplier</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="view_supplier">View Supplier</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="view_equipments">Update</a>
</div>
    <script>
        $('#add_supplier').click(function(){
            $('#subloader2').load('/IOC/assets/add_supplier',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#view_supplier').click(function(){
            $('#subloader2').load('/IOC/assets/view_supplier',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#cancel_reading').click(function(){
            $('#subloader2').hide();
        });  
    </script>
<br/>
<div id="subloader2">
    
    
</div>