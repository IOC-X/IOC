<div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
            <a href="carwash/packages" class="btn btn-flat btn-primary" id="packages">
                <i class="mdi-action-redeem"></i> Packages</a>
            <a href="carwash/regular_customers" class="btn btn-flat btn-primary" id="regular_customers">
                <i class="mdi-action-assignment-ind"></i> Regular Customers</a>
            <a href="carwash/transactions" class="btn btn-flat btn-primary" id="transactions">
                <i class="mdi-action-assignment"></i> Transactions</a>
            <a href="carwash/history" class="btn btn-flat btn-primary" id="history">
                <i class="mdi-action-restore"></i> History</a>
            <a href="carwash/report" class="btn btn-flat btn-primary" id="report">
                <i class="mdi-action-today"></i> Report</a>
        </div>
        <script type="text/javascript">
            $('#packages').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');

                });
            });



            $('#transactions').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                });
            });
            $('#regular_customers').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                });
            });
            $('#report').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                });
            });
            $('#history').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id, function () {

                });
            });
        </script>
    </div>
</div>