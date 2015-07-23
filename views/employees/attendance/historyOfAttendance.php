<legend>Search</legend>
<form class="form-horizontal" method="post" action="" id="">
    <fieldset>

        <div class="form-group">


            <div class="col-lg-2 control-label">
                <label for="lnameManager">Employee Name</label>
            </div>

            <div class="col-lg-2">
                <select class="form-control" id="idDetails" >

                    <option selected disabled>Choose here</option>
                    <option value="admin" >Admin</option>
                    <option value="manager" >Manager</option>
                    <option value="pumpstaff">Pump Staff</option>

                </select>
            </div>
            <div class="col-lg-2 control-label">
                <label for="lnameManager">Month</label>
            </div>

            <div class="col-lg-2">
                <input type="text" class="form-control" name="lnameManager" placeholder="" 
                       title="Use only letters for Last Name" />
            </div>
            <div class="col-lg-2 control-label">
                <label for="lnameManager">Month</label>
            </div>

            <div class="col-lg-2">
                <input type="text" class="form-control" name="lnameManager" placeholder="" 
                       title="Use only letters for Last Name" />
            </div>
            <div class="col-lg-2 control-label">
                <label for="lnameManager">Month</label>
            </div>
        </div>
    </fieldset>
</form>


<!--<legend>Current Employees</legend>
<ul class="breadcrumb">
<?php foreach ($getemp1 as $emp) : ?>
               <li><a href="javascript:void(0)" id="pump_1"><?php echo ( $emp->managerCode); ?></a></li>
<?php endforeach; ?>
</ul>
-->
