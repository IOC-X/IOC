<style>
    .fade {
        opacity: 0;
        -webkit-transition: opacity 0.15s linear;
        -moz-transition: opacity 0.15s linear;
        -o-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }
    .fade.in {
        opacity: 1;
    }
</style>
<?php if (!$regularTransactions) { ?>
    <h3 class="text-center success"><strong>All the Regular Customer Vehicles are returned back to the customers.</strong></h3>
    <?php
} else {
    ?>
    <div class="col-lg-3"><input type="text" class="form-control" id="search" placeholder="Type to search"></div>
    <div class="col-lg-12" id="RegularAlert">
        <!-- DISPLAYING LATEST TRANSACTIONS-->
        <div class="col-lg-12">
            <h3 class="text-center success"><strong>Earlier Regular Customer Transactions</strong></h3>

        </div>
        <table class="table table-striped table-hover" id="tblData">

            <thead>
                <tr class="success">
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Package Name</th>
                    <th class="text-center">Vehicle Number</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center">Returned Date</th>
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
                            <a id="delete_trans" onclick="SendAlert('<?php echo ($transaction->id); ?>', '<?php echo ($transaction->name); ?>', '<?php echo ($transaction->email); ?>', '<?php echo ($transaction->contact); ?>')"> <i class="mdi-communication-email"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="myAlert" class="alert alert-info fade col-lg-4 text-center pull-right"  data-alert="alert">SMS and Email has been delivered.<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
    </div>

<?php } ?>

<script type="text/javascript">



    function SendAlert(id, name, email, contact) {
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
                swal("Message Sent!", "Your Confirmation Email and SMS has been sent.", "success");

                $.post('carwash/UpdateStatus', {id: id, user: name, email: email, contact: contact}, function (data) {
                    console.log(data);

                });
                window.setTimeout(function () {
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/carwash/RegularAlert', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                        window.setTimeout(function () {
                            showAlert();
                        }, 3000);
                    });
                }, 3000);

            } else {
                swal("Cancelled", "Your Email and SMS was not sent :)", "error");
            }
        });
    }

    $(document).ready(function ()
    {
        $('#search').keyup(function ()
        {
            searchTable($(this).val());
        });
    });

    function searchTable(inputVal)
    {
        var table = $('#tblData');
        table.find('tr').each(function (index, row)
        {
            var allCells = $(row).find('td');
            if (allCells.length > 0)
            {
                var found = false;
                allCells.each(function (index, td)
                {
                    var regExp = new RegExp(inputVal, 'i');
                    if (regExp.test($(td).text()))
                    {
                        found = true;
                        return false;
                    }
                });
                if (found == true)
                    $(row).show();
                else
                    $(row).hide();
            }
        });
    }

    function showAlert() {
        $("#myAlert").addClass("in");
    }




</script>