<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="fuel_expenses">Fuel</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="lubricants_expenses">Lubricants</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="other_expenses">Other Expenses</a>
</div>
    <script>
        $('#fuel_expenses').click(function(){
            $('#subloader2').load('/IOC/revenue/fuel_expenses',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#lubricants_expenses').click(function(){
            $('#subloader2').load('/IOC/revenue/lubricants_expenses',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#other_expenses').click(function(){
            $('#subloader2').load('/IOC/revenue/other_expenses',function()){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        }); 

    </script>
<br/>
<div id="subloader2">
    
    
</div>