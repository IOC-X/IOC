<form class="form-horizontal" id="add_lube_form" action="stocks/addLube" method="post">
    <fieldset>
    <legend>Add new products</legend>
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label">Product name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="prd-name" placeholder="product name" name="prd-name">
        </div>
    	</div>
        <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Price</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="price" placeholder="price" name="prd-price">
        </div>
    	</div>
        <div class="form-group">
        <label for="qnty" class="col-lg-2 control-label">Quantity</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="qnty" placeholder="quantity" name="prd-qnty">
        </div>
    	</div>
        <div class="form-group">
        <label for="supplier" class="col-lg-2 control-label">Supplier</label>
        <div class="col-lg-4">
                <select id="supplier" placeholder="supplier" class="form-control" name="supplier">
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
<script>
    $('#add_lube_form').submit(function(e){
        e.preventDefault();
        var name = $('#prd-name').val();
        var price = $('#prd-price').val();
        var qnty = $('#prd-qnty').val();
        var supplier = $('#supplier').val();

        if(name == "" || price == "" || qnty == "" || supplier == ""){
            swal("Bump !", "Please fill every field")  
            //return false;
        }
        else{
            console.log('succ');
            var form = $('#add_lube_form');
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data : form.serialize(),
              success: function(data){
                console.log(data);
                if(data){
                    swal("Supplier added successfully!", "click okay to continue", "success");
                    $('#prd-name').val("");
                    $('#price').val("");
                    $('#qnty').val("");
                    $('#supplier').val("");
                }
              }
            });
        }
    });
    $(document).ready(function(){
        console.log('Clicked !');
        $.getJSON('stocks/getLubricantSuppliers',function(data){
            var len = data.length;
            for(a=0;a<len;a++){
                $('#supplier').append($('<option>', {value:data[a].name, text:data[a].name}));                
            }
        });
        console.log('Done !');
    });
</script>