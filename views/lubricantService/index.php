<div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
            <a href="lube_service/packages" class="btn btn-flat btn-primary" id="packages">
                <i class="mdi-action-work"></i> Packages</a>
            <a href="lube_service/lu_customers" class="btn btn-flat btn-primary" id="lu_customers">
                <i class="mdi-social-group"></i> Regular Customers</a>
            <a href="" class="btn btn-flat btn-primary" id="lu_transactions">
                <i class="mdi-content-add"></i> Transactions</a>
            
            <a href="lube_service/report" class="btn btn-flat btn-primary" id="report">
                <i class="mdi-content-content-paste"></i> Report</a>
        </div>
        <script type="text/javascript">
            $('#packages').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/lube_service/' + id, function () {

                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');

                });
            });



            $('#lu_transactions').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/lube_service/' + id, function () {

                });
            });
            $('#lu_customers').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/lube_service/' + id, function () {
                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');

                });
            });
            $('#report').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/lube_service/' + id, function () {

                });
            });
            $('#alert').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                });
            });
        </script>
    </div>
</div>