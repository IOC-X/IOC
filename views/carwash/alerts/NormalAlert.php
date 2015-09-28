<?php if (!$Transactions) { ?>
    <h3 class="text-center success"><strong>All the Non-Regular Customer Vehicles are returned back to the customers.</strong></h3>
    <?php
} else {
    ?>
    <div class="col-lg-3"><input type="text" class="form-control" id="search" placeholder="Type to search"></div>

    <!-- DISPLAYING LATEST TRANSACTIONS-->
    <div class="col-lg-12 text-center">
        <h3 class="text-center success"><strong>Earlier NON-Regular Customer Transactions</strong></h3>

    </div>
    <table class="table table-striped table-hover" id="tblData">

        <thead>
            <tr class="success">
                <th class="text-center">Customer Name</th>
                <th class="text-center">Package</th>
                <th class="text-center">Contact</th>
                <th class="text-center">Email</th>
                <th class="text-center">Vehicle No</th>
                <th class="text-center">Returned Date</th>
                <th class="text-center">Order Date</th>
                <th class="text-center">Send SMS & Email Alert</th>


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
                        <a id="alert_Cartrans" onclick="SendNormalAlert('<?php echo ($transaction->id); ?>', '<?php echo ($transaction->cname); ?>', '<?php echo ($transaction->email); ?>', '<?php echo ($transaction->contact); ?>')"> <i class="mdi-communication-textsms"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div id="myAlert" class="alert alert-info fade col-lg-4 text-center pull-right"  data-alert="alert">SMS and Email has been delivered.<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
<?php } ?>
<script type="text/javascript">


    function SendNormalAlert(id, cname, email, contact) {
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

                $.post('carwash/UpdateNonRegStatus', {id: id, user: cname, email: email, contact: contact}, function (data) {
                    console.log(data);

                });
                window.setTimeout(function () {
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/carwash/NormalAlert', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                        window.setTimeout(function () {
                            showAlert();
                        }, 3000);
                    });
                }, 3000);
            } else {
                swal("Cancelled", "Your Email was not sent :)", "error");
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