<table class="table table-striped table-hover ">
    <thead>
        <tr>
            
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company</th>
            <th>Type</th>
                        <th>Edit</th>
                                    <th>Delete</th>
        </tr>
    </thead>
    
    <tbody>
    </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit entry</legend></h4>

            </div>
       
    

            <div class="modal-body" >
                
     <form class="form-horizontal"  id="edit_supplier_form" method="post" action="assets/update_supplier">
    <fieldset>
        <legend>Add Supplier</legend>
            
            <div class="form-group">    
            <label for="first_name" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="first_name" name="fname" placeholder="First Name"  placeholder="First Name" pattern="[A-Za-z]{5,15}" title="Must contain characters between 5 or 15" required="">                     
                </div>
                   <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="last_name"  name="lname" placeholder="Last Name" pattern="[A-Za-z]{5,15}" title="Must contain characters between 5 or 15" required="">             
                </div>           
            </div>
            
            <div class="form-group">
            <label for='company' class="col-lg-2 control-label">Company</label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" pattern="[A-Za-z0-9\.\@]{4,30}" title="Must contain characters between 4 or 30" required="">            
                </div>
                         
            </div> 
               <div class="form-group">
            <label for='nic' class="col-lg-2 control-label">NIC Number </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][vV]" title="Must contain NIC number as XXXXXXXXXV" required="">            
                </div>
                              
            </div>
        <div class="form-group">
            <label for='email' class="col-lg-2 control-label">Email </label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" pattern="([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})" title="Please enter email  as xxxxxxx@email.com" required="">            
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
                     <input type="text" class="hidden" id="iddd" name="iddd"> 
                </div>
                              
            </div>
                 <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Supplier Type</label> 
       
            <div class="col-lg-4">
                <select id="type" name="type" placeholder="supplier" class="form-control">
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
                <button class="btn btn-default" id="cancel_reading">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

                
                
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('assets/load_Supplier',function(data){
         

            var len = data.length;
            for(x=0;x<len;x++){
                $("tbody").append('<tr class="' + x +'"id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-Fname" + '">' + data[x].Fname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-Lname" + '">' + data[x].Lname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-Company" + '">' + data[x].Company + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-Type" + '">' + data[x].Type + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-lolme" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function(e){
                var id = $(this).attr('href');
                 swal({   title: "Are you sure?",  
                    text: "You will not be able to recover this imaginary file!", 
                    type: "warning",   
                    showCancelButton: true, 
                    confirmButtonColor: "#DD6B55",  
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false },
                function(){   swal("Deleted!", "Your imaginary file has been deleted.", "success");
                $.post('assets/remove_supplier', { ID : id }, function(data){
                    console.log(data);
                    
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/assets/view_supplier',function(){
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('slow');
                    });
                }); });
                return false;
            });

            $('.edit').click(function(e){
                var id = $(this).attr('href');
      
                $('#myModal').modal('show');
                setTimeout(function(){
                     var mycode=$('#' + id + '-lolme').text();         
                    $('#iddd').val(data[mycode].id);
                    $('#first_name').val(data[mycode].Fname);
                    $('#last_name').val(data[mycode].Lname);
                    $('#company').val(data[mycode].Company);
                    $('#address').val(data[mycode].Address);
                    $('#phone_number').val(data[mycode].PNumber);
                    $('#email').val(data[mycode].Email);
                    $('#nic').val(data[mycode].NIC);
                    $('#type').val(data[mycode].Type);
                },250);
                e.preventDefault();
            });

        });
            $('#edit_supplier_form').submit(function(e2){
                e2.preventDefault();
                 var form = $('#edit_supplier_form');
        $.ajax({
            
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').hide();
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/assets/view_supplier');
            }
        });
            });
    });

</script>
