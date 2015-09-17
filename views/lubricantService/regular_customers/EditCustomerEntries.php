
<div class="col-lg-12">
    <h1 class="text-center text-success">Regular Customers</h1>
    <div class="col-lg-3"><input type="text" class="form-control" id="search" placeholder="Type to search"></div>
    <table class="table table-striped table-bordered" id="tblData">

        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Date Registered</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>						
                <tr>
                    <td><?php echo ($customer->id); ?></td>
                    <td><?php echo ($customer->name); ?></td>
                    <td><?php echo ($customer->address); ?></td>
                    <td><?php echo ($customer->contact); ?></td>
                    <td><?php echo ($customer->email); ?></td>
                    <td><?php echo ($customer->date); ?></td>
                    <td>
                        <a id="edit_customer" onclick="Editcustomer('<?php echo ($customer->id); ?>', '<?php echo ($customer->name); ?>', '<?php echo ($customer->address); ?>', '<?php echo ($customer->contact); ?>', '<?php echo ($customer->email); ?>', '<?php echo ($customer->date); ?>')"> <i class="mdi-content-create"></i> </a>
                    </td>
                    <td>
                        <a id="delete_customer" onclick="DeleteAlert('<?php echo ($customer->id); ?>')"> <i class="mdi-content-remove-circle"></i></a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-justify">Edit Customer Details</h4>
                </div>
                <form role="form" action="" name="frmCustomers" method="post">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>ID</label>
                            <input name="id" id="id" class="form-control" required readonly="">
                        </div>

                        <div class="form-group">
                            <label>Customer Name</label>
                            <input name="name" id="name" class="form-control" required>
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
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date Registered</label>
                            <input type="date" name="date" id="date" class="form-control" required>
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

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.css">
<script type="text/javascript">
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
                        $('#add_customer').click(function (e2) {
                            e2.preventDefault();
                            var id = $(this).attr('id');
                            $('#subloader2').load('/IOC/lube_service/' + id, function () {

                                $('#subloader2').hide();
                                $('#subloader2').fadeIn('fast');
                            });
                        });


                        function Editcustomer(id, name, address, contact, email, date) {


                            document.frmCustomers.id.value = id;
                            document.frmCustomers.name.value = name;
                            document.frmCustomers.address.value = address;
                            document.frmCustomers.contact.value = contact;
                            document.frmCustomers.email.value = email;
                            document.frmCustomers.date.value = date;
                            $('#modal').modal('show');
                        }

                        $(document).ready(function () {

                            $("#form-submitted").click(function (e) {
//assiging values    
                                e.preventDefault();
                                var id = $("#id").val();
                                var name = $("#name").val();
                                var address = $("#address").val();
                                var contact = $("#contact").val();
                                var email = $("#email").val();
                                var date = $("#date").val();

//expression for validation
                                var numbers = /^[0-9]+$/;
                                var phone = /^\d{10}$/;
                                var validEmail = /\S+@\S+\.\S+/;
                                var validDate = new Date();
                                var c = 1;


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
                                if (id == '' || name == '' || address == '' || contact == '' || email == '' || date == '') {

                                    swal("Oops...", "Insertion Failed Some Fields are Blank....!!", "error");
                                }

                                else if (name.match(numbers)) {
                                    swal("Oops...", "Name should be in Letters....!!", "error");
                                }

                                else if (address.match(numbers)) {
                                    swal("Oops...", "Invalid Address....!!", "error");
                                }
                                else if (!(contact.match(phone))) {
                                    swal("Oops...", "Invalid Contact Number....!!", "error");
                                }
                                else if (!(email.match(validEmail))) {
                                    swal("Oops...", "Invalid Email....!!", "error");
                                }
                                else if (e_date > today) {
                                    swal("Oops...", "Selected date is a future date....!!", "error");
                                }
                                else {
// Returns successful data submission message when the entered information is stored in database.
                                    $.post("lube_service/editCustomer", {id: id, name: name, address: address, contact: contact, email: email, date: date},
                                    function (data) {
                                        swal("Good job!", "Successfully Updated the Customer Details!", "success");
                                        // $('#form')[0].reset(); //To reset form fields
                                        $('#subloader2').empty();
                                        $('#subloader2').load('/IOC/lube_service/EditCustomerEntries', function () {
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
                                    var idn = '\'' + id + '\'';

                                    $.post('lube_service/delete_customer', {ID: idn}, function (data) {

                                        console.log('deleted')
                                    });
                                    $('#subloader2').load('/IOC/lube_service/EditCustomerEntries', function () {
                                        $('#subloader2').hide();
                                        $('#subloader2').fadeIn('fast');
                                    });
                                } else {
                                    swal("Cancelled", "Your Customer details is safe :)", "error");
                                }
                            });
                        }
</script>
