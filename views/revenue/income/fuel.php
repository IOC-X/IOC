
    <legend>Active pumpers</legend>
        <div class="form-group">
            
            <label class="col-lg-1 control-label" id="pumpNamelbl">Pumper name</label>
            <div class="col-lg-2">
            <select id="pumperName" placeholder="type of fuel" class="form-control" name="pmpName">
              <option></option>
              
            </select>
            </div>
        </div>
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label" id="pmp-name"></label>
        <div class="col-lg-2">
            <input type="text" class="form-control" id="amount" placeholder="amount" name="">
        </div>
    	</div>

        

        <div class="form-group">
            <label for="fuel" class="col-lg-1 control-label">Fuel type</label>
                <div class="col-lg-2">
                <select id="fuelA" placeholder="type of fuel" class="form-control" name="fuel">
                  <option></option>
                  <option value="petrol">Petrol</option>
                  <option value="spetrol">Super Petrol</option>
                  <option value="diesel">Diesel</option>
                  <option value="sdiesel">Super Diesel</option>
                </select>
                </div>
        </div>


         
                
            


        <!--div class="col-lg-1">
            
        </div-->

            <div class="form-group">
            <div class="col-lg-10">
                <button type="submit" class="btn btn-primary" id="submitIncome">Submit</button>
            </div>
            </div> 

        
            
         <div class="col-lg-10">
            
        </div>

         <div class="col-lg-10">
            
        </div>

         <div class="col-lg-10">
            
        </div>




        
<script type="text/javascript">
    var amount = $("#prd-name").val();
    var fuel = $("#fuel").val();
    
//    //VALIDATIONS
//        if ( amount== '') {
//
//                swal("Oops...", "Insertion Failed. Please fill the amount....!!", "error");
//                return false;
//            }
////        else if ( fuel== '') {
////
////                swal("Oops...", "Insertion Failed. Please Select the fuel type....!!", "error");
////                return false;
////            }
////            else 
//    
    $(document).ready(function(){
        $.getJSON('revenue/loadActivePumpers',function(data){
            console.log(data[0].empCode);
            var len = data.length;
            for(a=0;a<len;a++){
 //               console.log(data[a].Name);
                $("#pumperName").append("<option value='"+ data[a].empCode +" class='"+ data[a].empCode +"'>" + data[a].empCode + "</option>");
                //$("#price").append(data[a].price);
            }
        });


    });
    $("#submitIncome").click(function(){
        pmpName = $("#pumperName option:selected").text();
        amount = $("#amount").val();
        fuelType = $("#fuelA").val();
    
        $.post('revenue/insertFuelIncome', { pmpName : pmpName , amount : amount , fuelType : fuelType } ,function(data){
            console.log(data);
            swal("Success !", "Entry successfully added !", "success");
        });
    });
</script>