
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
            <th>Amount</th>
            <th>Date</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>

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
                <td><?php echo "Rs." . ($transaction->amount); ?></td>
                <td><?php echo ($transaction->date); ?></td>
                <td><?php echo ($transaction->status); ?></td>
                <td>
                    <a id="edit_Cartrans" onclick="EditTrans('<?php echo ($transaction->id); ?>', '<?php echo ($transaction->cname); ?>', '<?php echo ($transaction->package); ?>', '<?php echo ($transaction->contact); ?>', '<?php echo ($transaction->email); ?>', '<?php echo ($transaction->vehicleNo); ?>', '<?php echo ($transaction->amount); ?>', '<?php echo ($transaction->date); ?>')"> <i class="mdi-content-create"></i> </a>
                </td>
                <td>
                    <a id="delete_Cartrans" onclick="DeleteAlert('<?php echo ($transaction->id); ?>')"> <i class="mdi-content-remove-circle"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="ui modal" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-justify">Edit Transaction Details</h4>
            </div>
            <form role="form" action="carwash/editCarTransaction" name="frmCarTrans" method="post">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>ID</label>
                        <input name="id" id="id" class="form-control" required readonly="">
                    </div>
                    <div class="form-group">
                        <label>Customer Name</label>

                        <input name="cname" id="cname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Package Name</label>

                        <input name="package" id="package" class="form-control" required readonly="">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>

                        <input name="contact" id="contact" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>

                        <input name="email" id="email" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Vehicle No</label>
                        <input name="vehicleNo" id="vehicleNo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Amount</label>
                        <input name="amount" id="amount" class="form-control" required readonly="">
                    </div>

                    <div class="form-group">
                        <label>Transaction Date</label>
                        <input name="date" id="date" class="form-control form_datetime" required>
                    </div> 

                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="mdi-content-create" aria-hidden="true"></span> Edit
                    </button>

                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function EditTrans(id, cname, package, contact, email, vehicleNo, amount, date) {

        document.frmCarTrans.id.value = id;
        document.frmCarTrans.cname.value = cname;
        document.frmCarTrans.package.value = package;
        document.frmCarTrans.contact.value = contact;
        document.frmCarTrans.email.value = email;
        document.frmCarTrans.vehicleNo.value = vehicleNo;
        document.frmCarTrans.amount.value = amount;
        document.frmCarTrans.date.value = date;
        $('#modal').modal('show');
    }

    function DeleteAlert(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this Transaction Details!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Delete it!",
            cancelButtonText: "No, Cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Your Transaction details has been deleted.", "success");
                window.location = 'carwash/delete_Cartransaction/' + id + '';

            } else {
                swal("Cancelled", "Your Customer details is safe :)", "error");
            }
        });
    }
</script>