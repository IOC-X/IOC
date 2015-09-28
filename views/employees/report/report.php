<div class="btn-group btn-group-justified" id="pump-tabs">
    <a href="javascript:void(0)" class="btn btn-primary" id="attendancereport"><i class="mdi-action-description"></i> Attendance</a>
<a href="javascript:void(0)" class="btn btn-primary" id="empreport"><i class="mdi-action-view-list"></i> Employee</a>
<a href="javascript:void(0)" class="btn btn-primary" id="shiftreport"><i class="mdi-action-toc"></i> Shift</a>
</div>

    <script>
        $('#attendancereport').click(function(){
          
            $('#subloader2').load('/IOC/employees/attenreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#empreport').click(function(){
          
            $('#subloader2').load('/IOC/employees/empreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });  
         $('#shiftreport').click(function(){
          
            $('#subloader2').load('/IOC/employees/shiftreport',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        }); 
        </script>
        
        <br/>
<div id="subloader2">

</div>