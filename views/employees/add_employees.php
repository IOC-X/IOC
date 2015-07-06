<div>
        <script src="views/managers/js/formvalnameation.js" ></script>

<!--start of filling application -->
<div class="col-md-12">
    <form class="form-horizontal" method="POST" action="employees/insertEmployees" >
    <fieldset>
        <legend>New Manager Details</legend> <!--font style-->

        <div class="form-group">
            <label for="managercode" class="col-lg-2 control-label">Manager Code</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="managercode" placeholder="autogenerate">
            </div>
        </div>
           
<!--names -->
    <div class="form-group">

      <div class="col-lg-2 control-label">
        <label for="fnameManager">First Name</label>
      </div>

      <div class="col-lg-4">
          <input type="text" class="form-control" name="fnameManager" placeholder="" required
                 pattern="[a-zA-Z]{1,20}" title="Use only letters for First Name"/>
      </div>

     <div class="col-lg-2 control-label">
        <label for="lnameManager">Last Name</label>
      </div>

      <div class="col-lg-4">
          <input type="text" class="form-control" name="lnameManager" placeholder="" 
                 pattern="[a-zA-Z]{1,20}" title="Use only letters for Last Name" required/>
      </div>

     </div>

<!--address -->

        <div class="form-group">
            <label for="address" class="col-lg-2 control-label">Address</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="address" placeholder="" required >
            </div>
        </div> 

<!--NIC-->
        <div class="form-group">
            <label for="nicnumber" class="col-lg-2 control-label">NIC Number</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="nicnumber" placeholder="" required
                       pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][vV]" title="Use National ID card number eg:123456789v"/>
            </div>
        </div>

<!--phone number -->

<div class="form-group">

      <div class="col-lg-2 control-label">
        <label for="hpnumber">Home Phone</label>
      </div>

      <div class="col-lg-4">
          <input type="text" class="form-control" name="hpnumber" placeholder="" required
                 pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Phone Number eg:0711234567 or 0112345678" />
      </div>

     <div class="col-lg-2 control-label">
        <label for="mpnumber">Mobile Phone</label>
      </div>

      <div class="col-lg-4">
          <input type="text" class="form-control" name="mpnumber" placeholder="" required
                 pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Phone Number eg:0711234567 or 0112345678" />
      </div>

     </div>


<!--birth day    **    <input type="date" name="field1" name="field1">** -->

            <div class="form-group">

                <label for="birthdate" class="col-lg-2 control-label">Birth Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="birthdate" placeholder="" required>
                    </div>

                <label for="hiredate" class="col-lg-2 control-label">Hire Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="hiredate" placeholder="" required>
                    </div>

            </div>


<!-- emp type -->
        <div class="form-group">
            <label for="emptype" class="col-lg-2 control-label" >Types of Employment</label>
            <div class="col-lg-10">
                <select class="form-control" name="emptype" required="required">
                    
                    <option selected disabled>Choose here</option>
                    <option value="admin" >Admin</option>
                    <option value="manager" >Manager</option>
                    <option value="pumpstaff">Pump Staff</option>

                </select>
            </div>
        </div>


<!--email -->
<div name="changer">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" name="inputEmail" placeholder="Email"
                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" title="Eg: example@gmail.com" />
            </div>
        </div>


<!--user name password-->

        <div class="form-group">

            <label for="username" class="col-lg-2 control-label">User Name</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="username" placeholder="" 
                pattern="[a-zA-Z]{8,}" title="User Name must contain 8 or more Letters:"/>
            </div>

        

            <label for="userpassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-4">
                    <input type="password" class="form-control" name="userpassword" placeholder=""
                           pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password must contain 6 or more characters including 1 number 1 capital letter 1 lower letter"/>
                </div>
        </div>
</div>
<!-- image upload -->
        <div class="form-group">
            <label for="inputFile" class="col-lg-2 control-label">File</label>
            <div class="col-lg-10">
                <input readonly="" class="form-control floating-label" placeholder="" type="text">
                <input name="inputFile" type="file" >
            </div>
        </div>


<!-- comment area-->
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" name="textArea"></textarea>
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










<!--
<script>
function loadlist()
{
    
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("subloader").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","employees/list_employees",true);
xmlhttp.send();
}
</script>-->
