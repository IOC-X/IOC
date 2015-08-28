<div class="container col-lg-6">
<form method="post" id="transactionForm2" name="transactionForm2">

    <div class="control-group panel panel-info">
        
            <label class="control-label col-lg-4">Customer Name</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control floating-label" name="name" id="name" placeholder="Customer Name">
            </div>
        
    </div>
    <div class="control-group panel panel-info">
        <label class="control-label col-lg-4" style="margin-top: 10px">Contact</label>
             <div class="controls col-lg-6">
                <input type="number"  class="form-control floating-label" name="contact" id="contact" placeholder="Phone Number" style="margin-top: 10px">
             </div>
        
    </div>
            <div class="control-group panel panel-info">
            <label class="control-label col-lg-4" style="margin-top: 10px">Email</label>
                <div class="controls col-lg-6">
                <input type="email"  class="form-control floating-label" name="email" id="email" placeholder="Customer Email" style="margin-top: 10px">
                </div>
            </div>
        <div class="control-group panel panel-info">
             <label class="control-label col-lg-4" style="margin-top: 10px">Package</label>
             <div class="controls col-lg-6">
                <select class="btn active" id="select1" onchange="getPackageAmount()" name="select2">
                    <?php  foreach ($packages as $package) : ?>	
                    <option value="<?php echo ($package->price); ?>"><?php echo ($package->name); ?></option>
                    <?php endforeach; ?>
                </select>
             </div>
        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4" style="margin-top: 10px">Vehicle Number</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control floating-label" name="Vno" id="Vno" placeholder="Eg : AA-1234 or AAA-1234" style="margin-top: 10px" title="Eg : AA-1234 or AAA-1234"/>
            </div>
        </div>
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4" style="margin-top: 10px">Amount</label>
            <div class="controls col-lg-6">
                <input type="text"  class="form-control floating-label" name="amount" id="amount" readonly="readonly" value="" style="margin-top: 10px">
            </div>
        </div>  
        <div class="control-group panel panel-info">
            <label class="control-label col-lg-4" style="margin-top: 10px">Order Date</label>
            <div class="controls col-lg-6">
                <input type="text" class="form-control floating-label" name="date" id="date"  readonly="readonly" style="margin-top: 10px" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div>
        
    
                    <div class="form-actions col-lg-12" st>
                        <div class="col-lg-0 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="nonreg_history"><i class="mdi-action-restore"></i> History</a></div>
                        <div class="col-lg-0 col-lg-offset-9"><button type="submit" class="btn btn-primary btn-raised" id="form-submitted" name="form-submitted" ><i class="mdi-content-save"></i> Add Transaction</button></div>
                    </div>
<!--                    <div class="form-actions col-lg-11 col-lg-offset-9">
						
                        <button type="submit" class="btn btn-success btn-raised" id="form-submitted" name="form-submitted" >Add Transaction</button>
						
					</div>-->
</form>
    </div>


<script type="text/javascript">
    function getPackageAmount () { 
        var PacakgeAmount = document.transactionForm2.select1.options[document.transactionForm2.select1.selectedIndex].value;        
        var Amount=parseInt(PacakgeAmount).toFixed(2);
        document.transactionForm2.amount.value=Amount;
        
        	}
            
$(document).ready(function(){  
    console.log('adding transactions');
$("#form-submitted").click(function(){
//assigning values
var cname = $("#name").val();
var contact=$("#contact").val();
var email=$("#email").val();
var package = $("#select1 option:selected").text();
var vehicleNo = $("#Vno").val();
var amount = $("#amount").val();
var date = $("#date").val();

//EXPRESSIONS
            var validVehicleNo1 = /^[A-Z]{2}-\d{4}$/;
            var validVehicleNo2 = /^[A-Z]{3}-\d{4}$/;
            var phone = /^\d{10}$/;
            var validEmail = /\S+@\S+\.\S+/;
//validation
        if (cname == '' || contact == '' || email == '' || package == '' || vehicleNo == '' || date == '') {

                swal("Oops...", "Insertion Failed Some Fields are Blank....!!", "error");
                return false;
            }
            else if (!(contact.match(phone))) {
                swal("Oops...", "Invalid Contact Number....!!", "error");
            }
            else if (!(email.match(validEmail))) {
                swal("Oops...", "Invalid Email....!!", "error");
            }
            else if(amount==''){
                swal("Oops.. Something went wrong..","Transaction Failed. Please select the package again..!","error");
                return false;
            }
        
         else if (!(vehicleNo.match(validVehicleNo1)) && !(vehicleNo.match(validVehicleNo2))) {
                swal("Oops...", "Vehicle Number is invalid....!!", "error");
                return false;
            }
        
        else{
            
            // Returns successful data submission message when the entered information is stored in database.
            $.post("carwash/addCarTransaction",{ cname: cname, contact:contact, email:email, package: package, vehicleNo: vehicleNo, amount: amount, date: date},
                        function(data) {
                        //alert(data);
                        swal("Good job!", "Successfully added the New Transaction!", "success");
                        
                        $('#subloader').empty();
                        $('#subloader').load('/IOC/carwash/nonreg_history', function () {
                        $('#subloader').hide();
                        $('#subloader').fadeIn('fast');
                    });
                    }   );
                        console.log('data sent');

            }
        });
        });
        
        $('#nonreg_history').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });

</script>