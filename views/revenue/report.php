<div class="btn-group btn-group-justified">
    <a href="" class="btn btn-primary" id="expense"><i class="mdi-maps-beenhere"></i> Expenses</a>
    <a href="" class="btn btn-primary" id="income"><i class="mdi-action-trending-up"></i>Income</a>  
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

    $('#income').click(function(e2){
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/RegpdfReportDisplay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>

<div id="subloader2">

</div>