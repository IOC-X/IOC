<h3 class="text text-success"><strong>Client Details</strong></h3>
<form class="form-horizontal">
    
    <form class="form-horizontal">
    <fieldset>
        <legend>Search</legend>
        <div class="form-group">
            <div class="col-lg-12">
                <input type="text" class="form-control" id="search_lb" placeholder="Enter Client Name ">
            </div>
        </div>
    </fieldset>
</form>


<table class="table table-striped table-hover ">
    <col style="width:10%">
    <col style="width:10%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:10%">
    <col style="width:10%">
    <col style="width:10%">
     <col style="width:10%">
<!--      <col style="width:10%">-->
 


    <thead>
        <tr>
            <th></th>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>NIC</th>
            <th>Phone</th>
           <th>Pump Details</th>
<!--            <th>Edit</th>
            <th>Delete</th>-->
        </tr>
           
    </thead>
   
                 <tbody id="fbody"></tbody>
   </table>
    
    
        <div class="modal fade" id="myModalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="myFunction()" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><legend>Client History</legend></h4>

                </div>
                <form class="form-horizontal" id="updateemp_form" action="" method="post">
                    <div class="modal-body">

                        <fieldset>

<table class="table table-striped table-hover ">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">

<thead>
        <tr>
            <th>Date</th>
            <th>Client </th>
            <th>Pump Vehicle</th>
            <th>Liters</th>
            <th>Amount</th>
        </tr>
           
</thead>
   
                 <tbody id="newww"></tbody>
</table>


</fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="myFunction()" data-dismiss="modal">Close</button>
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

                $("#fbody").append('<tr class="' + x + '" id="' + data[x].client_id + '">');
                $("." + x + "").append('<td>' + '<img class="circle" src="/IOC/views/clients/propic/'+"IOC"+data[x].profile+'" >' + '</td>');               
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cid" + '">' + data[x].client_id + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id+ "-cname" + '">' + data[x].client_fname +"  "+ data[x].client_lname + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id+ "-caddress" + '">' + data[x].client_address + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cnic" + '">' + data[x].client_nic + '</td>');
                $("." + x + "").append('<td style="text-align:left;" id="' + data[x].client_id + "-cphone" + '">' + data[x].client_phone + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].client_id + "-cnumber" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
          
          
            $('.edit').click(function (e) {
                 e.preventDefault();
                var id = $(this).attr('href');

                $('#myModalle').modal('show');
                setTimeout(function () {
                   
                   //getdatatohis
                   
                   
                   
        $.getJSON('clients/getdatatohis', function (data) {
        
            var len = data.length;
            for (y = 0; y < len; y++) {
                if(data[y].trcusid == id ){
                $("#newww").append('<tr class="' + y + '" id="' + data[y].pump_date + '">');
                $("." + y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-a" + '">' + data[y].pump_date + '</td>');
                $("." + y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-b" + '">' + data[y].client_pumper + '</td>');
                $("." + y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-c" + '">' + data[y].client_pump_vechicle + '</td>');
                $("." + y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-d" + '">' + data[y].client_pump_liters + '</td>');
                $("." + y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-e" + '">' + data[y].pump_value + '</td>');
                $("." + y + "").append('</tr>');
            }
            }
         });          
                   
                   
                   
                   
                   
                }, 250);
               
            });
          
       });
       
    });
    
    $("#search_lb").keyup(function () {

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


function myFunction() {
       

        $('#subloader').load('/IOC/clients/listclients', function () {
        });
   
}
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
