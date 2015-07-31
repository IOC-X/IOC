
<!-- DISPLAYING LATEST TRANSACTIONS-->
<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Earlier NON-Regular Customer Transactions</strong></h3>

</div>
<table class="table table-striped table-bordered table-hover">

    <thead>
        <tr class="success">
            <th>Customer Name</th>
            <th>Package</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Vehicle No</th>
            <th>Status</th>
            <th>Date</th>
            <th>Send Alert</th>
            

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Transactions as $transaction) : ?>						
            <tr>
                <td><?php echo ($transaction->cname); ?></td>
                <td><?php echo ($transaction->package); ?></td>
                <td><?php echo ($transaction->contact); ?></td>
                <td><?php echo ($transaction->email); ?></td>
                <td><?php echo ($transaction->vehicleNo); ?></td>
                <td><?php echo ($transaction->status); ?></td>
                <td><?php echo ($transaction->date); ?></td>
               
                <td>
                    <a id="alert_Cartrans" onclick="SendNormalAlert('<?php echo ($transaction->id); ?>')"> <i class="mdi-communication-textsms"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">

   
    function SendNormalAlert(id) {
        swal({
            title: "Are you sure?",
            text: "You are about to send a confirmation Email to client for collect the vehicle!!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Send Alert!",
            cancelButtonText: "No, Cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Message Sent!", "Your Confirmation Alert has been sent.", "success");
                window.location = 'carwash/UpdateNonRegStatus/' + id + '';

            } else {
                swal("Cancelled", "Your Email was not sent :)", "error");
            }
        });
    }
</script>