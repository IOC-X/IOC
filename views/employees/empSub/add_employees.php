<div>

    <!--start of filling application -->
    <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="employees/insertEmployees" enctype="multipart/form-data" id="insertEmployees" onsubmit="return submitForm();">
            <fieldset>
                <legend>New Employee Details</legend> <!--font style-->

                <div class="form-group">
                    <label for="managercode" class="col-lg-2 control-label">Employee Code</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="managercode" id="autocode" placeholder="autogenerate" readonly>
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="fnameManager">First Name</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="fnameManager" placeholder="" 
                               pattern="[a-zA-Z]{1,20}" title="Use only letters for First Name"/>
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="lnameManager">Last Name</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="lnameManager" placeholder="" 
                               pattern="[a-zA-Z]{1,20}" title="Use only letters for Last Name" required />
                    </div>

                </div>

                <!--address -->

                <div class="form-group">
                    <label for="address" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="address" placeholder=""  required>
                    </div>
                </div> 


                <!--phone number +nic -->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="nic">NIC Number</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="nicnumber" placeholder="" required=""
                              pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][vV]" title="Use National ID card number eg:123456789v"/>
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="mpnumber">Mobile Phone</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="mpnumber" placeholder="" required=""
                               pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Phone Number eg:0711234567 or 0112345678"/>
                    </div>

                </div>


<!--birth day    **    <input type="date" name="field1" name="field1">** -->

                <div class="form-group">

                    <label for="birthdate" class="col-lg-2 control-label">Birth Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="birthdate" placeholder="" required="">
                    </div>

                    <label for="hiredate" class="col-lg-2 control-label">Hire Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="hiredate" placeholder="" required="">
                    </div>

                </div>


                <!-- emp type -->
                <div class="form-group">
                    <label for="emptype" class="col-lg-2 control-label" >Types of Employment</label>
                    <div class="col-lg-10" id="typeinemp">
                        <select class="form-control" id="idDetails" name="idDetails" required>

                            <option selected disabled>Choose here</option>
                            <option value="admin" >Admin</option>
                            <option value="manager" >Manager</option>
                            <option value="pumpstaff">Pump Staff</option>
                            <option value="pumpstaff">Service Staff</option>
                        </select>
                         <input type="hidden" id="emptype" name="emptype">
                    </div>
                </div>



                <div id="changer">
<!-- name -->
                <div class="form-group">
                        <label for="username" class="col-lg-2 control-label">User Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="username" id="changevaluename" placeholder="" required=""
                                   pattern="[a-zA-Z]{8,}" title="User Name must contain 8 or more Letters:"/>
                        </div>
                </div>                    


                    <!-- password-->

                    <div class="form-group">

                        <label for="userpassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-4">
                            <input type="password" class="form-control" name="userpassword" id="changevaluepassword" placeholder="" required=""
                                  pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password must contain 6 or more characters including 1 number 1 capital letter 1 lower letter"/>
                        </div>
                        <label for="cpassword" class="col-lg-2 control-label">Confirm Password</label>
                        <div class="col-lg-4">
                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="" required="" />
                        </div>
                    </div>
                </div>
                <!-- image upload -->
                
                
                <div class="form-group">
                    <label for="file" class="col-lg-2 control-label">File</label>
                    <div class="col-lg-10" id="wrapper">
                        <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                       <input type="file" name="file" id="file">
                       <input type="hidden" id="sam" name="sam">
                    </div>
                </div>
           


                <!-- end -->
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                         
                        <input type="reset" class="btn btn-default">
                        <input type="submit" class="btn btn-primary"  >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <!-- end of filling application-->


</div>
<script  type="text/javascript">
    $("#wrapper").on("change", "#file", function () {

        var username = $("#file").val();
        var fields = username.split("fakepath\\");
        var name = fields[1];
        document.getElementById("sam").value = name;
    });
    
    $("#typeinemp").on("change", "#idDetails", function () {
        //Do something
        var e = document.getElementById("idDetails");
    var strUser = e.options[e.selectedIndex].text;
       document.getElementById("emptype").value = strUser;
    
    });


    $('#insertEmployees').submit(function (e) {
        var pic = document.getElementById("sam").value; 
        if(pic == "")
        {
            document.getElementById("sam").value = "default.png";
            
        }
        
        
        var pass = document.getElementById("changevaluepassword").value; 
        var cpass= document.getElementById("cpassword").value; 
        
        
        if(pass == cpass )
        {
        e.preventDefault();
        
        var form = $('#insertEmployees');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader2').empty();
                $('#subloader2').load('/IOC/employees/loadlistemp').hide().fadeIn('slow');
            }
        });
        
        }
        else{
            document.getElementById("changevaluepassword").focus();
            document.getElementById("cpassword").value = "";
            document.getElementById("changevaluepassword").value = "";
            swal("Password and Confirm Password not Match !!!")

        }
    });

    //code generator
    var mg = "";

    $("#idDetails").change(function () {
        var idDetails1 = document.getElementById("idDetails").value;
        if (idDetails1 === "pumpstaff")
        {
            mg = "PM";
            $("#changer").hide();

            document.getElementById("changevaluename").value = "nullnull";
            document.getElementById("changevaluepassword").value = "nullNull123";
            document.getElementById("cpassword").value = "nullNull123";
        } else
        {
            mg = "MG";

            document.getElementById("changevaluename").value = "";
            document.getElementById("changevaluepassword").value = "";
            document.getElementById("cpassword").value = "";
            $("#changer").show();

        }
        var d = new Date();
        var x = d.getYear() + d.getMonth();
        var y = d.getDate() - d.getHours() - d.getMinutes() - d.getSeconds() + d.getMilliseconds();

        var shift = mg + "-" + (x + y);
        document.getElementById('autocode').value = shift;
    });

</script>

    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
               function submitForm() {
            console.log("submit event");
            var fd = new FormData(document.getElementById("insertEmployees"));
            fd.append("label", "IOC");
            $.ajax({
              url: "/IOC/views/employees/upload.php",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function( data ) {
                console.log("PHP Output:");
                console.log( data );
            });
            return false;
        }
</script>
    
    