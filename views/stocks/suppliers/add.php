<form class="form-horizontal" id="add_supplier_form" action="stocks/addSupplier" method="post">
    <fieldset>
    <legend>Add new suppliers</legend>
        <div class="form-group">
        <label for="sup-name" class="col-lg-2 control-label">Supplier name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="sup-name" placeholder="product name" name="sup-name">
        </div>
      </div>
        <div class="form-group">
        <label for="products" class="col-lg-2 control-label">Products</label>
        <div class="col-lg-4">
                <select id="products" placeholder="supplier" class="form-control" name="products">
                  <option></option>
                  <option value="fuel">Fuel</option>
                  <option value="lubricants">Lubricants</option>
                </select>
        </div>
      </div>
        <div class="form-group">
        <label for="tel-number" class="col-lg-2 control-label">Quantity</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="tel-number" placeholder="contact number" name="sup-tel-number">
        </div>
      </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>  
    </fieldset>
</form>
<script>
    $('#add_supplier_form').submit(function(e){
        e.preventDefault();
        console.log('succ');
        var form = $('#add_supplier_form');
        $.ajax({
          type : form.attr('method'),
          url : form.attr('action'),
          data : form.serialize(),
          success: function(data){
            console.log(data);
          }
        });
    });
</script>