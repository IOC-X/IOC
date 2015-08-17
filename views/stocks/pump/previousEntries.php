<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit entry</legend></h4>

            </div>
            <form class="form-horizontal" id="daily_readings_form" method="post" action="stocks/insertPumpReadings">
            <div class="modal-body">
     
            
                <fieldset>  
                
                <div class="form-group">
                <label for="prd-name" class="col-lg-2 control-label">Pump reading</label>
                <div class="col-lg-7">
                    <input type="number" class="form-control" id="pmp-reading" placeholder="pump reading" name="pmp-reading">
                </div>
                </div>
                <div class="form-group">
                <label for="price" class="col-lg-2 control-label">Date</label>
                <div class="col-lg-7">
                    <input type="date" class="form-control" id="pmp-date" name="pmp-date" max="">
                </div>
                </div>
                                  
                </fieldset>
            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="edit_sub" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        </fieldset>
        </form>
    </div>
</div>

<legend>Last 7 days</legend>
<ul class="breadcrumb">
    <li><a href="javascript:void(0)" id="1" class="pumpBread">Pump 1</a></li>
    <li><a href="javascript:void(0)" id="2" class="pumpBread">Pump 2</a></li>
    <li><a href="javascript:void(0)" id="3" class="pumpBread">Pump 3</a></li>
    <li><a href="javascript:void(0)" id="4" class="pumpBread">Pump 4</a></li>
    <li><a href="javascript:void(0)" id="5" class="pumpBread">Pump 5</a></li>
    <li><a href="javascript:void(0)" id="6" class="pumpBread">Pump 6</a></li>
    <li><a href="javascript:void(0)" id="7" class="pumpBread">Pump 7</a></li>
    <li><a href="javascript:void(0)" id="8" class="pumpBread">Pump 8</a></li>
    <li><a href="javascript:void(0)" id="9" class="pumpBread">Pump 9</a></li>
</ul>
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Reading</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
        </tr>

    </tbody>
</table>



<script type="text/javascript">
    $(document).ready(function(){

        $('.pumpBread').click(function(){
            $("tbody").empty();
            var id = $(this).attr('id');
            $.getJSON('stocks/loadPumpReadings',{ pumpno : id },function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Id" + '">' + data[x].Id + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Date" + '">' + data[x].Date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Reading" + '">' + data[x].Reading + '</td>');
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
                                $.post('stocks/removePumpReading', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");                                            
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
                    var id = $(this).attr('href');
                    window.editID = id;
                    console.log(today);
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        var date = $('#'+ id +'-Date').text();
                        var pumpReading = $('#'+ id +'-Reading').text();
                        
                        //console.log(name + price + quantity + supplier);
                        $('#pmp-date').val(date);
                        $('#pmp-reading').val(pumpReading);
                    },250);
                    e.preventDefault();
                });
            });

            $('#edit_sub').click(function(e){
                e.preventDefault();
                console.log("CLIKCED !");
                var pmpID = window.editID;
                var reading = $('#pmp-reading').val();
                var date = $('#pmp-date').val();

                $.post('stocks/editPumpReading',{ Id : pmpID , reading : reading , date : date },function(data){
                    console.log(data);
                    $('#myModal').hide();
                    refresh(id);
                });
            });
        });
    });
    function refresh(pmpID){
        $('#record_loader').empty();
        $('#record_loader').load('/IOC/stocks/previousEntries').hide().fadeIn('slow');
        $.getJSON('stocks/loadPumpReadings',{ pumpno : pmpID },function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Id" + '">' + data[x].Id + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Date" + '">' + data[x].Date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Reading" + '">' + data[x].Reading + '</td>');
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
                                $.post('stocks/removePumpReading', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");                                            
                                    }
                                    else{
                                        swal("Ooops", "", "error");
                                    }
                                    //refresh();
                                });
                                
                            } 
                            else {    
                                swal("Cancelled", "", "error");   
                            } 
                        });
                    
                });

                $('.edit').click(function(e){
                    var today = new Date();
                    var id = $(this).attr('href');
                    window.editID = id;
                    console.log(today);
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        var date = $('#'+ id +'-Date').text();
                        var pumpReading = $('#'+ id +'-Reading').text();
                        
                        //console.log(name + price + quantity + supplier);
                        $('#pmp-date').val(date);
                        $('#pmp-reading').val(pumpReading);
                    },250);
                    e.preventDefault();
                });


                $('#edit_sub').click(function(e){
                    e.preventDefault();
                    console.log("CLIKCED !");
                    var pmpID = window.editID;
                    var reading = $('#pmp-reading').val();
                    var date = $('#pmp-date').val();

                    $.post('stocks/editPumpReading',{ Id : pmpID , reading : reading , date : date },function(data){
                        console.log(data);
                        $('#myModal').hide();
                        refresh(pmpID);
                    });
                });
        });
    }
</script>