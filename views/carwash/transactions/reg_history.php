<div class="col-lg-12" id="reg_history">
    <!-- DISPLAYING LATEST TRANSACTIONS-->
    <div>
        <h3 class="text-center success"><strong>Earlier Regular Customer Transactions</strong></h3>

    </div>
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr class="success">
                <th>Customer ID</th>
                <th>Package Name</th>
                <th>Vehicle Number</th>
                <th>Amount(20% Discount)</th>
                <th>Date</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($regularTransactions as $transaction) : ?>						
                <tr>
                    <td><?php echo ($transaction->cust_id); ?></td>
                    <td><?php echo ($transaction->package); ?></td>
                    <td><?php echo ($transaction->vehicleNo); ?></td>
                    <td><?php echo "Rs." . ($transaction->amount); ?></td>
                    <td><?php echo ($transaction->date); ?></td>
                    <td><?php echo ($transaction->status); ?></td>
                    <td>
                        <a id="edit_trans" onclick="EditTrans('<?php echo ($transaction->id); ?>', '<?php echo ($transaction->cust_id); ?>', '<?php echo ($transaction->package); ?>', '<?php echo ($transaction->vehicleNo); ?>', '<?php echo ($transaction->amount); ?>', '<?php echo ($transaction->date); ?>')"> <i class="mdi-content-create"></i> </a>
                    </td>
                    <td>
                        <a id="delete_trans" onclick="DeleteAlert('<?php echo ($transaction->id); ?>')"> <i class="mdi-content-remove-circle"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

 <div class="ui modal" id="modalT" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-justify">Edit Transaction Details</h4>
                </div>
                <form role="form" action="carwash/editTransaction" name="frmTrans" method="post">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>ID</label>
                            <input name="id" id="id" class="form-control" required readonly="">
                        </div>
                        <div class="form-group">
                            <label>Customer Id</label>
                            <select class="btn form-control" id="cust_id" name="cust_id">
                            <?php  foreach ($customers as $customer) : ?>
                            <option value="<?php echo ($customer->cust_id); ?>"><?php echo ($customer->cust_id); ?></option>
                            <?php endforeach; ?>
                            </select>
<!--                            <input name="cust_id" id="cust_id" class="form-control" required readonly="">-->
                        </div>

                        <div class="form-group">
                            <label>Package Name</label>
                            
                            <input name="package" id="package" class="form-control" required readonly="">
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
                            <input type="date" name="date" id="date" class="form-control form_datetime" required>
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

                                    function EditTrans(id, cust_id, package, vehicleNo, amount, date) {

                                        document.frmTrans.id.value = id;
                                        document.frmTrans.cust_id.value = cust_id;
                                        document.frmTrans.package.value = package;
                                        document.frmTrans.vehicleNo.value = vehicleNo;
                                        document.frmTrans.amount.value = amount;
                                        document.frmTrans.date.value = date;
                                        $('#modalT').modal('show');
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
                                                window.location = 'carwash/delete_transaction/'+id+'';

                                            } else {
                                                swal("Cancelled", "Your Customer details is safe :)", "error");
                                            }
                                        });
                                    }
</script>