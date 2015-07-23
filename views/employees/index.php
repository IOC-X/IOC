<div>

    <div class="panel panel-warning">

        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>

        <div class="panel-body">
            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="attendance_main">
                <i class="mdi-action-description"></i>  Daily Assignment</a>

            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="employee_main">
                <i class="mdi-action-account-circle"></i>  Employees management</a>

            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="shiftMain">
                <i class="mdi-notification-event-note"></i>  Shift Management</a>

        </div>



        <script type="text/javascript">
            $('#employee_main').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id, function () {
                });
            });
            $('#shiftMain').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id, function () {
                });
            });
            $('#attendance_main').click(function (e2) {
                e2.preventDefault();
                var id = $(this).attr('id');
                $('#subloader').load('/IOC/employees/' + id, function () {
                });
            });
        </script>

    </div>
</div>


