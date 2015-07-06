<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="add_equipments">Add equipments</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="view_equipments">View equipments</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="view_equipments">Update</a>
</div>
    <script>
        $('#add_equipments').click(function(){
            $('#subloader2').load('/IOC/assets/addequipments',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#view_equipments').click(function(){
            $('#subloader2').load('/IOC/assets/viewequipments',function(){
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