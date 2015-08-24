<script src="/IOC/views/employees/js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="/IOC/views/employees/js/sweetalert.css">
<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="add"><i class="mdi-av-my-library-books"></i> Add New Client</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="list"><i class="mdi-content-sort"></i> Add New Transaction</a>

</div>

<script>


    $('#list').click(function () {
        $('#subloader2').load('/IOC/clients/addclientin', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#add').click(function () {
        $('#subloader2').load('/IOC/employees/current_attendance', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>


<!--<form class="form-horizontal">
    <fieldset>
        <legend>Search</legend>
        <div class="form-group">
            <div class="col-lg-6">
                <input type="text" class="form-control" id="search_lb" placeholder="Enter supplier name">
            </div>
        </div>
    </fieldset>
</form>-->
<form class="form-horizontal">
         <div class="bs-component">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <legend class="panel-title">Search</legend>
                </div>
                <div class="panel-body">
                    <div class="col-lg-15">
                <input type="text" class="form-control" id="search_lb" placeholder="Enter supplier name">
            </div>
                </div></div></div></form>


<table class="table table-striped table-hover ">
    <col style="width:10%">
    <col style="width:10%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:10%">
    <col style="width:10%">
    <col style="width:10%">



    <thead>
        <tr>
            <th></th>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>NIC</th>
            <th>Phone</th>
           <th></th>
<!--            <th>Edit</th>
            <th>Delete</th>-->
        </tr>

    </thead>
    <tbody></tbody>
</table>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><legend>Client History</legend></h4>

                </div>
                <form class="form-horizontal" id="updateemp_form" action="employees/shift_update" method="post">
                    <div class="modal-body">

                        <div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="shiftlist"><i class="mdi-av-my-library-books"></i> Pump History</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="shiftadd"><i class="mdi-av-queue"></i> Payment History</a>
                        </div>
                        
                        
                        <fieldset>


                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="shift_db" class="btn btn-primary">Save changes</button>

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
                $("." + x + "").append('<td>' + '<img class="circle" src="/IOC/views/employees/propic/'+data[x].userFile+'" id="image">' + '</td>');               
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cid" + '">' + data[x].client_id + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id+ "-cname" + '">' + data[x].client_fname +"  "+ data[x].client_lname + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id+ "-caddress" + '">' + data[x].client_address + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cnic" + '">' + data[x].client_nic + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cphone" + '">' + data[x].client_phone + '</td>');
               // $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cpdate" + '">' + data[x].client_purchase_date + '</td>');
               // $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cpamount" + '">' + "Rs : " +data[x].client_purchase_amount + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].client_id + "-cnumber" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
     //         $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            
            $('.edit').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-shiftme').text();
//assing values
//                    $('#shiftid').val(data[mycode].shiftId);
//                    $('#shiftname').val(data[mycode].shiftName);
//                    $('#shiftduration').val(data[mycode].shiftDuration);
//                    $('#shiftrate').val(data[mycode].shiftRate);
                   
                }, 250);
                e.preventDefault();
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
