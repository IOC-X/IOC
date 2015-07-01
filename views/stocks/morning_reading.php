<form class="form-horizontal" method="post" id="calculate_mrng" action="stocks/calculateStocks">
    <fieldset>
        <legend>Morning</legend>
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
            </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary" id="calculate">Calculate</button>
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
            $('.qnty').append('<label>' + data + '</label>').hide();
            $('.qnty').fadeIn('slow');
            $('#stock-graph').append('<label>  </label>');
          }
        });
      });
    </script>
<div id="stock-graph">

</div>
<script type="text/javascript" src="<?php echo ChartJS ?>">
</script>
<script type="text/javascript">

</script>
