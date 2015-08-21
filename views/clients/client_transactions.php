<link rel="stylesheet" type="text/css" href="/IOC/views/clients/tooltip.css">
<style>
    #da0, #da1, #da2, #da3, #da4, #daa{
        width: 5px;
        padding: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }   
    
    #ma0,#ma1,#ma2,#ma3,#ma4,#da0,#da1,#da2,#da3,#da4,#daa,#maa{
        float:left;
    }
    
   
</style>


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
            <th>Last Purchased Date</th>
            <th>Phone</th>
            <th>Total Purchase Amount</th>
            <th>New Purchase</th>
          
        </tr>

    </thead>
    <tbody></tbody>
</table>

<script type="text/javascript">
    $(document).ready(function () {
      
        $.getJSON('clients/getclientdata', function (data) {
        
            var len = data.length;
            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].client_id + '">');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cid" + '">' + data[x].client_id + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id+ "-cname" + '">' + data[x].client_fname +"  "+ data[x].client_lname + '</td>');
            //    $("." + x + "").append('<td id="' + data[x].client_id+ "-caddress" + '">' + data[x].client_address + '</td>');
            //    $("." + x + "").append('<td id="' + data[x].client_id + "-cnic" + '">' + data[x].client_nic + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cphone" + '">' + data[x].client_phone + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cpdate" + '">' + data[x].client_purchase_date + '</td>');
                $("." + x + "").append('<td id="' + data[x].client_id + "-cpamount" + '">' + "Rs : " +data[x].client_purchase_amount + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].client_id + "-cnumber" + '">' + x + '</td>');
//                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
//                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].client_id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            });
            });
   
 </script>