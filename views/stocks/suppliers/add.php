<form class="form-horizontal" id="add_supplier_form" action="stocks/addSupplier" method="post">
    <fieldset>
    <legend>Add new supplier</legend>
        	
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