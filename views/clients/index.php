<div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="listclients">
                <i class="mdi-action-perm-media"></i>Client Details</a>
            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="addclient">
                <i class="mdi-maps-local-cafe"></i>Add Clients</a>
            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="clientmanage">
                <i class="mdi-action-assessment"></i>Client Management</a>
            <a href="javascript:void(0)" class="btn btn-flat btn-primary" id="clientreport">
                <i class="mdi-maps-local-cafe"></i>Report</a>

        </div>


    </div>
</div>

<script type="text/javascript">
    $('#listclients').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/clients/' + id, function () {
        });
    });
    $('#addclient').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/clients/' + id, function () {
        });
    });
    $('#clientmanage').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/clients/' + id, function () {
        });
    });
    $('#clientreport').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/clients/' + id, function () {
        });
    });
</script>


