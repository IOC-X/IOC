<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="stockreport"><i class="mdi-action-turned-in"></i>Stocks</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="pumpreport"><i class="mdi-action-assignment"></i>Pump readings</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="lubricantreport"><i class="mdi-action-note-add"></i>Lubricant store</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="supplierreport"><i class="mdi-action-note-add"></i>Suppliers</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="graphs"><i class="mdi-action-note-add"></i>Graph-hub</a>
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
        $('#supplierreport').click(function(){
            $('#subloader2').load('/IOC/stocks/supplierreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#graphs').click(function(){
            $('#subloader2').load('/IOC/stocks/graphs',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<br/>
<div id="subloader2">

</div>