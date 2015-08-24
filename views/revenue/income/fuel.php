
    <legend>Active pumpers</legend>
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label" id="pmp-name"></label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="prd-name" placeholder="amount" name="">
        </div>
    	</div>

        

        <div class="form-group">
            <label for="fuel" class="col-lg-1 control-label">Fuel type</label>
                <div class="col-lg-2">
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
        <label for="select-date" class="col-lg-1 control-label">Select time(date)</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="select-date" placeholder="" name="">
        </div>
        </div> 


        <div class="col-lg-10">
            
        </div>


         
                
            


        <!--div class="col-lg-1">
            
        </div-->

            <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
            </div> 

        
            
         <div class="col-lg-10">
            
        </div>

         <div class="col-lg-10">
            
        </div>

         <div class="col-lg-10">
            
        </div>




        <div class="col-lg-7">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>Pumper name</th>
                        <th>Amount</th>
                        <th>Time</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <!--<tbody id="fbody">
                <td></td>
                <td></td>
                <td></td>
                <td><div class="icon-preview"><a href=""><i class="mdi-content-create"></i></a></div></td>
                <td><div class="icon-preview"><a href=""><i class="mdi-content-remove-circle"></i></a></div></td>
                </tbody>-->
            </table>
        </div>

<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('revenue/loadActivePumpers',function(data){
            console.log(data);
 //            var len = data.length;
 //            for(a=0;a<len;a++){
 // //               console.log(data[a].Name);
                
 //            }
        });


    });
</script>