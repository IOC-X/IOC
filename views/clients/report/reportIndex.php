<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="clientreport1"><i class="mdi-action-description"></i> Client</a>
<a href="javascript:void(0)" class="btn btn-primary" id="tranReport"><i class="mdi-action-view-list"></i> Transaction</a>

</div>

    <script>
        $('#clientreport1').click(function(){
  
            $('#subloader2').load('/IOC/clients/CustomerpdfReportDisplay',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#tranReport').click(function(){
          
            $('#subloader2').load('/IOC/clients/tranReport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });  

        </script>
        
        <br/>
<div id="subloader2">

</div>