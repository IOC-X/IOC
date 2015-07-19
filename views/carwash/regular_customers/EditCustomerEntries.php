
<div>
    <h1 class="text-center text-success">Regular Customers</h1>
    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Date Registered</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>						
                <tr>
                    <td><?php echo ($customer->cust_id); ?></td>
                    <td><?php echo ($customer->name); ?></td>
                    <td><?php echo ($customer->nic); ?></td>
                    <td><?php echo ($customer->address); ?></td>
                    <td><?php echo ($customer->contact); ?></td>
                    <td><?php echo ($customer->date); ?></td>
                    <td>
                        <a id="edit_customer" onclick="Editcustomer('<?php echo ($customer->cust_id); ?>','<?php echo ($customer->name); ?>','<?php echo ($customer->nic); ?>','<?php echo ($customer->address); ?>','<?php echo ($customer->contact); ?>','<?php echo ($customer->date); ?>')"> <i class="mdi-content-create"></i> </a>
                    </td>
                    <td>
                        <a id="delete_customer" onclick="DeleteAlert('<?php echo ($customer->cust_id); ?>')"> <i class="mdi-content-remove-circle"></i></a>
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
                    <h4 class="modal-title text-justify">Edit Customer Details</h4>
                </div>
                <form role="form" action="carwash/editCustomer" name="frmCustomers" method="post">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>ID</label>
                            <input name="cust_id" id="cust_id" class="form-control" required readonly="">
                        </div>

                        <div class="form-group">
                            <label>Customer Name</label>
                            <input name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>NIC</label>
                            <input name="nic" id="nic" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="number" name="contact" id="contact" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date Registered</label>
                            <input name="date" id="date" class="form-control" required>
                        </div> 

                        <button type="submit" class="btn btn-info btn-lg">
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

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.css">
<script type="text/javascript">

                                    $('#add_customer').click(function (e2) {
                                        e2.preventDefault();
                                        var id = $(this).attr('id');
                                        $('#subloader').load('/IOC/carwash/' + id, function () {

                                            $('#subloader').hide();
                                            $('#subloader').fadeIn('fast');
                                        });
                                    });

                                    function Editcustomer(cust_id, name, nic, address, contact, date) {


                                        document.frmCustomers.cust_id.value = cust_id;
                                        document.frmCustomers.name.value = name;
                                        document.frmCustomers.nic.value = nic;
                                        document.frmCustomers.address.value = address;
                                        document.frmCustomers.contact.value = contact;
                                        document.frmCustomers.date.value = date;
                                        $('#modal').modal('show');
                                    }

                                    function DeleteAlert(cust_id) {
                                        swal({
                                            title: "Are you sure?",
                                            text: "You will not be able to recover this Customer Details!",
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
                                                swal("Deleted!", "Your Customer details has been deleted.", "success");
                                                window.location = 'carwash/delete_customer/'+cust_id+'';

                                            } else {
                                                swal("Cancelled", "Your Customer details is safe :)", "error");
                                            }
                                        });
                                    }
</script>
