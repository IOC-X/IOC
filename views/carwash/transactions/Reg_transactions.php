<div class="col-lg-12">
    <form method="post" id="transactionForm" name="transactionForm">
        <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Package</th>
                    <th>Vehicle Number</th>
                    <th>Original Amount</th>
                    <th>Discounted Amount</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select class="btn active" id="select1" name="select1">
                            <?php foreach ($customers as $customer) : ?>
                                <option value="<?php echo ($customer->cust_id); ?>"><?php echo ($customer->cust_id); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <select class="btn active" id="select2" onchange="getPackageAmount()" name="select2">
                            <?php foreach ($packages as $package) : ?>	
                                <option value="<?php echo ($package->price); ?>"><?php echo ($package->name); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <input type="text"  class="form-control btn" name="Vno" id="Vno" placeholder="">
                    </td>
                    <td>
                        <input type="text"  class="form-control btn" name="original_amount" id="original_amount" readonly="readonly" value="">
                    </td>
                    <td>
                        <input type="text"  class="form-control btn" name="amount" id="amount" readonly="readonly" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control btn" name="date" id="date"  readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
                    </td>

                </tr>

            </tbody>
        </table>
        <div class="form-actions col-lg-12">
            <div class="col-lg-0 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="reg_history"><i class="mdi-action-restore"></i> History</a></div>
            <div class="col-lg-0 col-lg-offset-9"><button type="submit" class="btn btn-primary btn-raised" id="form-submitted" name="form-submitted" ><i class="mdi-content-save"></i> Add Transaction</button></div>
        </div>
    </form>
</div>

<script type="text/javascript">
    function getPackageAmount() {
        var PacakgeAmount = document.transactionForm.select2.options[document.transactionForm.select2.selectedIndex].value;
        var OriginalAmount = parseInt(PacakgeAmount).toFixed(2);
        document.transactionForm.original_amount.value = OriginalAmount;
        var NewPacakgeAmount = PacakgeAmount * 0.80; //20% DISCOUNTS BEING SET.
        document.transactionForm.amount.value = NewPacakgeAmount.toFixed(2);
    }

    $(document).ready(function () {
        $("#history").click(function (e) {
            e.preventDefault();
            $("#history1").show();
        });
         
        console.log('adding transactions');
        $("#form-submitted").click(function () {
//assigning values
            var cust_id = $("#select1 option:selected").text();
            var package = $("#select2 option:selected").text();
            var vehicleNo = $("#Vno").val();
            var originalAmount = $("#original_amount").val();
            var amount = $("#amount").val();
            var date = $("#date").val();

//validation
            if (vehicleNo == '') {
                swal("Oops.. Something went wrong..","Transaction Failed. Please Enter Vehicle Number..!","error");
                return false;
            }
            
            else if(amount==''|| originalAmount==''){
                swal("Oops.. Something went wrong..","Transaction Failed. Please select the package again..!","error");
                return false;
            } 

            else {
                
                // Returns successful data submission message when the entered information is stored in database.
                $.post("carwash/addTransaction", {cust_id: cust_id, package: package, vehicleNo: vehicleNo, amount: amount, date: date},
                function (data) {
                    //alert(data);
                    swal("Good job!", "Successfully added the New Transaction!", "success");
                    
                        $('#subloader2').empty();
                        $('#subloader2').load('/IOC/carwash/reg_history',function(){
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                    });
                });
                console.log('data sent');

            }
        });
    });


    $('#reg_history').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/' + id, function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
</script>