<form class="form-horizontal">
    <fieldset>
        <legend>Filter by date</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="date" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Date</th>
            <th>Reading</th>
            <th>Quantity(l)</th>
            <th>Order(l)</th>
            <th></th>
            <th></th>
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
    <form class="form-horizontal" id="edit_lube_form" action="stocks/addLube" method="post">
    <fieldset>
    
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label">Product name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="prd-name" placeholder="product name" name="prd-name">
        </div>
        </div>
        <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Price</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="price" placeholder="price" name="prd-price">
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
                  
                </select>
        </div>
        </div>
        <div class="form-group">
            
            
            
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
        $.getJSON('stocks/loadOrders',function(data){
            console.log(data);

            //var len = data.length;
            for(x=0;x<10;x++){
                $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                $("." + x + "").append('<td id="' + data[x].Id + "-name" + '">' + data[x].Date + '</td>');
                $("." + x + "").append('<td id="' + data[x].Id + "-price" + '">' + data[x].Reading + '</td>');
                $("." + x + "").append('<td id="' + data[x].Id + "-quantity" + '">' + data[x].Quantity + '</td>');
                $("." + x + "").append('<td id="' + data[x].Id + "-supplier" + '">' + data[x].Orderamnt + '</td>');
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
                            $.post('stocks/removeLubricant', { ID : id }, function(data){
                                console.log(data);
                                //alert('Done !');
                                refresh();
                            });
                            swal("Deleted!", "Entry deleted !.", "success");    
                        } 
                        else {    
                            swal("Cancelled", "", "error");   
                        } 
                    });
                
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

        });
            $('#edit_sub').click(function(){
                
                var prd_ID = window.editID;
                var prd_name = $('#prd-name').val();
                var prd_price = $('#price').val();
                var prd_qnty = $('#qnty').val();
                var prd_supplier = $('#supplier').val();

                $.post('stocks/editLube',{ name : prd_name , price : prd_price , qnty : prd_qnty , supplier : prd_supplier , id : prd_ID },function(data){
                    console.log(data);
                    $('#myModal').hide();
                    refresh();
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
    function refresh(){
        $('#subloader2').empty();
        $('#subloader2').load('/IOC/stocks/edit_lube',function(){
            $('#subloader2').hide();
            $('#subloader2').fadeIn('slow');
        });
    }

</script>