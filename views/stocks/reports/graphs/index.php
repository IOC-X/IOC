<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-flat btn-success" id="stockGraphs">Today's Fuel Comparison</a>
    <a href="javascript:void(0)" class="btn btn-flat btn-success" id="pumpGraph">Pump readings</a>
</div>

    <script>
        $('#stockGraphs').click(function(){
            $('#subloader3').load('/IOC/stocks/stockGraphs',function(){
                $('#subloader3').hide();
                $('#subloader3').fadeIn('fast');
            });
        });
        $('#pumpGraph').click(function(){
            $('#subloader3').load('/IOC/stocks/pumpGraph',function(){
                $('#subloader3').hide();
                $('#subloader3').fadeIn('fast');
            });
        });
        $('#lubricantreport').click(function(){
            $('#subloader3').load('/IOC/stocks/lubricantreport',function(){
                $('#subloader3').hide();
                $('#subloader3').fadeIn('fast');
            });
        });
        $('#supplierreport').click(function(){
            $('#subloader3').load('/IOC/stocks/supplierreport',function(){
                $('#subloader3').hide();
                $('#subloader3').fadeIn('fast');
            });
        });
        $('#graphs').click(function(){
            $('#subloader3').load('/IOC/stocks/graphs',function(){
                $('#subloader3').hide();
                $('#subloader3').fadeIn('fast');
            });
        });
    </script>
<br/>
<div id="subloader3">

</div>
