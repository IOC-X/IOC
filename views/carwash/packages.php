
<div class="btn-group btn-group-justified">
    <a href="carwash/create_package/" class="btn btn-primary" id="create_package"><i class="glyphicon glyphicon-gift"></i>  Add Package</a>
    <a href="carwash/EditPackageEntries/" class="btn btn-primary" id="EditPackageEntries"><i class="glyphicon glyphicon-wrench"></i>  Edit Entries</a>
</div>
<div data-role="page">
    <h1 class="text-center text-success">Carwash Packages</h1>
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr>
                
                <th>Name</th>
                <th>Description</th>
                <th>Time</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($packages as $package) : ?>						
                <tr>
                    
                    <td><?php echo ($package->name); ?></td>
                    <td><?php echo ($package->description); ?></td>
                    <td><?php echo ($package->time) . " Hours"; ?></td>
                    <td><?php echo "Rs." . ($package->price); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<script type="text/javascript">

    $('#EditPackageEntries').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/carwash/' + id, function () {

            $('#subloader').hide();
            $('#subloader').fadeIn('fast');
        });
    });
              
    $('#create_package').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader').load('/IOC/carwash/' + id, function () {

            $('#subloader').hide();
            $('#subloader').fadeIn('fast');
        });
    });

    
</script>