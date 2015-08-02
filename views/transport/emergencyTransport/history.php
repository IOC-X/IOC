<form class="form-horizontal" id="add_lube_form" action="stocks/addLube" method="post">
    <fieldset>
    <legend>Add new Entry</legend>
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label">Customer</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="prd-name" name="prd-name">
        </div>
    	</div>
        <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Contact</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="price" me="prd-price">
        </div>
    	</div>
        <div class="form-group">
        <label for="qnty" class="col-lg-2 control-label">Description</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="qnty"  name="prd-qnty">
        </div>
    	</div>
        <div class="form-group">
        <label for="supplier" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-4">
                <select id="supplier"  class="form-control" name="supplier">
                  <option></option>
                </select>
        </div>
    	</div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>	
    </fieldset>
</form>