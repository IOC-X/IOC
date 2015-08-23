
 <div class="btn-group btn-group-justified">
    <a href="lube_service/create_package" class="btn btn-primary" id="create_package">Add Packages</a>
    <a href="lube_service/EditPackageEntries" class="btn btn-primary" id="EditPackageEntries">Edit Package Entries</a>
<!--    <a href="javascript:void(0)" class="btn btn-primary" id="lu_pac_custom">Custom</a>-->
   </div> 

<script>
        $('#lu_pac_gold').click(function(){
            $('#subloader2').load('/IOC/lube_service/lu_pac_gold',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        
        $('#lu_pac_silver').click(function(){
            $('#subloader2').load('/IOC/lube_service/lu_pac_silver',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
//        
        
        $('#lu_pac_custom').click(function(){
            $('#subloader2').load('/IOC/lube_service/lu_pac_custom',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
       
    $('#EditPackageEntries').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/EditPackageEntries', function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
              
    $('#create_package').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/create_package', function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

    
</script>
        
        
    
<br/>
<div id="subloader2">

</div>