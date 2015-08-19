<form class="form-horizontal" id="add_supplier_form" action="stocks/addSupplier" method="post">
    <fieldset>
    <legend>Add new suppliers</legend>
        <div class="form-group">
        <label for="sup-name" class="col-lg-2 control-label">Supplier name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control floating-label" id="sup-name" placeholder="supplier name" name="sup-name">
        </div>
        </div>
          
          <div class="form-group">
                <label for="products" class="col-lg-2 control-label">Products</label>
                <div class="col-lg-10" id="products">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="fuel" id="fuel-checkbox" id="fuel-checkbox" name="fuel-sup"> Fuel
                        </label>
                    </div>
                    <div class="checkbox">
                        <label id="lubricantx">
                            <input type="checkbox" name="lubricant-sup" id="lubricant-checkbox"> Lubricants
                        </label>
                    </div>
                </div>
            <br/>
          </div>
          <!-- <div class="form-group" id="qnty-div">
            <label for="tel-number" class="col-lg-2 control-label">Quantity</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="sup-quantity" placeholder="quantity" name="sup-tel-number">
            </div>
            </div>
          -->
          <div class="form-group">
            <label for="sup-email" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-7">
                <input type="email" class="form-control floating-label" id="sup-email" placeholder="email" name="sup-email">
            </div>
          </div>
            <div class="form-group">
            <label for="sup-contact" class="col-lg-2 control-label">Contact no</label>
            <div class="col-lg-7">
                <input type="text" class="form-control floating-label" id="sup-contact" placeholder="contact no" name="sup-contact">
            </div>    
            </div>
            


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>  
    </fieldset>
</form>
<script>
    // $(document).ready(function(){
    //   $('#qnty-div').hide();
    // });
    // $('#lubricant-checkbox').change(function(){
    //   if($(this).is(':checked')){
    //     $('#qnty-div').fadeIn('slow'); 
    //   }
    //   else{
    //    $('#qnty-div').fadeOut('slow');
    //   }
    // });
    $('#add_supplier_form').submit(function(e){
        e.preventDefault();
        var name = $('#sup-name').val();
        var contact = $('#sup-contact').val(); 
        var email = $('#sup-email').val();
        var contact = $('#sup-contact').val();
        // console.log($('lubricant-checkbox').is(':checked'));
        // if($('lubricant-checkbox').is(':checked') == false || $('fuel-checkbox').is(':checked') == false){
        //   swal("Bump !", "Please check at least one")
        //   console.log('inside');
        // }
        if(name == "" || email == "" || contact == ""){
            swal("Bump !", "Please fill every field");
            return false;
        }
        if(name.length>=30){
            swal("Bump !", "Name filed should be less than 30 characters")  
            return false;
        }
        if(!validateContact($('#sup-contact').val())){
            swal("Duhh !", "Please enter 10 digits for contact number");
            return false;    
        }
        if(!validateEmail($('#sup-email').val())){
            swal("Bruhh !", "Not a valid email");
            return false;    
        }
        else{
            console.log('succ');
            var form = $('#add_supplier_form');
            $.ajax({
                type : form.attr('method'),
                url : form.attr('action'),
                data : form.serialize(),
                success: function(data){
                  console.log(data);
                  swal("Supplier added successfully!", "click okay to continue", "success");
                  $('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                    $('#subloader2').hide();
                    $('#subloader2').fadeIn('fast');
                  });
                }
            });
        }
    });
    $('#sup-contact').focusout(function(){
        if(!validateContact($(this).val())){
            swal("Duhh !", "Please enter 10 digits");    
        }
    });
    $('#sup-email').focusout(function(){
        if(!validateEmail($(this).val())){
            swal("Bruhh !", "Not a valid email");    
        }
    });
    function validateEmail(email){
        if(!email.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i)){
            return false;
        }
        else{
            return true;            
        }
    }
    function validateContact(contact){
        if(!contact.match(/^\d{10}$/)){
            //console.log('Nope !');
            return false;
        }
        else{
            //console.log('Match ');
            return true;
        }
    }
</script>