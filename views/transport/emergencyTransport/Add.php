<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Date</th>
            <th>CustomerName</th>
            <th>NIC</th>
            <th>Vehicle no</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Description</th>
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
                 <h4 class="modal-title" id="myModalLabel"><legend>Add Entry</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addEmgTransport" action="transport/addEmgTransport" method="post">
        <div class="form-group">
        <label for="fullname" class="col-lg-3 control-label">Full name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="fullname" name="fullname">
        </div>
        </div>
        <div class="form-group">
        <label for="nic" class="col-lg-3 control-label">NIC</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="nic" name="nic">
        </div>
        </div>
        <div class="form-group">
        <label for="vehicleno" class="col-lg-3 control-label">Vehicle No</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="vehicleno" name="vehicleno">
        </div>
        </div>
        <div class="form-group">
        <label for="contact" class="col-lg-3 control-label">Contact</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="contact" name="contact">
        </div>
        </div>
        <div class="form-group">
        <label for="description" class="col-lg-3 control-label">Description</label>
        <div class="col-lg-7">
            <textarea class="form-control" id="description"  name="description" rows="4" cols="50"></textarea>
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="col-lg-3 control-label">Email</label>
        <div class="col-lg-7">
            <input type="email" class="form-control" id="email" name="email">
        </div>
        </div>
        </div>
        </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="add_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        
    </form>
        </div>
        </fieldset>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit Entry</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addEmgTransport" action="transport/addEmgTransport" method="post">
        <div class="form-group">
        <label for="fullname" class="col-lg-3 control-label">Full name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="fullname" name="fullname">
        </div>
        </div>
        <div class="form-group">
        <label for="nic" class="col-lg-3 control-label">NIC</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="nic" name="nic">
        </div>
        </div>
        <div class="form-group">
        <label for="vehicleno" class="col-lg-3 control-label">Vehicle No</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="vehicleno" name="vehicleno">
        </div>
        </div>
        <div class="form-group">
        <label for="contact" class="col-lg-3 control-label">Contact</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="contact" name="contact">
        </div>
        </div>
        <div class="form-group">
        <label for="description" class="col-lg-3 control-label">Description</label>
        <div class="col-lg-7">
            <textarea class="form-control" id="description"  name="description" rows="4" cols="50"></textarea>
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="col-lg-3 control-label">Email</label>
        <div class="col-lg-7">
            <input type="email" class="form-control" id="email" name="email">
        </div>
        </div>
        </div>
        </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="add_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        
    </form>
        </div>
        </fieldset>
</div>
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting ion-plus-round"></i>
          <i class="mfb-component__main-icon--active ion-edit"></i>
        </a>
        <ul class="mfb-component__list">

       <li>
            <a href="#" data-mfb-label="Add" class="mfb-component__button--child" id="addEntry">
              <i class="mfb-component__child-icon ion-calendar"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>


<script type="text/javascript">
    $(document).ready(function(){
        $("#addEntry").click(function(){
            $('#myModal').modal('show');
        });

        $("#add_sub").click(function(e){
            e.preventDefault();
            var form = $("#addEmgTransport");
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data : form.serialize(),
              success: function(data){
                console.log(data);
                if(data == "Success"){
                    swal("Entry added successfully!", "click okay to continue", "success");
                    $('.form-control').val("");
                    $('#myModal').modal('hide');
                }
              }
            });
            console.log('Addd');
        });
        $.getJSON('transport/loadEmgTransport',function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Date" + '">' + data[x].date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Fullname" + '">' + data[x].fullname + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Nic" + '">' + data[x].nic + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Vehicleno" + '">' + data[x].vehicleno + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Contact" + '">' + data[x].contact + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Email" + '">' + data[x].email + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Description" + '">' + data[x].description + '</td>');
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
                                $.post('transport/removeEmgTransport', { ID : id }, function(data){
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
                    e.preventDefault();
                    var id = $(this).attr('href');
                    window.editID = id;
                    $('#myModal2').modal('show');
                    setTimeout(function(){
                        var date = $('#'+ id +'-Date').text();
                        var pumpReading = $('#'+ id +'-Reading').text();
                        
                        //console.log(name + price + quantity + supplier);
                        $('#pmp-date').val(date);
                        $('#pmp-reading').val(pumpReading);
                    },250);
                    
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

</script>

