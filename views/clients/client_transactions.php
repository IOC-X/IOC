<form class="form-horizontal" method="post" action="clients/insertTranactions" id="clienttrasactions">
    <fieldset>
        <legend>Add New Transaction</legend>
        <div class="form-group">
            <label for="shiftid" class="col-lg-2 control-label">Client ID</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="client_id" placeholder="Client ID OR Phone" name="client_id" >
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Client Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="client_name" placeholder="" name="client_name" pattern="[a-z A-Z]{1,}" title="Use Only Letters" required="" >
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Pump Vehicle Number</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="client_pump_vechicle" placeholder="HA-5676" name="client_pump_vechicle" pattern="[A-Z-]{3}[0-9]{4}" required="" title="CA-8908">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Client Pump by</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="client_pump_by" placeholder="" name="client_pump_by" pattern="[a-z A-Z]{1,}" title="Use Only Letters" required="" >
            </div>
        </div>        
        <div class="form-group">
            <label for="pump_date" class="col-lg-2 control-label">Pump Date</label>
            <div class="col-lg-7">
                <input type="date" class="form-control" id="pump_date" placeholder=" " name="pump_date">
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Fuel Type</label>
            <div class="col-lg-7">
                <select id="shiftcolor"  class="form-control" name="client_pump_no" id="client_pump_no" required="">
                <option>Fuel Type</option>
                <option>Petrol</option>
                <option>Diesel</option>
                <option>Gas</option>
                </select>
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftcolor" class="col-lg-2 control-label">Pump Number</label>
            <div class="col-lg-7">
                <select id="shiftcolor"  class="form-control" name="client_pump_no" id="client_pump_no" required="">
                    <option>Pump 1</option>
                    <option>Pump 2</option>

                </select>
                <input type="hidden" id="client_input" name="client_input">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Pump Liters</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="client_pump_liters"  name="client_pump_liters" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div> 
        
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Pump Value</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="client_pump_value"  name="client_pump_value" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div>       
        
        
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>	
    </fieldset>
</form>


<script type="text/javascript">
    $('#clienttrasactions').submit(function (e) {
        e.preventDefault();
       alert("LOL");
        var form = $('#clienttrasactions');
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
    
    
    
    </script>
    