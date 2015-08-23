<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="daily_readings"><i class="mdi-action-turned-in"></i>Daily readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="statuses"><i class="mdi-action-settings-power"></i>Pump statuses</a>
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
                $('#loader').fadeOut('slow');
                $('#pump-tabs').fadeOut('slow');
                setTimeout(function(){
                    $('#subloader2').fadeIn('slow');
                },500);
                
            });
        });
        $('#cancel_reading').click(function(){
            $('#subloader2').hide();
        });
    </script>
<br/>
<div id="subloader2">

</div>
