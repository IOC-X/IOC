
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
            <form role="form" action="" name="frmCarTrans" method="post">
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
                        <input type="date" name="date" id="date" class="form-control form_datetime" required>
                    </div> 

                    <button type="submit" class="btn btn-primary btn-lg" name="form-submitted" id="form-submitted">
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
    
    $(document).ready(function () {
        console.log('Editing NONRegular History');
        $("#form-submitted").click(function (e) {
//assiging values    
            e.preventDefault();
            var id = $("#id").val(); 
            var cname = $("#cname").val();
            var package = $("#package").val();
            var contact = $("#contact").val();
            var email = $("#email").val();
            var vehicleNo = $("#vehicleNo").val();
            var amount = $("#amount").val();
            var date = $("#date").val();

//expression for validation
            var numbers = /^[0-9]+$/;
            var validDate = new Date();
            var phone = /^\d{10}$/;
            var validEmail = /\S+@\S+\.\S+/;


//date validation
            var chkdate = document.getElementById('date').value;
            var edate = chkdate.split("-");
            var spdate = new Date();
            var sdd = spdate.getDate();
            var smm = spdate.getMonth();
            var syyyy = spdate.getFullYear();
            var today = new Date(syyyy, smm, sdd);
            var e_date = new Date(edate[0], edate[1] - 1, edate[2]);


//validation
            if (id == '' || cname == '' || package == '' ||contact == ''|| email == ''|| vehicleNo == '' || amount == '' || date == '') {

                swal("Oops...", "Insertion Failed Some Fields are Blank....!!", "error");
            }
            else if (!(contact.match(phone))) {
                swal("Oops...", "Invalid Contact Number....!!", "error");
            }
            else if (!(email.match(validEmail))) {
                swal("Oops...", "Invalid Email....!!", "error");
            }
            else if (vehicleNo.match(numbers)) {
                swal("Oops...", "Vehicle Number is invalid....!!", "error");
            }
            
            else if (e_date > today) {
                swal("Oops...", "Selected date is a future date....!!", "error");
            }
            else {
// Returns successful data submission message when the entered information is stored in database.
                $.post("lube_service/editNonRegLuTransaction", {id: id,cname: cname, package:package, contact:contact, email:email, vehicleNo: vehicleNo, amount: amount, date: date},
                function (data) {
                    swal("Good job!", "Successfully Updated the Non-Regular Transaction Details!", "success");
                    // $('#form')[0].reset(); //To reset form fields
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/lube_service/nonreg_Luhistory', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                    });

                });
                console.log('data sent');

            }
        });
    });


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
                $.post('lube_service/delete_NonRegLutransaction', { id : id }, function(data){
                                console.log(data);                                
                            });
                        $('#subloader2').empty();
                        $('#subloader2').load('/IOC/lube_service/nonreg_Luhistory', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                    });
                

            } else {
                swal("Cancelled", "Your Customer details is safe :)", "error");
            }
        });
    }
</script>