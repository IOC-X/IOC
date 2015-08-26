

<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="addclient1"><i class="mdi-av-my-library-books"></i> Add New Client</a>
   
</div>

<script>


    $('#list').click(function () {
        $('#subloader2').load('/IOC/clients/addclientin', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#addclient1').click(function () {
        
        $('#subloader2').load('/IOC/clients/addclient', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>

<div id="subloader2">

  
   
    <h3 class="text-success"><strong>Client Management Portal</strong></h3>

<table class="table table-striped table-hover">
    <col style="width:15%">
    <col style="width:10%">
    <col style="width:25%">
    <col style="width:15%">
    <col style="width:20%">
    <col style="width:25%">
    <col style="width:20%">
    <thead>
        <tr>
             <th></th>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>NIC</th>
            <th>Phone</th>
           <th> </th>
        </tr>

    </thead>
    <tbody></tbody>
</table>

</div>    
    
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Client</legend></h4>

            </div>
            <form class="form-horizontal" id="updateemp_form" action="clients/updateclients" method="post" onsubmit="return submitForm();">
                <div class="modal-body">

                    <fieldset>
                        
                      

                        <div class="form-group">
                            <label for="client_code" class="col-lg-2 control-label">Client ID</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="client_code" name="client_code" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_fname" class="col-lg-2 control-label">Client First name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="client_fname" placeholder="" name="client_fname" pattern="[A-Z]{1}[a-z]{2,}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_lname" class="col-lg-2 control-label">Client Last name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="client_lname" placeholder="" name="client_lname" pattern="[A-Z]{1}[a-z]{2,}"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_address" class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="client_address" placeholder="" name="client_address" pattern="[A-Za-za-9]{1,}" >
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="client_pnumber" class="col-lg-2 control-label">Phone Number</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="client_pnumber"  name="client_pnumber" pattern="[0-9]{1,3}[0-9]{4,10}" >
                            </div>
                        </div>
                        
                                          


                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>

                </div>
            </form>

        </div>
    </div>
</div>




<script type="text/javascript">
    
//     var idValue;
//    function colvalue(row){
//
//        var x=row.cells;
//
//        idValue = x[0].innerHTML;
//        idValue = idValue.toString();
//    }

    $(document).ready(function () {
      
        $.getJSON('clients/getclientdata', function (data) {
        
            var len = data.length;
            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].client_id + '">');
                $("." + x + "").append('<td>' + '<img class="circle" src="/IOC/views/clients/propic/'+"IOC"+data[x].profile+'" id="image">' + '</td>');  
                $("." + x + "").append('<td id="' + data[x].client_id + "-cid" + '">' + data[x].client_id + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id+ "-cname" + '">' + data[x].client_fname +"  "+ data[x].client_lname + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id+ "-caddress" + '">' + data[x].client_address + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cnic" + '">' + data[x].client_nic + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cphone" + '">' + data[x].client_phone + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cpdate" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].client_id + "-cnumber" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }

            $('.remove').click(function (e) {
                var id = $(this).attr('href');
                
                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Client Anymore!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel it!",
                    closeOnConfirm: false,
                    closeOnCancel: false},
                function (isConfirm) {
                //alert(id);
                    if (isConfirm) {
                        $.ajax({
                           
                            type: 'post',
                            url: 'clients/deleteClients',
                            data: {idclients: id},
                            success: function () {
                                swal("Deleted!", "Your Client has been deleted!", "success");
                                $('#subloader').empty();
                                $('#subloader').load('/IOC/clients/client_management').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Your Client is safe :)", "error");
                    }
                });


                return false;
            });

           $('.edit').click(function (e) {
               e.preventDefault();
                var id = $(this).attr('href');

                $('#myModal').modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-cnumber').text();
                    $('#client_code').val(data[mycode].client_id);
                    $('#client_fname').val(data[mycode].client_fname);
                    $('#client_lname').val(data[mycode].client_lname);
                    $('#client_address').val(data[mycode].client_address);
                    $('#client_pnumber').val(data[mycode].client_phone);

                   
                }, 250);
                
            });
       });
        $('#updateemp_form').submit(function (e) {
         e.preventDefault();
       var form = $('#updateemp_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').hide();
           $('#subloader').empty();
           $('#subloader').load('/IOC/clients/client_management').hide().fadeIn('slow');
            }
        });
                                
                                
        });
    });

</script>

<style>
.circle {
  display: block;
  width: 100px;
  height: 100px;
  margin: 1em auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-border-radius: 99em;
  -moz-border-radius: 99em;
  border-radius: 99em;
  border: 5px solid #eee;
  box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);  
}
</style>

    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
               function submitForm() {
            console.log("submit event");
            var fd = new FormData(document.getElementById("updateemp_form"));
            fd.append("label", "IOC");
            $.ajax({
              url: "/IOC/views/clients/upload.php",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function( data ) {
                console.log("PHP Output:");
                console.log( data );
            });
            return false;
        }
</script>