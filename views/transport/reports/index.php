<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="emgreport"><i class="mdi-action-turned-in"></i>Emergency Transport</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="lubricantreport"><i class="mdi-action-assignment"></i>Lubricant Transport</a>
</div>

    <script>
        $('#emgreport').click(function(){
            $('#subloader2').load('/IOC/transport/emgreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#lubricantreport').click(function(){
            $('#subloader2').load('/IOC/transport/lubricantreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#lubricantreport').click(function(){
            $('#subloader2').load('/IOC/transport/lubricantreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#supplierreport').click(function(){
            $('#subloader2').load('/IOC/transport/supplierreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#graphs').click(function(){
            $('#subloader2').load('/IOC/transport/graphs',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<br/>
<div id="subloader2">

</div>