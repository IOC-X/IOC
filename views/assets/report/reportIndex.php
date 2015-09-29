<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="equipReport"><i class="mdi-action-description"></i> Equipments</a>
<a href="javascript:void(0)" class="btn btn-primary" id="supplierReport"><i class="mdi-action-view-list"></i> Supplier</a>

</div>

    <script>
        $('#equipReport').click(function(){
          
            $('#subloader2').load('/IOC/assets/equipReport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#supplierReport').click(function(){
          
            $('#subloader2').load('/IOC/assets/supplierReport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });  

        </script>
        
        <br/>
<div id="subloader2">

</div>