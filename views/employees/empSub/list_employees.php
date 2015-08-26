
<style>
    #circle
    {
        border-radius:50% 50% 50% 50%;  
        width:70px;
        height:70px;
    }

    .hide{

        visibility: hidden

    }


</style>

<table class="table table-striped table-hover ">
    <col style="width:10%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Employee Type</th>
            <th>Employee Name</th>
            <th></th>
            <th >Edit Employee</th>
            <th>Delete Employee</th>
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
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Employee</legend></h4>

            </div>
   <form class="form-horizontal" id="updateemp_form" action="employees/updateEmployees" method="post" onsubmit="return submitForm();">
            <div class="modal-body">
             
                    <fieldset>






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
                                <input type="text" class="form-control" name="fnameManager" placeholder="" id="fname"
                                       title="Use only letters for First Name"/>
                            </div>

                            <div class="col-lg-2 control-label">
                                <label for="lnameManager">Last Name</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="lnameManager" placeholder="" id="lname"
                                       title="Use only letters for Last Name" />
                            </div>

                        </div>

                        <!--address -->

                        <div class="form-group">
                            <label for="address" class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="address" placeholder="" id="address"  >
                            </div>
                        </div> 


                        <!--phone number +nic-->

                        <div class="form-group">

                            <div class="col-lg-2 control-label">
                                <label for="nic">NIC Number</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nicnumber" placeholder="" id="nic"
                                       title="Use National ID card number eg:123456789v"/>
                            </div>

                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Mobile Phone</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="mpnumber" placeholder="" id="mbphone"
                                       title="Phone Number eg:0711234567 or 0112345678" />
                            </div>

                        </div>


<!--birth day    **    <input type="date" name="field1" name="field1">** -->

                        <div class="form-group">

                            <label for="birthdate" class="col-lg-2 control-label">Birth Date</label>
                            <div class="col-lg-4">
                                <input type="date" class="form-control" name="birthdate" placeholder="" id="bdate">
                            </div>

                            <label for="hiredate" class="col-lg-2 control-label">Hire Date</label>
                            <div class="col-lg-4">
                                <input type="date" class="form-control" name="hiredate" placeholder="" id="hdate">
                            </div>

                        </div>





                        <!--user name password-->

                        <div class="form-group">

                            <label for="username" class="col-lg-2 control-label">User Name</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="username"  placeholder="" id="uname"
                                       title="User Name must contain 8 or more Letters:"/>
                            </div>



                            <label for="userpassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" name="userpassword" placeholder="" id="upassword"
                                       title="Password must contain 6 or more characters including 1 number 1 capital letter 1 lower letter"/>
                            </div>
                        </div>

                        <!-- image upload -->
                        <div class="form-group">
                            <label for="inputFile" class="col-lg-2 control-label">File</label>
                            <div class="col-lg-10" id="wrapper">
                        <input readonly="" class="form-control floating-label" placeholder="" type="text" id="upic">
                        <input type="file" id="inputFile" name="inputFile">
                        <input type="hidden" id="sam" name="sam">
                            </div>
                        </div>

                       







                    </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>

            </div>
        </form>

        </div>
    </div>
</div>


<script type="text/javascript">
    
        $("#wrapper").on("change", "#inputFile", function () {

        var username = $("#inputFile").val();

        var fields = username.split("fakepath\\");
        var name = fields[1];
        document.getElementById("sam").value = name;
    });
    
    $(document).ready(function () {
        $.getJSON('employees/list_employees', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                $("." + x + "").append('<td id="' + data[x].employeeCode + "-empcode" + '">' + data[x].employeeCode + '</td>');
                $("." + x + "").append('<td id="' + data[x].employeeCode + "-emptype" + '">' + data[x].emptype + '</td>');
                $("." + x + "").append('<td id="' + data[x].employeeCode + "-empname" + '">' + data[x].firstName + " " + data[x].lastName + '</td>');
                $("." + x + "").append('<td id="' + "-emp" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].employeeCode + "-empme" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].employeeCode + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].employeeCode + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }

            $('.remove').click(function (e) {
                var id = $(this).attr('href');

                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Employee!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel it!",
                    closeOnConfirm: false,
                    closeOnCancel: false},
                function (isConfirm) {

                    if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: 'employees/delete_employees',
                            data: {idValue: id},
                            success: function (data) {
                                swal("Deleted!", "Your imaginary file has been deleted!", "success");
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/employees/loadlistemp').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Your Employee is safe :)", "error");
                    }
                });


                return false;
            });

            $('.edit').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-empme').text();
//assing values
                    $('#autocode').val(data[mycode].employeeCode);
                    $('#fname').val(data[mycode].firstName);
                    $('#lname').val(data[mycode].lastName);
                    $('#address').val(data[mycode].address);
                    $('#nic').val(data[mycode].nicNumber);
                    $('#mbphone').val(data[mycode].mobilePhone);
                    $('#bdate').val(data[mycode].birthDate);
                    $('#hdate').val(data[mycode].hireDate);
                    $('#uname').val(data[mycode].userName);
                    $('#upassword').val(data[mycode].userPassword);
                    $('#upic').val(data[mycode].userFile);
                   
                }, 250);
                e.preventDefault();
            });

        });
        $('#updateemp_form').submit(function (e) {
       
         e.preventDefault();
        var form = $('#updateemp_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').hide();
           $('#subloader2').empty();
           $('#subloader2').load('/IOC/employees/loadlistemp').hide().fadeIn('slow');
            }
        });
                                
                                
        });
    });

</script>


    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
               function submitForm() {
            console.log("submit event");
            var fd = new FormData(document.getElementById("updateemp_form"));
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