<form class="form-horizontal" method="post" action="revenue/pay_details" id="clicksub">
    <fieldset>
        <legend>Add Payment</legend>
        <div class="form-group">
            <label for="empid" class="col-lg-2 control-label">Employee Code</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="empid" placeholder="" name="empid" >
            </div>
        </div>
        <div class="form-group">
            <label for="empname" class="col-lg-2 control-label">Employee Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="empname" placeholder="" name="empname"
                       pattern="[a-zA-Z]{1,20}" title="Use only letters " required="">
            </div>
        </div>
        <div class="form-group">
            <label for="nic" class="col-lg-2 control-label">NIC</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="nic" placeholder="" name="nic"
                       pattern="[0-9V]{1,10}" title="Use only numbers " required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="date" class="col-lg-2 control-label">Date</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="" id="date"  name="date" readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div> 
        <div class="form-group">
            <label for="shifttype" class="col-lg-2 control-label">Shift Type</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="shifttype" name="shifttype" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <label for="grosssal" class="col-lg-2 control-label">Gross Salary</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="grosssal" name="grosssal" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <label for="epf" class="col-lg-2 control-label">EPF(12%)</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="epf" name="epf" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <label for="netsal" class="col-lg-2 control-label">Net Salary</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="netsal" name="netsal" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <label for="paid" class="col-lg-2 control-label">Paid</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="paid" name="paid" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>	
    </fieldset>
</form>


<script>
    $('#clicksub').submit(function (e) {
    //alert("fdfsdf");
        e.preventDefault();
        var form = $('#clicksub');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader2').empty();
                $('#subloader2').load('/IOC/revenue/payment').hide().fadeIn('slow');
            }
        });
    });

    </script>