<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="morning_reading">Morning reading</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="evening_reading">Evening reading</a>
</div>
    <script>
        $('#morning_reading').click(function(){
            $('#subloader2').load('/IOC/stocks/morning_reading',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#evening_reading').click(function(){
            $('#subloader2').load('/IOC/stocks/evening_reading',function(){
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
