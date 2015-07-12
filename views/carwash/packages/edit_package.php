
	<head>
		<title>Package Update Form</title>
		<meta charset="utf-8">

<script type="text/javascript">
    alert("hy");
    console.log('hy');
    
$(document).ready(function(){  alert("hy");
    console.log('package creation');
$("#form-submitted").click(function(){
//assigning values
var id =$("#id").text();
alert(id);
var name = $("#name").val();
var description = $("#description").val();
//var time = $("#time").val();
var price = $("#price").val();

//expression for validation
var numbers= /^[0-9]+$/;

//validation
        if(name ==''|| description==''|| price==''){
            alert("Edit Failed Some Fields are Blank!!!");   	
        }
        else if( (name.match(numbers)) ){
        alert("Sorry.. Invalid Package Name!!!");}
        else if( (description.match(numbers)) ){
        alert("Sorry.. Invalid Package Description!!!");}
        
        else if( !(price.match(numbers)) ){
        alert("Sorry.. Invalid Price!!!");}
        else{
            // Returns successful data submission message when the entered information is stored in database.
            $.post("carwash/editPackage",{ id:id, name: name, description: description, price:price},
                        function(data) {
                       // alert(data);
                        $('#form')[0].reset(); //To reset form fields
                    }   );
                        console.log('data sent');

            }
        });
        });
        

    </script>
   
	</head>
	
	<body>
		<div class="container col-lg-10">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Update package</strong></h3>
					
				</div>

                <form id="form" class="form-horizontal col-lg-5" action="" method="post">
					
                    <div class="control-group">
						<label class="control-label">ID</label>
							<div class="controls panel panel-default">
                                <label class="controls text-center" id="id"> <?php echo ($package->id); ?> </label>
								<span class="help-inline"></span>
							</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label">Name</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="name" id="name" placeholder="Name" value="<?php echo ($package->name); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Description</label>
							<div class="controls panel panel-default">
                                                            <textarea  name="description" id="description" class="form-control floating-label" placeholder="Description" rows="4" cols="50"> <?php echo ($package->description); ?></textarea>
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Price</label>
							<div class="controls panel panel-default">
                                <input type="text" class="form-control floating-label" name="price" id="price" placeholder="Price" value="<?php echo ($package->price); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						
						<button type="submit"  name="form-submitted" id="form-submitted" class="btn btn-success btn-raised">Update</button>
                        
					</div>
				</form>
			</div>
		</div>
	</body>


