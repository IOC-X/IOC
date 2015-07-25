<div class="btn-group btn-group-justified">
    <a href="carwash/RegularAlert" class="btn btn-primary" id="RegularAlert"><i class="mdi-communication-quick-contacts-mail"></i> Regular Customer Alerts</a>
    <a href="carwash/NormalAlert" class="btn btn-primary" id="NormalAlert"><i class="mdi-communication-contacts"></i> Non-Regular Customer Alerts</a>
</div>


<script type="text/javascript">
    $('#RegularAlert').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/' + id, function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');

        });
    });



    $('#NormalAlert').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/' + id, function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');

        });
    });

</script>

<div id="subloader2">
                
</div>