<div class="col-lg-11">
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Description</th>
            <th>Expense</th>
            <th>Date</th>
            <th></th>
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
        <label for="description" class="col-lg-3 control-label">Description</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-description" name="description">
        </div>
        </div>
        <div class="form-group">
        <label for="address" class="col-lg-3 control-label">Payment</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="edit-payment" name="address">
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
        
        $.getJSON('revenue/loadOtherExpenses',function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Description" + '">' + data[x].description + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Expense" + '">' + data[x].expense + '</td>');
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
                                $.post('revenue/removeOtherExp', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");
                                        $('#subloader2').load('/IOC/revenue/historyOther',function(){
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
                        var description = $('#'+ id +'-Description').text();
                        var expense = $('#'+ id +'-Expense').text();
                        
 
                        $('#edit-description').val(description);
                        $('#edit-payment').val(expense);
                     
                    },250);
                    
                });
            });

            $('#edit_sub').click(function(e){
                e.preventDefault();
                console.log("CLIKCED !");
                var transID = window.editID;
                var description = $('#edit-description').val();
                var payment = $('#edit-payment').val();
            
  
                if(description == "" || payment == ""){
                swal("Bump !", "Please fill every field")  
                    return false;
                }
                else{
                    $.post('revenue/editOtherHistory',{ Id : transID , description : description , payment : payment },function(server){
                        console.log(server);
                        $('#myModal').modal('hide');
                        $('#subloader2').load('/IOC/revenue/historyOther',function(){
                            $('#subloader2').hide();
                            $('#subloader2').fadeIn('fast');
                        });
                    });                    
                }


            });

    });
</script>