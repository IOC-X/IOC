<div>
    <div class="col-md-12">
        <form id="forminsertClients" class="form-horizontal" method="POST" action="clients/insertClients" enctype="multipart/form-data" >
            <fieldset>
                <legend><ul><b>New Client Details</b></ul></legend>

                <div class="form-group">
                    <label for="client_code" class="col-lg-2 control-label">Client Code</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_code" id="autocode" placeholder="">
                    </div>
                </div>

                    
                 <div class="form-group">
                    <label for="client_fname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_fname" placeholder=""  id="Fname">
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="client_lname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_lname" placeholder="" id="Lname" >
                    </div>
                </div> 

           

                <div class="form-group">
                    <label for="client_address" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_address" placeholder="" id="address" >
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="client_nic" class="col-lg-2 control-label">NIC Number</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_nic" placeholder="Eg: 921821298V" id="NIC" pattern="[0-9]{9}[V]$" title="" required="" title="Example 921821298V">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="client_phone" class="col-lg-2 control-label">Mobile Number</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_phone" placeholder="Eg: 0778394947" id="Phone" pattern="[0-9-]{11}" title="" required="" title="Example 071-9898987">
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="client_purchase_date" class="col-lg-2 control-label">Purchase Date</label>
                    <div class="col-lg-2">
                        <input type="date" class="form-control" name="client_purchase_date" placeholder="" id="purchasedate" >
                    </div>
                </div>
                    
                
                <div class="form-group">
                    <label for="client_purchase_amount" class="col-lg-2 control-label">Purchase Amount</label>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" name="client_purchase_amount" placeholder="Rs. " id="Amount" pattern="[0-9]{1,}" title="" required="" title="Example Rs.2000" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputFile" class="col-lg-2 control-label">Image</label>
                    <div class="col-lg-10" id="wrapper">
                        <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                        <input type="file" id="inputFile" name="inputFile">
                        <input type="hidden" id="client_image" name="client_image">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success btn-raised" id="form-submitted" name="form-submitted">Submit</button>
                      
                    </div>
                </div>
                
                  

            </fieldset>
        </form>
       </div>

    </div>
    

<script type="text/javascript">
     $('#forminsertClients').submit(function (e) {
        e.preventDefault();
        alert("LOL");
        var form = $('#forminsertClients');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader').empty();
                $('#subloader').load('/IOC/clients/listclients').hide().fadeIn('slow');
            }
        });
        
         $("#wrapper").on("change", "#inputFile", function () {
        //Do something
        var username = $("#inputFile").val();

        var fields = username.split("fakepath\\");
        var name = fields[1];
        document.getElementById("client_image").value = name;
    });
    });

</script>
