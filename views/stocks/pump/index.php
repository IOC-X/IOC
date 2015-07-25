<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="daily_readings">Daily readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="statuses">Pump statuses</a>
</div>

    <script>
        $('#daily_readings').click(function(){
            $('#subloader2').load('/IOC/stocks/daily_readings',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#statuses').click(function(){
            $('#subloader2').load('/IOC/stocks/statuses',function(){
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
