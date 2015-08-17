<form class="form-horizontal">
    <fieldset>
        <legend>Search lubricants</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Product</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit entry</legend></h4>

            </div>
            
            <div class="modal-body">
   
    <form class="form-horizontal" id="edit_supplier_form" action="stocks/editSupplier" method="post">
    <fieldset>
        <div class="form-group">
        <label for="sup-name" class="col-lg-2 control-label">Supplier name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="sup-name" placeholder="supplier name" name="sup-name">
        </div>
        </div>
          
          <div class="form-group">
                <label for="products" class="col-lg-2 control-label">Products</label>
                <div class="col-lg-10" id="products">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="fuel" id="fuel-checkbox" id="fuel-checkbox" name="fuel-sup"> Fuel
                        </label>
                    </div>
                    <div class="checkbox">
                        <label id="lubricantx">
                            <input type="checkbox" name="lubricant-sup" id="lubricant-checkbox"> Lubricants
                        </label>
                    </div>
                </div>
            <br/>
          </div>
          <!-- <div class="form-group" id="qnty-div">
            <label for="tel-number" class="col-lg-2 control-label">Quantity</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="sup-quantity" placeholder="quantity" name="sup-tel-number">
            </div>
            </div>
          -->
          <div class="form-group">
            <label for="sup-email" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-7">
                <input type="email" class="form-control" id="sup-email" placeholder="email" name="sup-email">
            </div>
          </div>
            <div class="form-group">
            <label for="sup-contact" class="col-lg-2 control-label">Contact no</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="sup-contact" placeholder="contact no" name="sup-contact">
            </div>    
            </div>
            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="edit_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </fieldset>
        </form>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('stocks/loadLubricantsSuppliers',function(data){
            console.log(data[0]);

            var len = data.length;
            for(x=0;x<len;x++){
                $("tbody").append('<tr class="' + x +'">');
                $("." + x + "").append('<td>' + data[x].name + '</td>');
                $("." + x + "").append('<td>' + data[x].product + '</td>');
                $("." + x + "").append('<td>' + data[x].contact + '</td>');
                $("." + x + "").append('<td>' + data[x].email + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function(e){
                var id = $(this).attr('href');
                e.preventDefault();
                swal({   title: "Are you sure?",   
                    text: "You will not be able to recover this entry",   
                    type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   cancelButtonText: "No, cancel !",   
                    closeOnConfirm: false,   closeOnCancel: false }, 
                    function(isConfirm){   
                        if (isConfirm) {     
                            swal("Deleted!", "Entry deleted !.", "success");   
                            
                            $.post('stocks/removeLubricantSupplier', { ID : id }, function(data){
                                console.log(data);
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                                    $('#subloader2').hide();
                                    $('#subloader2').fadeIn('slow');
                                });
                            });
                        } 
                            else {    
                             swal("Cancelled", "", "error");   
                            } 
                    });

                // e.preventDefault();
                // var id = $(this).attr('href');
                // $.post('stocks/removeLubricantSupplier', { ID : id }, function(data){
                //     console.log(data);
                //     alert('Done !');
                //     $('#subloader2').empty();
                //     $('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                //         $('#subloader2').hide();
                //         $('#subloader2').fadeIn('slow');
                //     });
                // });

            });

            $('.edit').click(function(e){
                var id = $(this).attr('href');
                window.editID = id;
                $('#myModal').modal('show');
                setTimeout(function(){
                    $('#supplier').empty();
                    var name = $()
                    //$('#prd-name').val('Test');
                    var name = $('#'+ id +'-name').text();
                    var price = $('#'+ id +'-price').text();
                    var quantity = $('#'+ id +'-quantity').text();
                    var supplier = $('#'+ id +'-supplier').text();

                    $.getJSON('stocks/getLubricantSuppliers',function(data){
                        var len = data.length;
                        for(a=0;a<len;a++){
                            $('#supplier').append($('<option>', {value:data[a].name, text:data[a].name}));                
                        }
                    });
                    //console.log(name + price + quantity + supplier);
                    $('#prd-name').val(name);
                    $('#price').val(price);
                    $('#qnty').val(quantity);
                    $('#supplier').val(supplier);
                },250);
                e.preventDefault();
            });
            $('#edit_sub').click(function(){
                var sup_ID = window.editID;
                var sup_name = $('#sup-name').val();
                var sup_email = $('#sup-email').val();
                var sup_contact = $('#sup-contact').val();
                var sup_products = $('#supplier').val();
                console.log(sup_ID+sup_name+sup_email+sup_contact);
                $.post('stocks/editSupplier',{ name : sup_name , email : sup_email , contact : sup_contact , id : sup_ID },function(data){
                    console.log(data);
                    $('#myModal').hide();
                    //refresh();
                });
            });
        });
        
    
    });
    $("#searchInput").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();

        //Recusively filter the jquery object to get results.
        jo.filter(function () {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
    });
</script>