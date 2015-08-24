<form class="form-horizontal" method="post" action="revenue/fuelexp_details" id="clicksub">
    <fieldset>
        <legend>Fuel Expenses</legend>
        <div class="form-group">
            <label for="fuel" class="col-lg-2 control-label">Fuel type</label>
                <div class="col-lg-7">
                <select id="fuel" placeholder="type of fuel" class="form-control" name="fuel">
                  <option></option>
                  <option value="petrol">Petrol</option>
                  <option value="spetrol">Super Petrol</option>
                  <option value="diesel">Diesel</option>
                  <option value="sdiesel">Super Diesel</option>
                </select>
                </div>
                
                </div>

        <div class="form-group">
            <label for="capacity" class="col-lg-2 control-label">Capacity</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="capacity" placeholder="" name="capacity" required="">
            </div>
        </div>
       
        <div class="form-group">
            <label for="date" class="col-lg-2 control-label">Date</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="" id="date"  name="date" readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div> 
    

        
        <div class="form-group">
            <label for="paid" class="col-lg-2 control-label">Fuel Payment</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="payment" name="payment" placeholder="">
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
                $('#subloader2').load('/IOC/revenue/expenses').hide().fadeIn('slow');
            }
        });
    });

    </script>