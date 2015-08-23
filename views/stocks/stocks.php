<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="morning_reading"><i class="mdi-action-dashboard"></i>Morning readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="evening_reading"><i class="mdi-action-dns"></i>Evening readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="view_orders"><i class="mdi-action-list"></i>Orders</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="tank_stocks"><i class="mdi-action-view-headline"></i>Tank stocks</a>
</div>
    <script>
        $('#morning_reading').click(function(){
            $('#subloader2').load('/IOC/stocks/morning_reading',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
                delete window.petrol;
                delete window.spetrol;
                delete window.diesel;
                delete window.sdiesel;
            });
        });
        $('#evening_reading').click(function(){
            $('#subloader2').load('/IOC/stocks/evening_reading',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#view_orders').click(function(){
            $('#subloader2').load('/IOC/stocks/view_orders',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#tank_stocks').click(function(){
            $('#subloader2').load('/IOC/stocks/tank_stocks',function(){
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
