<div class="col-lg-11">
<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Date</th>
            <th>Driver</th>
            <th>Branch</th>
            <th>Product</th>
            <th>Vehicle No</th>
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
                 <h4 class="modal-title" id="myModalLabel"><legend>Add Entry</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addLubricantTransport" action="transport/addLubricantTransport" method="post">
        <div class="form-group">
        <label for="driver" class="col-lg-3 control-label">Driver</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="driver" name="driver">
        </div>
        </div>
        <div class="form-group">
        <label for="branch" class="col-lg-3 control-label">Branch</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="branch" name="branch">
        </div>
        </div>
        <div class="form-group">
        <label for="vehicleno" class="col-lg-3 control-label">Vehicle No</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="vehicleno" name="vehicleno">
        </div>
        </div>
        <div class="form-group">
        <label for="product" class="col-lg-3 control-label">Product</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="product" name="product">
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
    <form class="form-horizontal" id="editLubricantTransport" action="transport/editLubricantTransport" method="post">
        <div class="form-group">
        <label for="driver" class="col-lg-3 control-label">Driver</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-driver" name="driver">
        </div>
        </div>
        <div class="form-group">
        <label for="branch" class="col-lg-3 control-label">Branch</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-branch" name="branch">
        </div>
        </div>
        <div class="form-group">
        <label for="vehicleno" class="col-lg-3 control-label">Vehicle No</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-vehicleno" name="vehicleno">
        </div>
        </div>
        <div class="form-group">
        <label for="product" class="col-lg-3 control-label">Product</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="edit-product" name="product">
        </div>
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
            var form = $("#addLubricantTransport");
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
                    $('#subloader').load('/IOC/transport/lubricantTransport',function(){
                            //console.log('lubricantTrasnport !');
                            $('#subloader').hide();
                            $('#subloader').fadeIn('fast');
                            window.location.hash = "";
                            window.location.hash = "/transport/lubricantTransport";
                    });
                }
              }
            });
            console.log('Addd');
        });
        $.getJSON('transport/loadLubricantTransport',function(data){
                console.log(data);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Date" + '">' + data[x].Date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Driver" + '">' + data[x].Driver + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Branch" + '">' + data[x].Branch + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Product" + '">' + data[x].Product + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-Vehicleno" + '">' + data[x].Vehicleno + '</td>');
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
                                $.post('transport/removeLubricantTransport', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");
                                        $('#subloader').load('/IOC/transport/lubricantTransport',function(){
                                                //console.log('lubricantTrasnport !');
                                                $('#subloader').hide();
                                                $('#subloader').fadeIn('fast');
                                                window.location.hash = "";
                                                window.location.hash = "/transport/lubricantTransport";
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
                    $('#myModal2').modal('show');
                    setTimeout(function(){
                        var date = $('#'+ id +'-Date').text();
                        var driver = $('#'+ id +'-Driver').text();
                        var branch = $('#'+ id +'-Branch').text();
                        var product = $('#'+ id +'-Product').text();
                        var vehicleno = $('#'+ id +'-Vehicleno').text();

                        $('#edit-driver').val(driver);
                        $('#edit-branch').val(branch);
                        $('#edit-product').val(product);
                        $('#edit-vehicleno').val(vehicleno);
                    },250);
                    
                });
            });

            $('#edit_sub').click(function(e){
                e.preventDefault();
                console.log("CLIKCED !");
                var transID = window.editID;
                var driver = $('#edit-driver').val();
                var branch = $('#edit-branch').val();
                var vehicleno = $('#edit-vehicleno').val();
                var productno = $('#edit-product').val();

                $.post('transport/editLubricantTransport',{ Id : transID , driver : driver , branch : branch , vehicleno : vehicleno , productno : productno },function(server){
                    console.log(server);
                    $('#myModal2').modal('hide');
                    $('#subloader').load('/IOC/transport/lubricantTransport',function(){
                    //console.log('emergencyTransport !');
                        $('#subloader').hide();
                        $('#subloader').fadeIn('fast');
                        window.location.hash = "";
                        window.location.hash = "/transport/lubricantTransport";
                    });
                });
            });











    });

</script>

