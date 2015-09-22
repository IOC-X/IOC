<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="stockreport"><i class="mdi-action-turned-in"></i>Stocks</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="pumpreport"><i class="mdi-action-assignment"></i>Pump readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="lubricantreport"><i class="mdi-action-note-add"></i>Lubricant sales</a>
</div>

    <script>
        $('#stockreport').click(function(){
            $('#subloader2').load('/IOC/stocks/stockreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#pumpreport').click(function(){
            $('#subloader2').load('/IOC/stocks/pumpreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#lubricantreport').click(function(){
            $('#subloader2').load('/IOC/stocks/lubricantreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<br/>
<div id="subloader2">

</div>