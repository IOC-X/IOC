<div class="container col-lg-6">
    <form method="post" id="transactionForm2" name="transactionForm2">

        <div class="control-group panel panel-info">

            <label class="control-label col-lg-4">Customer Name</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control btn" name="name" id="name" placeholder="Customer Name">
            </div>

        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Contact</label>
            <div class="controls col-lg-6">
                <input type="number"  class="form-control btn" name="contact" id="contact" placeholder="Phone Number">
            </div>

        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Email</label>
            <div class="controls col-lg-6">
                <input type="email"  class="form-control btn" name="email" id="email" placeholder="Customer Email">
            </div>
        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Package</label>
            <div class="controls col-lg-6">
                <select class="btn active" id="select1" onchange="getPackageAmount()" name="select2">
                    <?php foreach ($packages as $package) : ?>	
                        <option value="<?php echo ($package->price); ?>"><?php echo ($package->name); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Vehicle Number</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control btn" name="Vno" id="Vno" placeholder="">
            </div>
        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Amount</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control btn" name="amount" id="amount" readonly="readonly" value="">
            </div>
        </div>  
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4">Date</label>
            <div class="controls col-lg-6">
                <input type="text" class="form-control btn" name="date" id="date"  readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div>


        <div class="form-actions col-lg-12">
            <div class="col-lg-0 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="nonreg_Luhistory"><i class="mdi-action-restore"></i> History</a></div>
            <div class="col-lg-0 col-lg-offset-9"><button type="submit" class="btn btn-primary btn-raised" id="form-submitted" name="form-submitted" ><i class="mdi-content-save"></i> Add Transaction</button></div>
        </div>

    </form>
</div>


<script type="text/javascript">
    function getPackageAmount() {
        var PacakgeAmount = document.transactionForm2.select1.options[document.transactionForm2.select1.selectedIndex].value;
        var Amount = parseInt(PacakgeAmount).toFixed(2);
        document.transactionForm2.amount.value = Amount;

    }

    $(document).ready(function () {
        console.log('adding transactions');
        $("#form-submitted").click(function () {
//assigning values
            var cname = $("#name").val();
            var contact = $("#contact").val();
            var email = $("#email").val();
            var package = $("#select1 option:selected").text();
            var vehicleNo = $("#Vno").val();
            var amount = $("#amount").val();
            var date = $("#date").val();

            var validVehicleNo1 = /^[A-Z]{2}-\d{4}$/;
            var validVehicleNo2 = /^[A-Z]{3}-\d{4}$/;
            var validVehicleNo3 = /^[0-9]{2}-\d{4}$/;

            var phone = /^\d{10}$/;
            var validEmail = /\S+@\S+\.\S+/;
//validation
            if (cname == '' || contact == '' || email == '' || package == '' || vehicleNo == '' || date == '') {

                swal("Oops...", "Insertion Failed Some Fields are Blank....!!", "error");
                return false;
            }
            if (vehicleNo == '') {
                swal("Oops...", "Transaction Failed. Please Enter Vehicle Number", "error");
                return false;
            }
            else if (!(vehicleNo.match(validVehicleNo1)) && !(vehicleNo.match(validVehicleNo2)) && !(vehicleNo.match(validVehicleNo3))) {
                swal("Oops...", "Vehicle Number is invalid....!!", "error");
                return false;
            }
            else if (amount == '') {
                swal("Oops.. Something went wrong..", "Transaction Failed. Please select the package again..!", "error");
                return false;
            }
            else if (!(contact.match(phone))) {
                swal("Oops...", "Invalid Contact Number....!!", "error");
                return false;
            }
            else if (!(email.match(validEmail))) {
                swal("Oops...", "Invalid Email....!!", "error");
                return false;
            }

            else {

                // Returns successful data submission message when the entered information is stored in database.
                $.post("lube_service/addNonRegLuTransaction", {cname: cname, contact: contact, email: email, package: package, vehicleNo: vehicleNo, amount: amount, date: date},
                function (data) {
                    //alert(data);
                    swal("Good job!", "Successfully added the New Transaction!", "success");

                    $('#subloader').empty();
                    $('#subloader').load('/IOC/lube_service/nonreg_Luhistory', function () {
                        $('#subloader').hide();
                        $('#subloader').fadeIn('fast');
                    });
                });
                console.log('data sent');

            }
        });
    });

    $('#nonreg_Luhistory').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/lube_service/' + id, function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>