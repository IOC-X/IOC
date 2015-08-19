<?php  
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
                <th class="text-center">Customer Name</th>
                <th class="text-center">Package Name</th>
                <th class="text-center">Vehicle Number</th>
                <th class="text-center">Date</th>
                <th class="text-center">Status</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Send Sms & Email Alert</th>

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
                    <td><?php echo ($transaction->contact); ?></td>
                    <td>
                        <a id="delete_trans" onclick="SendAlert('<?php echo ($transaction->id); ?>','<?php echo ($transaction->name); ?>','<?php echo ($transaction->email); ?>','<?php echo ($transaction->contact); ?>')"> <i class="mdi-communication-email"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php } ?>

<script type="text/javascript">

                                   

                                    function SendAlert(id,name,email,contact) {
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
                                                
                                                $.post('carwash/UpdateStatus', {id: id, user:name, email:email, contact:contact}, function (data) {
                                            console.log(data);

                                        });
                                        $('#subloader2').empty();
                                        $('#subloader2').load('/IOC/carwash/RegularAlert', function () {
                                            $('#subloader2').hide();
                                            $('#subloader2').fadeIn('fast');
                                        });

                                            } else {
                                                swal("Cancelled", "Your Email was not sent :)", "error");
                                            }
                                        });
                                    }
</script>