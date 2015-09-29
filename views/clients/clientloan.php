


<form class="form-horizontal" method="post" action="clients/insertTranactions" id="clienttrasactions">
    <fieldset> 
<div class="form-group">
            <label for="cname" class="col-lg-2 control-label">Client Name</label>
            <div class="col-lg-3">
            
                <select id="cliName" class="form-control" name="cliName" onchange="loadnum()" required>
                <option></option>
                </select>
            </div>

            
            <label for="cyear" class="col-lg-1 control-label">Year</label>
            <div class="col-lg-2">
            
                <select id="cliyear" class="form-control" name="cliyear" onchange="loadyear()" required>
                <option></option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                </select>
            </div>
  
                        <label for="cmonth" class="col-lg-1 control-label">Month</label>
            <div class="col-lg-2">
            
                <select id="climonth" class="form-control" name="climonth" onchange="loadmonth()" required>
                <option></option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>                
                </select>
            </div>
            
            
            
            
        </div>
        </fieldset>
</form>

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

        <div class="form-group">
            <label for="" class="col-lg-2 control-label">Total Amount</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="amountt" placeholder="" name="amountt" readonly >
            </div>
        </div>
<br>
<!--<button  class="btn btn-success btn-raised" id="form-submitted" name="form-submitted">Inform Customer</button>-->

<script>

    
      $.getJSON('clients/getclientdata', function (data) {
            
            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#cliName').append(
                        $('<option class="cliName" id="' + x + '"></option>').val(x).html(data[x].client_fname+" "+data[x].client_lname));

            }
            
            
        });

    function loadnum() {
var Table = document.getElementById("newww");
Table.innerHTML = "";
var totalof=parseInt("0");
        var ee = document.getElementById("cliName").value;
        $.getJSON('clients/getclientdata', function (datae) {

                               
        $.getJSON('clients/getdatatohis', function (data) {
   
        
        
            var len = data.length;
            for (y = 0; y < len; y++) {
                if(data[y].trcusid == datae[ee].client_id ){
                $("#newww").append('<tr class="' +"a"+y + '" id="' + data[y].pump_date + '">');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-a" + '">' + data[y].pump_date + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-b" + '">' + data[y].client_pumper + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-c" + '">' + data[y].client_pump_vechicle + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-d" + '">' + data[y].client_pump_liters + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-e" + '">' + data[y].pump_value + '</td>');
                $("." + "a"+y + "").append('</tr>');
                totalof=totalof+parseInt(data[y].pump_value);
            }
            }
              document.getElementById("amountt").value=totalof; 
            
      });   
            
           
        });
    }
    
        function loadmonth() {
        
var Table = document.getElementById("newww");
Table.innerHTML = "";

document.getElementById("amountt").value="";

var totalof=parseInt("0");

        var ee = document.getElementById("cliName").value;
        var ss = document.getElementById("cliyear").value;
     var tt = document.getElementById("climonth").value;
       // $.getJSON('clients/getclientdata', function (data) {

                               
        $.getJSON('clients/getdatatohis', function (data) {
        
            var len = data.length;
            for (y = 0; y < len; y++) {
                if(data[y].trcusid == data[ee].trcusid ){
                    
                    var datetake=data[y].pump_date;
                     var res = datetake.split("-", 1);
               if(ss==res){
                                       var datetake=data[y].pump_date;
                     var ress = datetake.split("-", 2);
                   
                   
                    if(tt==ress){
                    
                    
                    
                    
                $("#newww").append('<tr class="' +"a"+y + '" id="' + data[y].pump_date + '">');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-a" + '">' + data[y].pump_date + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-b" + '">' + data[y].client_pumper + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-c" + '">' + data[y].client_pump_vechicle + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-d" + '">' + data[y].client_pump_liters + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-e" + '">' + data[y].pump_value + '</td>');
                $("." + "a"+y + "").append('</tr>');
                totalof=totalof+parseInt(data[y].pump_value);
            }
            }
            }
            }
              document.getElementById("amountt").value=totalof; 
            
      //   });   
            
           
        });
    }





   function loadyear() {
        
var Table = document.getElementById("newww");
Table.innerHTML = "";

document.getElementById("amountt").value="";

var totalof=parseInt("0");

        var ee = document.getElementById("cliName").value;
        var ss = document.getElementById("cliyear").value;
    
       // $.getJSON('clients/getclientdata', function (data) {

                               
        $.getJSON('clients/getdatatohis', function (data) {
        
            var len = data.length;
            for (y = 0; y < len; y++) {
                if(data[y].trcusid == data[ee].trcusid ){
                    
                    var datetake=data[y].pump_date;
                     var res = datetake.split("-", 1);
               if(ss==res){
                    
                    
                    
                    
                    
                $("#newww").append('<tr class="' +"a"+y + '" id="' + data[y].pump_date + '">');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-a" + '">' + data[y].pump_date + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-b" + '">' + data[y].client_pumper + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date+ "-c" + '">' + data[y].client_pump_vechicle + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-d" + '">' + data[y].client_pump_liters + '</td>');
                $("." + "a"+y + "").append('<td style="text-align:left;" id="' + data[y].pump_date + "-e" + '">' + data[y].pump_value + '</td>');
                $("." + "a"+y + "").append('</tr>');
                totalof=totalof+parseInt(data[y].pump_value);
            }
            }
            }
              document.getElementById("amountt").value=totalof; 
            
      //   });   
            
           
        });
    }

</script>