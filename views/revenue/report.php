<div class="btn-group btn-group-justified">
    <a href="" class="btn btn-primary" id="expense"><i class="mdi-maps-beenhere"></i> Expenses</a>
    <a href="" class="btn btn-primary" id="incomes"><i class="mdi-action-trending-up"></i>Income</a>  
</div>

<script type="text/javascript">
    
    $('#expense').click(function(e2){
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/revenue/ExpensepdfReportDisplay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

    $('#incomes').click(function(e3){
        e3.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/revenue/index', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>

<div id="subloader2">

</div>