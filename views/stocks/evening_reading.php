<form class="form-horizontal">
    <fieldset>
        <legend>Evening</legend>
            <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Petrol</label>
                <div class="col-lg-4">
                  <select id="petrol" placeholder="petrol" class="form-control">
                    <option>169</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
            <label for="spetrol" class="col-lg-2 control-label">Super petrol</label>
                <div class="col-lg-4">
                  <select id="petrol" placeholder="petrol" class="form-control">
                    <option>169</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
            <label for="diesel" class="col-lg-2 control-label">Diesel</label>
                <div class="col-lg-4">
                  <select id="petrol" placeholder="petrol" class="form-control">
                    <option>169</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
            <label for="sdiesel" class="col-lg-2 control-label">Super diesel</label>
                <div class="col-lg-4">
                  <select id="petrol" placeholder="petrol" class="form-control">
                    <option>169</option>
                  </select>
                </div>
            </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary">Calculate</button>
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
