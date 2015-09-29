<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="fuel">Fuel</a>
	<a href="javascript:void(0)" class="btn btn-primary" id="lubricants">Lubricants</a>
    <!-- <a href="javascript:void(0)" class="btn btn-primary" id="overall">Overall</a> -->
</div>
	<script>
        $('#fuel').click(function(){
            $('#subloader2').load('/IOC/revenue/fuel',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#lubricants').click(function(){
            $('#subloader2').load('/IOC/revenue/lubricants',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#overall').click(function(){
        	$('#subloader2').load('/IOC/revenue/overall',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<div id="subloader2">

</div>