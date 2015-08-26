<div class="col-lg-11">
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th>Bought quantity</th>
            <th>Total</th>
            <th>Date</th>
    
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>History</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="history" action="transport/addBranch" method="post">
        <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="name">Product</label>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control" id="edit-products" name="prd-name">
                            <option></option>
                        </select>
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="price">Price</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="price" id="edit-price" placeholder="" 
                               title="Use only numbers for Price" />
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="quantity">Available quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="edit-qty" id="edit-qty" placeholder="" 
                               title="Use only numbers for Quantity" />
                    </div>

                </div>

                <!--address -->

                <div class="form-group">
                    <label for="supplier" class="col-lg-2 control-label">Supplier</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="supplier" placeholder="" id="edit-supplier" >
                    </div>
                </div> 


                <!--phone number +nic -->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="sqty">Buying Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="number" id="edit-buyingQnty" name="buyingQnty" class="form-control">
                    </div>

                </div>



                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="income">Total price</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="total" id="edit-price" placeholder="">
                    </div>

                </div>
        </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="edit_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        
    </form>
        </div>
        </fieldset>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        $.getJSON('revenue/loadLubricantProducts',function(data){
            console.log(data[0]);
            console.log('DD');
            var len = data.length;
            for(a=0;a<len;a++){
 //               console.log(data[a].Name);
                $("#edit-products").append("<option value='"+ data[a].Id +" class='"+ data[a].Name +"'>" + data[a].Name + "</option>");
                //$("#edit-price").append(data[a].price);
            }
        });
        console.log('aaa')
        $.getJSON('revenue/loadLubricantExpenses',function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Product" + '">' + data[x].product + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Price" + '">' + data[x].price + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Supplier" + '">' + data[x].supplier + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Quantity" + '">' + data[x].quantity + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-BQuantity" + '">' + data[x].bquantity + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Total" + '">' + data[x].total + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Date" + '">' + data[x].date + '</td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                    $("." + x + "").append('</tr>');
                }
                $("tbody").hide().fadeIn();
               
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
                                $.post('revenue/removeLubricantHis', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");
                                        $('#subloader2').load('/IOC/revenue/historyLubricants',function(){
                                            $('#subloader2').hide();
                                            $('#subloader2').fadeIn('fast');
                                        });                                   
                                    }
                                    else{
                                        swal("Ooops", "", "error");
                                    }
                                    
                                });
                                
                            } 
                            else {    
                                swal("Cancelled", "", "error");   
                            } 
                        });
                    
                });

                $('.edit').click(function(e){
                    e.preventDefault();
                    var id = $(this).attr('href');
                    window.editID = id;
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        var product = $('#'+ id +'-Product').text();
                        var price = $('#'+ id +'-Price').text();
                        var supplier = $('#'+ id +'-Supplier').text();
                        var quantity = $('#'+ id +'-Quantity').text();
                        var bquantity = $('#'+ id +'-BQuantity').text();
                        var total = $('#'+ id +'-Total').text();
                        var date = $('#'+ id +'-Date').text();
 
                        $('#edit-products').val(product);
                        $('#edit-price').val(price);
                        $('#edit-date').val(date);
                        $('#edit-qty').val(quantity);
                        $('#edit-buyingQnty').val(bquantity);
                        $('#edit-total').val(total);
                        $('#edit-supplier').val(supplier);
                    },250);
                    
                });
            });

            $('#edit_sub').click(function(e){
                e.preventDefault();
                console.log("CLIKCED !");
                var transID = window.editID;
                var product = $('#edit-products').val();
                var price = $('#edit-price').val();
                var date = $('#edit-date').val();
                var quantity = $('#edit-qty').val();
                var bquantity = $('#edit-buyingQnty').val();
                var total = $('#edit-total').val();
                var supplier = $('#edit-supplier').val();

                if(supplier == "" || bquantity == "" || quantity == "" || product == ""){
                swal("Bump !", "Please fill every field")  
                    return false;
                }
                else{
                    $.post('revenue/editLubricantHistory',{ Id : transID , product : product , price : price , date : date , qty : quantity , bquantity : bquantity , total : total , supplier : supplier },function(server){
                        console.log(server);
                        $('#myModal').modal('hide');
                        $('#subloader2').load('/IOC/revenue/historyLubricants',function(){
                            $('#subloader2').hide();
                            $('#subloader2').fadeIn('fast');
                        });
                    });                    
                }


            });

    });
</script>