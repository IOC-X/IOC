<form class="form-horizontal" id="insert_supplier_form" method="post" action="assets/insert_supplier" >
    <fieldset>
        <legend>Add Supplier</legend>
            
            <div class="form-group">    
            <label for="first_name" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="first_name" name="fname" placeholder="First Name" pattern="[A-Za-z]{5,15}" title="Must contain characters between 5 or 15">                     
                </div>
                   <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="last_name"  name="lname" placeholder="Last Name" pattern="[A-Za-z]{5,15}" title="Must contain characters between 5 or 15">             
                </div>           
            </div>
            
            <div class="form-group">
            <label for='company' class="col-lg-2 control-label">Company</label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" pattern="[A-Za-z0-9\.\@]{4,30}" title="Must contain characters between 4 or 30"  >            
                </div>
                         
            </div> 
               <div class="form-group">
            <label for='nic' class="col-lg-2 control-label">NIC Number </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][vV]" title="Must contain NIC number as XXXXXXXXXV">            
                </div>
                              
            </div>
        <div class="form-group">
            <label for='email' class="col-lg-2 control-label">Email </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" pattern="([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})" title="Please enter email  as xxxxxxx@email.com">            
                </div>
                              
        </div>
             <div class="form-group">
            <label for='phone_number' class="col-lg-2 control-label">Phone Number </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="phone_number" name="pnumber" placeholder="Phone Number" pattern="[\+][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Must contain Phone Number as +94XXXXXXXXX">            
                </div>
                              
            </div>
             <div class="form-group">
            <label for='address' class="col-lg-2 control-label">Address </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">            
                </div>
                              
            </div>
                 <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Supplier Type</label> 
       
            <div class="col-lg-4">
                <select id="supplier" name="type" placeholder="supplier" class="form-control" name="supplier">
                  <option></option>
                  <option value="Grease Pump">Grease Pump</option>
                  <option value="Hydraulic Hoists">Hydraulic Hoists</option>
                  <option value="Shampoo machine">Shampoo machine</option>
                  <option value="Oil Drainer">Oil Drainer</option>
                </select>
        </div>
                 </div>
         
         <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                
                <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>


    <script>
       $('#insert_supplier_form').submit(function(e1)
       { 
            e1.preventDefault();
            var fname = $('#first_name').val();	      
            var lname = $('#last_name').val();
            var company = $('#company').val();
            var pnumber = $('#phone_number').val();
            var nic = $('#nic').val();
            var address = $('address').val();
            var type = $('#type').val();
            var email = $('#email').val();
                
            if(fname== "" || lname == "" || company == ""  || pnumber == "" || nic == "" || address == "" || type == "" || email == "" )
            {
                  swal("Bump !", "Please fill every field");
                return false;
                
            }
            
            else{
            
            var form = $('#insert_supplier_form');
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data: form.serialize(),
                success: function (data) {
                console.log(data);
                
                swal("Supplier added successfully!", "click okay to continue", "success");

                $('#subloader2').empty();
                $('#subloader2').load('/IOC/assets/view_supplier').hide().fadeIn('slow');
            }
               
                   
                
               
              }
              
            );
           
            }
 
    });
    </script>
   
