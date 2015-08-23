<div id="temp">
     
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Add Branch</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addBranch" action="transport/addBranch" method="post">
        <div class="form-group">
        <label for="name" class="col-lg-3 control-label">Branch name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="name" name="name">
        </div>
        </div>
        <div class="form-group">
        <label for="description" class="col-lg-3 control-label">Description</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="description" name="description">
        </div>
        </div>
        <div class="form-group">
        <label for="address" class="col-lg-3 control-label">Address</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="address" name="address">
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
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit Branch info</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addBranch" action="transport/addBranch" method="post">
        <div class="form-group">
        <label for="name" class="col-lg-3 control-label">Branch name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-name" name="edit-name">
        </div>
        </div>
        <div class="form-group">
        <label for="description" class="col-lg-3 control-label">Description</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-description" name="edit-description">
        </div>
        </div>
        <div class="form-group">
        <label for="address" class="col-lg-3 control-label">Address</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="edit-address" name="edit-address">
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
<script type="text/javascript" src="<?php echo BOWER ?>mustache/mustache.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('transport/loadBranchDetails',function(data){
            console.log(data);
            var len = data.length;
            for(a=0;a<len;a++){
                var branchName = data[a].Name;
                var description = data[a].Description;
                var address = data[a].Address;
                var Id = data[a].Id;
                $.ajax({ url: 'transport/cardTemplate',
                    async: false,
                    success: function(template) {  
                        var template = template;
                        var render = Mustache.render(template,{ branchName : branchName , description : description , address : address , Id : Id });
                        $('#temp').append(render);          
                    }
                });
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
                                $.post('transport/removeBranch', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    if(data == "Success"){
                                        swal("Deleted!", "Entry deleted !.", "success");
                                        $('#subloader').load('/IOC/transport/branches',function(){
                                                //console.log('emergencyTransport !');
                                            $('#subloader').hide();
                                            $('#subloader').fadeIn('fast');
                                            window.location.hash = "";
                                            window.location.hash = "/transport/branches";
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

      
            $(".edit").click(function(e){
                e.preventDefault();
                var id = $(this).attr('href');
                $.getJSON('transport/getBranchSpec',{ ID : id },function(data){
                    brName = data[0].Name;
                    brDescription = data[0].Description;
                    brAddress = data[0].Address; 
                });
                window.editID = id;
                $('#myModal2').modal('show');
                setTimeout(function(){
                    $('#edit-name').val(brName);
                    $('#edit-description').val(brDescription);
                    $('#edit-address').val(brAddress);
                },250);
            });
              

        });
        $('#edit_sub').click(function(e){
                e.preventDefault();
                console.log("CLIKCED !");
                var transID = window.editID;
                var name = $('#edit-name').val();
                var description = $('#edit-description').val();
                var address = $('#edit-address').val();
                

                if(name == "" || description == "" || address == "" ){
                swal("Bump !", "Please fill every field")  
                    return false;
                }
                if(name.length>30){
                    swal("Bump !", "Name field should be less than 30 characters")  
                    return false;
                }
                if(description.length>50){
                    swal("Bump !", "Description field should be less than 50 characters")  
                    return false;
                }
                else{
                    $.post('transport/editBranch',{ Id : transID , name : name , description : description , address : address },function(server){
                        console.log(server);
                        $('#myModal2').modal('hide');
                        $('#subloader').load('/IOC/transport/branches',function(){
                        //console.log('emergencyTransport !');
                            $('#subloader').hide();
                            $('#subloader').fadeIn('fast');
                            window.location.hash = "";
                            window.location.hash = "/transport/branches";
                        });
                    });                    
                }
        });
    });
    $("#addEntry").click(function(){
        $('#myModal').modal('show');
    });
    $("#add_sub").click(function(e){
        e.preventDefault();
        var form = $("#addBranch");
        $.ajax({
          type : form.attr('method'),
          url : form.attr('action'),
          data : form.serialize(),
          success: function(data){
            console.log(data);
            if(data == "Success"){
                swal("Branch added successfully!", "click okay to continue", "success");
                $('.form-control').val("");
                $('#myModal').modal('hide');
                $('#subloader').load('/IOC/transport/branches',function(){
                    $('#subloader').hide();
                    $('#subloader').fadeIn('fast');
                    window.location.hash = "";
                    window.location.hash = "/transport/branches";
                });
            }
          }
        });
        console.log('Addd');
    });
    

</script>
