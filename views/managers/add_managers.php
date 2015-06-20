
<div class="btn-group btn-group-justified">
    <a href="list_managers" class="btn btn-default">
            <div class="icon-preview"><i class="mdi-action-account-circle"></i>
            </div>
    Manager List</a>

    <a href="add_managers" class="btn btn-default">
            <div class="icon-preview"><i class="mdi-social-person-add"></i>
            </div>
    add new Manager</a>

    <a href="add_managers" class="btn btn-default">
            <div class="icon-preview"><i class="mdi-notification-event-note"></i>
            </div>
    Shift Management</a>

    <a href="database_managers" class="btn btn-default">
            <div class="icon-preview"><i class="mdi-file-cloud-circle"></i>
            </div>
    Database Management</a>

</div>
<h1> </h1>
<h2> </h2>

<!-- end of managers bar -->

<!--start of filling application -->
<div class="col-md-8">
<form class="form-horizontal">
    <fieldset>
        <legend>New Manager Details</legend> <!--font style-->

        <div class="form-group">
            <label for="managercode" class="col-lg-2 control-label">Manager Code</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="managercode" placeholder="autogenerate">
            </div>
        </div>

<!--names -->
    <div class="form-group">

      <div class="col-lg-2 control-label">
        <label for="fnameManager">First Name</label>
      </div>

      <div class="col-lg-4">
        <input type="text" class="form-control" id="fnameManager" placeholder="">
      </div>

     <div class="col-lg-2 control-label">
        <label for="lnameManager">Last Name</label>
      </div>

      <div class="col-lg-4">
        <input type="text" class="form-control" id="lnameManager" placeholder="">
      </div>

     </div>

<!--address -->

        <div class="form-group">
            <label for="address" class="col-lg-2 control-label">Address</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="address" placeholder="">
            </div>
        </div> 

<!--NIC-->
        <div class="form-group">
            <label for="nicnumber" class="col-lg-2 control-label">NIC Number</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" id="nicnumber" placeholder="">
            </div>
        </div>

<!--phone number -->

<div class="form-group">

      <div class="col-lg-2 control-label">
        <label for="hpnumber">Home Phone</label>
      </div>

      <div class="col-lg-4">
        <input type="text" class="form-control" id="hpnumber" placeholder="">
      </div>

     <div class="col-lg-2 control-label">
        <label for="mpnumber">Mobile Phone</label>
      </div>

      <div class="col-lg-4">
        <input type="text" class="form-control" id="mpnumber" placeholder="">
      </div>

     </div>


<!--birth day    **    <input type="date" name="field1" id="field1">** -->

            <div class="form-group">

                <label for="birthdate" class="col-lg-2 control-label">Birth Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" id="birthdate" placeholder="">
                    </div>

                <label for="hiredate" class="col-lg-2 control-label">Hire Date</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" id="hiredate" placeholder="">
                    </div>

            </div>



        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="sdasEmail">
            </div>
        </div>




        <div class="form-group">

            <label for="username" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-4">
                <input type="email" class="form-control" id="username" placeholder="">
            </div>

        

            <label for="userpassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-4">
                    <input type="password" class="form-control" id="userpassword" placeholder="">
                </div>
        </div>


        <div class="form-group">
            <label for="inputFile" class="col-lg-2 control-label">File</label>
            <div class="col-lg-10">
                <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                <input type="file" id="inputFile" multiple="">
            </div>
        </div>

        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
        </div>

        </div>


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </fieldset>
</form>
</div>
<!-- end of filling application-->