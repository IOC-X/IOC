<?php // 
if (!$regularTransactions){ ?>
     <h3 class="text-center success"><strong>All the Regular Customer Vehicles are returned back to the customers.</strong></h3>
<?php

}
 else {
    

?>

<div class="col-lg-12" id="RegularAlert">
    <!-- DISPLAYING LATEST TRANSACTIONS-->
    <div>
        <h3 class="text-center success"><strong>Earlier Regular Customer Transactions</strong></h3>

    </div>
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr class="success">
                <th>Customer Name</th>
                <th>Package Name</th>
                <th>Vehicle Number</th>
                <th>Date</th>
                <th>Status</th>
                <th>Email</th>
                <th>Send Email Alert</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($regularTransactions as $transaction) : ?>						
                <tr>
                    <td><?php echo ($transaction->name); ?></td>
                    <td><?php echo ($transaction->package); ?></td>
                    <td><?php echo ($transaction->vehicleNo); ?></td>
                    <td><?php echo ($transaction->date); ?></td>
                    <td><?php echo ($transaction->status); ?></td>
                    <td><?php echo ($transaction->email); ?></td>
                    <td>
                        <a id="delete_trans" onclick="SendAlert('<?php echo ($transaction->id); ?>')"> <i class="mdi-communication-email"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php } ?>

<script type="text/javascript">

                                   

                                    function SendAlert(id) {
                                        swal({
                                            title: "Are you sure?",
                                            text: "You are about to send a confirmation Email to client for collect the vehicle!",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-danger",
                                            confirmButtonText: "Yes, Send Email!",
                                            cancelButtonText: "No, Cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                swal("Message Sent!", "Your Confirmation Email has been sent.", "success");
                                                window.location = 'carwash/UpdateStatus/'+id+'';

                                            } else {
                                                swal("Cancelled", "Your Email was not sent :)", "error");
                                            }
                                        });
                                    }
</script>