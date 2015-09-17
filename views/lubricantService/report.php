
<div class="btn-group btn-group-justified">
    <a href="" class="btn btn-primary" id="Customers"><i class="mdi-maps-beenhere"></i> Regular Customers</a>
    <a href="" class="btn btn-primary" id="RegpdfReport"><i class="mdi-action-trending-up"></i>Regular Customer Transactions</a>
    <a href="" class="btn btn-primary" id="NonRegpdfReport"><i class="mdi-maps-directions-car"></i>Non-Regular Customer Transactions</a>
    
</div>

<script type="text/javascript">
    
    $('#Customers').click(function(e2){
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/CustomerpdfReportDisplay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

    $('#RegpdfReport').click(function(e2){
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/RegpdfReportDisplay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

    $('#NonRegpdfReport').click(function(e2){
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/NonRegpdfReportDisplay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
</script>

<div id="subloader2">

</div>
