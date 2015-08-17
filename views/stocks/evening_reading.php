<form class="form-horizontal" method="post" id="calculate_evening" action="stocks/insertEveningOrder">
    <fieldset>
        <legend>Evening stock readings</legend>
            
            <label id="qnty-label"></label>
            <label id="suggestion-label"></label>
            <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Petrol</label>
                <div class="col-lg-4">
                <select id="petrol" placeholder="petrol" class="form-control" name="petrol">
                  <option></option>
                  <option value="200">200</option>
                  <option value="700">700</option>
                  <option value="1200">1200</option>
                </select>
                </div>
                <div class="col-lg-3">
                    <label class="qnty" id="qntyPetrol"></label>
                    <input type="hidden" name="qntyPetrol" id="hiddenPetrol">
                </div>
                
            </div>
            <div class="form-group">
            <label for="spetrol" class="col-lg-2 control-label">Super petrol</label>
                <div class="col-lg-4">
                  <select id="spetrol" placeholder="petrol" class="form-control" name="spetrol">
                    <option></option>
                    <option>200</option>
                    <option>700</option>
                    <option>1200</option>
                  </select>
                </div>
                <div class="col-lg-3">
                    <label class="qnty" id="qntySPetrol"></label>
                    <input type="hidden" name="qntySPetrol" id="hiddenSPetrol">
                </div>
                
            </div>
            <div class="form-group">
            <label for="diesel" class="col-lg-2 control-label">Diesel</label>
                <div class="col-lg-4">
                  <select id="diesel" placeholder="petrol" class="form-control" name="diesel">
                    <option></option>
                    <option>200</option>
                    <option>700</option>
                    <option>1200</option>
                  </select>
                </div>
                <div class="col-lg-3">
                    <label class="qnty" id="qntyDiesel"></label>
                    <input type="hidden" name="qntyDiesel" id="hiddenDiesel">
                </div>
                
            </div>
            <div class="form-group">
            <label for="sdiesel" class="col-lg-2 control-label">Super diesel</label>
                <div class="col-lg-4">
                  <select id="sdiesel" placeholder="petrol" class="form-control" name="sdiesel">
                    <option></option>
                    <option>200</option>
                    <option>700</option>
                    <option>1200</option>
                  </select>
                </div>
                <div class="col-lg-3">
                    <label class="qnty" id="qntySDiesel"></label>
                    <input type="hidden" name="qntySDiesel" id="hiddenSDiesel">
                </div>
                
            </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary" id="calculate">Confirm orders</button>
                <span class="order"></span>
            </div>
        </div>
    </fieldset>
</form>


    <script type="text/javascript">
    $('#cancel_reading').click(function(e){
        $('#subloader2').fadeOut('500',function(){
            delete window.petrol;
            delete window.spetrol;
            delete window.diesel;
            delete window.sdiesel;
            $('#subloader2').empty();
        });
        e.preventDefault();
    });
    </script>
    <script type="text/javascript">
    $('#petrol').change(function(){

        issetQntyLabel();
        
        var reading = $('#petrol').val();
        window.petrol = qntyPetrol(reading);
        $('#qntyPetrol').empty();
        setTimeout(function(){
            $('#qntyPetrol').append('<label style="margin-left:50px">' + qntyPetrol(reading) + '</label>').hide().fadeIn('slow'); 
            $('#hiddenPetrol').val(Number(qntyPetrol(reading)));
        },500);
        
        $('#stock-graph').load('/IOC/stocks/stockgraph').hide().fadeIn('slow');


      
    });
    $('#spetrol').change(function(){
        
        issetQntyLabel();
        var reading = $('#spetrol').val();
        window.spetrol = qntySPetrol(reading);
        $('#qntySPetrol').empty();
        setTimeout(function(){
            $('#qntySPetrol').append('<label style="margin-left:50px">' + qntySPetrol(reading) + '</label>').hide().fadeIn('slow');    
            
            $('#hiddenSPetrol').val(Number(qntySPetrol(reading)));
        },500);

        $('#stock-graph').load('/IOC/stocks/stockgraph').hide().fadeIn('slow');
        
      
    });
    $('#diesel').change(function(){
        
        issetQntyLabel();
        var reading = $('#diesel').val();
        window.diesel = qntyDiesel(reading);
        $('#qntyDiesel').empty();
        setTimeout(function(){
            $('#qntyDiesel').append('<label style="margin-left:50px">' + qntyDiesel(reading) + '</label>').hide().fadeIn('slow');    
            
            $('#hiddenDiesel').val(Number(qntyDiesel(reading)));
        },500);
        
        $('#stock-graph').load('/IOC/stocks/stockgraph').hide().fadeIn('slow');


    });
    $('#sdiesel').change(function(){
        
        issetQntyLabel();
        var reading = $('#sdiesel').val();
        window.sdiesel = qntySDiesel(reading);
        $('#qntySDiesel').empty();
        setTimeout(function(){
            $('#qntySDiesel').append('<label style="margin-left:50px">' + qntySDiesel(reading) + '</label>').hide().fadeIn('slow');    
            
            $('#hiddenSDiesel').val(Number(qntySDiesel(reading)));
        },500);
        
        $('#stock-graph').load('/IOC/stocks/stockgraph').hide().fadeIn('slow');

    
    });
    function issetQntyLabel(){
        $('#qnty-label').empty().append('Quantity available (litres)');
    }
    function qntyPetrol(petrol){
        return 2*petrol;
    }
    function qntySPetrol(spetrol){
        return 2*spetrol;
    }
    function qntyDiesel(diesel){
        return 2*diesel;
    }
    function qntySDiesel(sdiesel){
        return 2*sdiesel;
    }
    


    </script>
    <script type="text/javascript">
      $('#calculate_evening').submit(function(e){
        e.preventDefault();
        var Data;
        var form = $('#calculate_evening');
        $.ajax({
          type : form.attr('method'),
          url : form.attr('action'),
          data : form.serialize(),
          success: function(data){
            console.log(data);
            if(data){
                swal("Success !", "Order entries successfully added !", "success");
                // $('#subloader2').empty();
                // $('#subloader2').load('/IOC/stocks/view_orders',function(){
                //     $('#subloader2').hide();
                //     $('#subloader2').fadeIn('fast');
                // });
            }
            $('#calculate').attr('disabled','disabled');                    
          }
        });
      });
    </script>
<div id="stock-graph" >
   
</div>


