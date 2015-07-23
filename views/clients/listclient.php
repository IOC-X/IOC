<script src="/IOC/views/clients/js/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="/IOC/views/clients/js/sweetalert.css">
<table class="table table-striped table-hover ">
    <col style="width:10%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:10%">
    <col style="width:10%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:5%">
    <col style="width:5%">
    <thead>
        <tr>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>NIC</th>
            <th >Phone</th>
            <th>Purchase Date</th>
            <th>Purchase Amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody></tbody>
</table>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Shift</legend></h4>

            </div>
            <form class="form-horizontal" id="updateemp_form" action="employees/shift_update" method="post">
                <div class="modal-body">

                    <fieldset>

                        <div class="form-group">
                            <label for="shiftid" class="col-lg-2 control-label">Shift ID</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="shiftid" placeholder="autogenerate" name="shiftid" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shiftname" class="col-lg-2 control-label">Shift Name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="shiftname" placeholder="Shift Name.." name="shiftname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shiftduration" class="col-lg-2 control-label">Shift Duration</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="shiftduration" placeholder="eg: 7 hours" name="shiftduration" >
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="shiftrate" class="col-lg-2 control-label">Shift Rate</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="shiftrate"  name="shiftrate" >
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
    $(document).ready(function () {
      
        $.getJSON('clients/getclientdata', function (data) {
        
            var len = data.length;
            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].client_id + '">');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cid" + '">' + data[x].client_id + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id+ "-cname" + '">' + data[x].client_fname +"  "+ data[x].client_lname + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id+ "-caddress" + '">' + data[x].client_address + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cnic" + '">' + data[x].client_nic + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cphone" + '">' + data[x].client_phone + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cpdate" + '">' + data[x].client_purchase_date + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cpamount" + '">' + "Rs : " +data[x].client_purchase_amount + '</td>');

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

                    if (isConfirm) {
                        $.ajax({
                            type: 'GET',
                            url: 'clients/deleteClients',
                            data: {idclients: id},
                            success: function (data) {
                                swal("Deleted!", "Your Client has been deleted!", "success");
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/clients/listclients').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Your Client is safe :)", "error");
                    }
                });


                return false;
            });

//            $('.edit').click(function (e) {
//                var id = $(this).attr('href');
//
//                $('#myModal').modal('show');
//                setTimeout(function () {
//                    var mycode = $('#' + id + '-shiftme').text();
////assing values
//                    $('#shiftid').val(data[mycode].shiftId);
//                    $('#shiftname').val(data[mycode].shiftName);
//                    $('#shiftduration').val(data[mycode].shiftDuration);
//                    $('#shiftrate').val(data[mycode].shiftRate);
//                   
//                }, 250);
//                e.preventDefault();
//            });

        });
//        $('#updateemp_form').submit(function () {
//         e.preventDefault();
//        var form = $('#updateemp_form');
//        $.ajax({
//            type: form.attr('method'),
//            url: form.attr('action'),
//            data: form.serialize(),
//            success: function (data) {
//           $('#subloader2').empty();
//           $('#subloader2').load('/IOC/employees/loadlistemp').hide().fadeIn('slow');
//            }
//        });
//                                
//                                
//        });
    });

</script>