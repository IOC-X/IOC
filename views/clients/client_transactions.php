<form class="form-horizontal" method="post" action="employees/shift_newdetails" id="clicksub">
    <fieldset>
        <legend>Add New Transaction</legend>
        <div class="form-group">
            <label for="shiftid" class="col-lg-2 control-label">Client ID</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftid" placeholder="Client ID OR Phone" name="shiftid" >
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Client Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftname" placeholder="Auto Fill" name="shiftname"
                       pattern="" title="" required="" readonly="">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Client Pump Vehicle Number</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftname" placeholder="Auto Fill" name="shiftname"
                       pattern="" title="" required="" readonly="">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Client Pump by</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftname" placeholder="Auto Fill" name="shiftname"
                       pattern="" title="" required="" readonly="">
            </div>
        </div>        
        <div class="form-group">
            <label for="shiftduration" class="col-lg-2 control-label">Pump Date</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftduration" placeholder="eg: 7.00 " name="shiftduration"
                       pattern="[0-9.]{1,10}" title="Use only numbers " required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Fule Type</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="shiftrate"  name="shiftrate" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftcolor" class="col-lg-2 control-label">Pump Number</label>
            <div class="col-lg-7">
                <select id="shiftcolor"  class="form-control" name="shiftcolor" onchange="loadcolor()" required="">
                    <option></option>

                </select>
                <input type="hidden" id="shiftco" name="shiftco">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Pump Liters</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="shiftrate"  name="shiftrate" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div> 
        
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Pump Value</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="shiftrate"  name="shiftrate" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div>       
        
        
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>	
    </fieldset>
</form>
