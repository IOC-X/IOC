<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Package Form</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<div class="container col-lg-8">
			<div class="span">
				<div class="row">
					<h3><strong>Add a Customer</strong></h3>
					
				</div>

                <form id="form" class="form-horizontal" action="" method="post">
					<div class="control-group panel panel-info">
						<label class="control-label col-lg-4">Customer ID</label>
							<div class="controls col-lg-6 panel">
                                <input type="text" class="form-control" name="cust_id" id="cust_id" placeholder="Customer ID" value="<?php echo ($cust_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Name</label>
							<div class="controls col-lg-6 panel">
                                                            <input type="text" class="form-control floating-label" name="name" id="name" placeholder="Name" value="<?php echo ($name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">NIC</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="nic" id="nic" placeholder="NIC" value="<?php echo ($nic); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Address</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="address" id="address" placeholder="Address" value="<?php echo ($address); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">Contact</label>
							<div class="controls col-lg-6 panel">
                                <input type="number" class="form-control floating-label" name="contact" id="contact" placeholder="Contact Number" value="<?php echo ($contact); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                    
                            <div class="control-group">
						<label class="control-label col-lg-4">Date Registered</label>
							<div class="controls col-lg-6 panel">
                                <input type="text" class="form-control floating-label" name="date" id="date" placeholder="" readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                    </div>
					<br>
					<div class="form-actions col-lg-12 col-lg-offset-8">
						
						<button type="submit" class="btn btn-success btn-raised" name="form-submitted" id="form-submitted">Add Customer</button>
						
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
    
$(document).ready(function(){  
    console.log('Addind Customer');
$("#form-submitted").click(function(){
//assiging values    
var cust_id = $("#cust_id").val();
var name = $("#name").val();
var nic = $("#nic").val();
var address = $("#address").val();
var contact = $("#contact").val();
var date = $("#date").val();
//expression for validation
var numbers= /^[0-9]+$/;

//validation
    if(cust_id ==''|| name==''|| nic==''|| address==''|| contact==''){
        alert("Insertion Failed Some Fields are Blank....!!");}
   // else if( !(cust_id.match(numbers)) ){
       // alert("Sorry.. Invalid Customer ID");}

    else{
// Returns successful data submission message when the entered information is stored in database.
        $.post("carwash/addCustomer",{ cust_id:cust_id ,name: name, nic: nic, address: address, contact:contact, date:date},
                    function(data) {
                    alert("Successfully added the New Customer");
                    
                    $('#form')[0].reset(); //To reset form fields
                    });
                    console.log('data sent');
    
        }
});
});


</script>