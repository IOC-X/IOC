
 <div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="lu_pac_gold">Gold</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="lu_pac_silver">Silver</a>
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
        
        
        
    </script>
<br/>
<div id="subloader2">

</div>