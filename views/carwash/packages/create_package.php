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
					<h3><strong>Create a Package</strong></h3>
					
				</div>

                <form class="form-horizontal" action="" method="post" id="form">
					<div class="control-group panel panel-info">
						<label class="control-label col-lg-4">Name</label>
							<div class="controls col-lg-6 panel">
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Package Name" value="<?php echo ($name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Description</label>
							<div class="controls col-lg-6 panel">
                                                            <textarea  name="description" id="description" class="form-control floating-label" placeholder="Package Description" rows="4" cols="50"><?php echo ($description); ?></textarea>
								<span class="help-inline"></span>
							</div>
					</div>
                                        <div class="control-group">
						<label class="control-label col-lg-4">Time</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="time" id="time" placeholder="Time in Hours" value="<?php echo ($time); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label col-lg-4">Price</label>
							<div class="controls col-lg-6 panel">
								<input type="text" class="form-control floating-label" name="price" id="price" placeholder="Package Price" value="<?php echo ($price); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions col-lg-12 col-lg-offset-8">
<!--						<input type="hidden"  id="form-submitted" value="1">-->
                        <button type="submit" class="btn btn-success btn-raised" id="form-submitted" name="form-submitted" >Create</button>
						
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
    
$(document).ready(function(){  
    console.log('package creation');
$("#form-submitted").click(function(){
//assigning values
var name = $("#name").val();
var description = $("#description").val();
var time = $("#time").val();
var price = $("#price").val();

//expression for validation
var numbers= /^[0-9]+$/;

//validation
        if(name ==''|| description==''|| time==''|| price==''){
            alert("Creating Failed Some Fields are Blank!!!");   	
        }
        else if( (name.match(numbers)) ){
        alert("Sorry.. Invalid Package Name!!!");}
        else if( (description.match(numbers)) ){
        alert("Sorry.. Invalid Package Description!!!");}
        else if( !(time.match(numbers)) ){
        alert("Sorry.. Invalid Time!!!");}
        else if( !(price.match(numbers)) ){
        alert("Sorry.. Invalid Price!!!");}
        else{
            // Returns successful data submission message when the entered information is stored in database.
            $.post("carwash/createPackage",{ name: name, description: description, time: time, price:price},
                        function(data) {
                        //alert(data);
                        $('#form')[0].reset(); //To reset form fields
                    }   );
                        console.log('data sent');

            }
        });
        });


</script>