<div>
    <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="clients/insertClients" enctype="multipart/form-data" id="form_insertClients" >
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
                        <input type="text" class="form-control" name="client_nic" placeholder="Eg: 921821298V" id="NIC" >
                    </div>
                </div> 

                <div class="form-group">
                    <label for="client_phone" class="col-lg-2 control-label">Mobile Number</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="client_phone" placeholder="Eg: 0778394947" id="Phone" >
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
                        <input type="text" class="form-control" name="client_purchase_amount" placeholder="" id="Amount" >
                    </div>
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
    
<script type="text/javascript">
     $('insertClients').submit(function (e) {
        e.preventDefault();
        var form = $('#insertClients');
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
    });
    
//      $('#insertClients').submit(function()){  
//                console.log('Add Client');
//            $("#form-submitted").click(function(){
//            //assigning values
//            var autocode=$().val("autocode");
//            var fname = $("Fname").val();
//            var lname = $("Lname").val();
//            var address = $("#address").val();
//            var nic = $("#NIC").val();
//            var phone = $("#Phone").val();
//            var purchasedate = $("#purchasedate").val();
//            var amount = $("#Amount").val();
//        });
//    });
//    
    
    
//
//    $("#wrapper").on("change", "#inputFile", function () {
//        //Do something
//        var username = $("#inputFile").val();
//
//        var fields = username.split("fakepath\\");
//        var name = fields[1];
//        document.getElementById("sam").value = name;
//    });
    
//    $("#typeinemp").on("change", "#idDetails", function () {
//        //Do something
//        var e = document.getElementById("idDetails");
//    var strUser = e.options[e.selectedIndex].text;
//       document.getElementById("emptype").value = strUser;
//    
//    });

// 
//    $('#insertClients').submit(function(e){
//        alert('lefkldfk');
//        
//        console.log('asdads');
//        e.preventDefault();
//       
//        var form = $('#insertClients');
//        $.ajax({
//            type: form.attr('method'),
//            url: form.attr('action'),
//            data: form.serialize(),
//            success: function (data) {
//                console.log(data);
//                $('#subloader').empty();
//                $('#subloader').load('/IOC/clients/listclients').hide().fadeIn('slow');
//            }
//        });
//    });
   //code generator   
  //  var mg = "";

//    $("#idDetails").change(function () {
//        var idDetails1 = document.getElementById("idDetails").value;
//        if (idDetails1 == "pumpstaff")
//        {
//            mg = "PM";
//            $("#changer").hide();
//
//            document.getElementById("changevaluename").value = "nullnull";
//            document.getElementById("changevaluepassword").value = "nullNull123";
//        } else
//        {
//            mg = "MG";
//
//            document.getElementById("changevaluename").value = "";
//            document.getElementById("changevaluepassword").value = "";
//            $("#changer").show();
//
//        }
//        var d = new Date();
//        var x = d.getYear() + d.getMonth();
//        var y = d.getDate() - d.getHours() - d.getMinutes() - d.getSeconds() + d.getMilliseconds();
//
//        var shift = mg + "-" + (x + y);
//        document.getElementById('autocode').value = shift;
//    });

//    
//            $('#insertClients').submit(function()){  
//                console.log('Add Client');
//            $("#form-submitted").click(function(){
//            //assigning values
//            var fname = $("Fname").val();
//            var lname = $("Lname").val();
//            var address = $("#address").val();
//            var nic = $("#NIC").val();
//            var phone = $("#Phone").val();
//            var purchasedate = $("#purchasedate").val();
//            var amount = $("#Amount").val();
//        });
//    });
    
    //
</script>
