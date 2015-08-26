<form class="form-horizontal" method="post" action="revenue/addfuelexpDetails" id="clicksub">
    <fieldset>
        <legend>Fuel Expenses</legend>
        <div class="form-group">
            <label for="fuel" class="col-lg-2 control-label">Fuel type</label>
                <div class="col-lg-7">
                <select id="fuel" placeholder="type of fuel" class="form-control" name="fuel" id="fuel">
                  <option></option>
                  <option value="Petrol">Petrol</option>
                  <option value="SPetrol">Super Petrol</option>
                  <option value="Diesel">Diesel</option>
                  <option value="SDiesel">Super Diesel</option>
                </select>
                </div>
                
                </div>

        <div class="form-group">
            <label for="capacity" class="col-lg-2 control-label">Capacity</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="capacity" placeholder="" name="capacity" >
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
    <div class="form-actions col-lg-12">
        <div class="col-lg-50 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="lubricant_inc_history"><i class="mdi-social-poll"></i> History</a></div>

    </div>  

<script>
    $(document).ready(function(){

        $("#lubricant_inc_history").click(function(){
            $('#subloader2').load('/IOC/revenue/historyFuel',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });


        $("#fuel").change(function(){
            type = $(this).val();
            console.log(type);
            $.getJSON('revenue/loadFuelExpData', { type : type },function(data){
                console.log(data[0].Orderamnt);
                $("#capacity").val(data[0].Orderamnt);
            });
        });


        $("#clicksub").submit(function(e){
            e.preventDefault();
            var form = $("#clicksub");

            $.ajax({
                  type : form.attr('method'),
                  url : form.attr('action'),
                  data : form.serialize(),
                  success: function(data){
                    console.log(data);
                    if(data){
                        console.log(data);
                        swal("Success !", "Entries successfully added !", "success");
                        $('#subloader').load('/IOC/revenue/expenses',function(){
                            //console.log('expenses !');
                            $('#subloader').hide();
                            $('#subloader').fadeIn('fast');
                            window.location.hash = "";
                            window.location.hash = "/revenue/expenses";
                        });
                    }
                  }
            });
        });
    });  
</script>