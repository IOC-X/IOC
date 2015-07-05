<form class="form-horizontal" method="post" id="calculate_mrng" action="stocks/calculateStocks">
    <fieldset>
        <legend>Morning stock readings</legend>
            
            <label id="qnty-label"></label>
            <label id="suggestion-label"></label>
            <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Petrol</label>
                <div class="col-lg-4">
                <select id="petrol" placeholder="petrol" class="form-control" name="petrol">
                  <option>169</option>
                </select>
                </div>
                <div class="col-lg-4">
                    <label class="qnty"></label>
                </div>
                <div class="ajax-content">
                <div class="col-lg-1">
                <select placeholder="petrol" class="form-control">
                  <option>169</option>
                </select>
                </div>
                </div>
            </div>
            <div class="form-group">
            <label for="spetrol" class="col-lg-2 control-label">Super petrol</label>
                <div class="col-lg-4">
                  <select id="petrol" placeholder="petrol" class="form-control" name="spetrol">
                    <option>169</option>
                  </select>
                </div>
                <div class="col-lg-4">
                    <label class="qnty"></label>
                </div>
                <div class="col-lg-1">
                <select placeholder="petrol" class="form-control">
                  <option>169</option>
                </select>
                </div>
            </div>
            <div class="form-group">
            <label for="diesel" class="col-lg-2 control-label">Diesel</label>
                <div class="col-lg-4">
                  <select id="diesel" placeholder="petrol" class="form-control" name="diesel">
                    <option>169</option>
                  </select>
                </div>
                <div class="col-lg-4">
                    <label class="qnty"></label>
                </div>
                <div class="col-lg-1">
                <select placeholder="petrol" class="form-control">
                  <option>169</option>
                </select>
                </div>
            </div>
            <div class="form-group">
            <label for="sdiesel" class="col-lg-2 control-label">Super diesel</label>
                <div class="col-lg-4">
                  <select id="sdiesel" placeholder="petrol" class="form-control" name="sdiesel">
                    <option>169</option>
                  </select>
                </div>
                <div class="col-lg-4">
                    <label class="qnty"></label>
                </div>
                <div class="col-lg-1">
                <select placeholder="petrol" class="form-control">
                  <option>169</option>
                </select>
                </div>
            </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary" id="calculate">Calculate</button>
                <span class="order"></span>
            </div>
        </div>
    </fieldset>
</form>



    <script type="text/javascript">
    $('#cancel_reading').click(function(e){
        $('#subloader2').fadeOut('500',function(){
            $('#subloader2').empty();
        });
        e.preventDefault();
    });
    </script>

    <script type="text/javascript">
      $('#calculate_mrng').submit(function(e){
        e.preventDefault();
        var form = $('#calculate_mrng');
        $.ajax({
          type : form.attr('method'),
          url : form.attr('action'),
          data : form.serialize(),
          success: function(data){
            console.log(data);
            $('#calculate').attr('disabled','disabled');
            $('#qnty-label').append('Quantity available').hide().fadeIn('slow');
            var input = '<input type="button" class="btn btn-primary" id="confirm_orders" value="Confirm Orders">';
            $('.order').append(input).hide().fadeIn('slow');
            $('#suggestion-label').append('Order suggestions').hide().fadeIn('slow');
            $('.qnty').append('<label style="padding-left:50px">' + data + '</label>').hide().fadeIn('slow');
            $('#stock-graph').load('/IOC/stocks/stockgraph').hide().fadeIn('slow');
          }
        });
      });
    </script>
<div id="stock-graph" >
   
</div>



