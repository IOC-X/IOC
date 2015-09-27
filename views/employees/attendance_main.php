<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="add"><i class="mdi-av-my-library-books"></i> Current Attendance</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="list"><i class="mdi-content-sort"></i> Attendance History</a>

</div>
<script>


    $('#list').click(function () {
        $('#subloader2').load('/IOC/employees/history_attendance', function () {
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

<br/>



<div id="subloader2">



    <div class="col-lg-8">
        <form class="form-horizontal" method="post" action="employees/addattend" id="clicksub">
            <fieldset>
                <legend>Attend Manually</legend>
                <div class="form-group">
                    <label for="dates" class="col-lg-3 control-label">Date</label>
                    <div class="col-lg-6">
<!--                        <input type="date" class="form-control"  id="dates"  name="dates" onchange="loadsplit()" required>  -->
                        <input type="text" class="form-control" id="curentdate" name="curentdate" readonly>
                        <input type="hidden" id="atyear" name="atyear">
                        <input type="hidden" id="atmonth" name="atmonth">
                        <input type="hidden" id="atdate" name="atdate">

                    </div>
                </div> 
                <div class="form-group">
                    <label for="timesid" class="col-lg-3 control-label">Time</label>
                    <div class="col-lg-6">
                       <input type="time" class="form-control"  id="timesid"  name="timesid" required="">
                        
                    </div>
                </div> 
                <div class="form-group">
                    <label for="empname" class="col-lg-3 control-label">Employee Name</label>
                    <div class="col-lg-6">
                        <select id="empname"  class="form-control" name="empname" onchange="loademp()" required >
                            
                            <option></option>

                        </select>
                        <input type="hidden" id="gotemp" name="gotemp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="shiftname" class="col-lg-3 control-label">Shift </label>
                    <div class="col-lg-6">
                        <select id="shiftname"  class="form-control" name="shiftname" onchange="loadshift()" required>
                            <option></option>
                            <input type="hidden" id="shiftidd" name="shiftidd">
                            <input type="hidden" id="shiftrated" name="shiftrated">
                            <input type="hidden" id="shiftcolourd" name="shiftcolourd">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pumpemp" class="col-lg-3 control-label">Pump</label>
                    <div class="col-lg-6">
                        <select id="pumpemp" class="form-control" name="pumpemp" onchange="loadpump()" required>
                            <option></option>
                        </select>
                        <input type="hidden" id="pumpidd" name="pumpidd">
                    </div>
                </div> 

                <div class="form-group">
                    <div class="col-lg-11 col-lg-offset-6">
                        <button type="submit" class="btn btn-primary" >Start</button>
                    </div>
                </div>	
            </fieldset>
        </form>
    </div>





    <div class="col-lg-4">
        <div class="bs-component">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Employee Details</h3>
                </div>
                <div class="panel-body">



                    <div class="row-picture">
                        <img  src="/IOC/views/employees/propic/IOCdefault.png" id="circle">

                    </div>
                    <br>
                    <p id="forempcode" style="font-size: 18px"></p>
                    <p id="foremptype" style="font-size: 18px"></p>

                </div>
            </div>
        </div>
    </div>





</div>
<style>
    
    #circle
    {
        border-radius:50% 50% 50% 50%;  
        width:120px;
        height:120px;
    }
</style>


<script type="text/javascript">
    //data config
    var d1 = new Date();
            document.getElementById("atyear").value = d1.getFullYear();
            var dd1=d1.getMonth()+1;
            if(dd1<10)
            {
                dd1="0"+dd1;
            }
            document.getElementById("atmonth").value =dd1 ;
            var ddd1=d1.getDate();
            if(ddd1<10)
            {
                ddd1="0"+ddd1;
            }
            document.getElementById("atdate").value = ddd1;
            document.getElementById("curentdate").value=d1.getFullYear()+" - "+dd1+" - "+ddd1;
   //from data base 
    $(document).ready(function () {
    
        //employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list
            $.getJSON('employees/attendance_list', function (dataatt) {
                var len = data.length;
                var len2 = dataatt.length;
                var currentTime = new Date();

                for (var x = 0; x < len; x++) {
                    for (var y = 0; y < len2; y++) {

                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1 && dataatt[y].atdate == currentTime.getDate())
                        {
                            break;
                        }
                        else if (y == len2 - 1)
                        {
                            $('#empname').append(
                                    $('<option class="empcode" id="' + x + '"></option>').val(x).html(data[x].firstName + " " + data[x].lastName));
                        }
                    }
                }
            

			           });
            });

      //  });
        //shiftlist
        $.getJSON('employees/shift_list', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#shiftname').append(
                        $('<option class="shiftcode" id="' + x + '"></option>').val(x).html(data[x].shiftName));

            }
        });
        //pump list
        $.getJSON('employees/pump_list', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#pumpemp').append(
                        $('<option class="pumpcode" id="' + x + '"></option>').val(x).html(data[x].PumpNo));

            }
        });
    });
//employee list
    function loademp() {


        var ee = document.getElementById("empname").value;
        $.getJSON('employees/list_employees', function (data) {


            $('#forempcode').text("Employee Code = " + data[ee].employeeCode);
            $('#foremptype').text("Employee Type = " + data[ee].emptype);
            $("#circle").attr("src", "/IOC/views/employees/propic/" +"IOC"+ data[ee].userFile);
            document.getElementById("gotemp").value = data[ee].employeeCode;
        });
    }
//shift list
    function loadshift() {

        var ss = document.getElementById("shiftname").value;
        $.getJSON('employees/shift_list', function (data) {
            document.getElementById("shiftidd").value = data[ss].shiftId;
            document.getElementById("shiftrated").value = data[ss].shiftRate;
            document.getElementById("shiftcolourd").value = data[ss].shiftcolor;

        });
    }
//pump list
    function loadpump() {
        var ss = document.getElementById("pumpemp").value;
        $.getJSON('employees/pump_list', function (data) {
            document.getElementById("pumpidd").value = data[ss].PumpNo;
        });

    }
//dte changer loadsplit()
//    function loadsplit() {
//
//        var gotdate = $("#dates").val();
//
//
//        var fields = gotdate.split("-");
//        var yearr = fields[0];
//        var monthh = fields[1];
//        var datee = fields[2];
//
//
//        var currentTime = new Date();
//        if (currentTime.getYear() <= yearr && currentTime.getMonth() <= monthh && currentTime.getDate() <= datee)
//        {
//            document.getElementById("atyear").value = yearr;
//            document.getElementById("atmonth").value = monthh;
//            document.getElementById("atdate").value = datee;
//
//        }
//        else {
//
//            swal("You Cannot Select Previous Dates!!");
//            document.getElementById("dates").value = null;
//        }
//
//
//    }


    $('#clicksub').submit(function (e) {
        e.preventDefault();
        var form = $('#clicksub');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader').empty();
                $('#subloader').load('/IOC/employees/attendance_main').hide().fadeIn('slow');
            }
        });
    });
</script>


<!--<script>
    var currentTime = new Date();
    var dateadd = currentTime.getDate();
    if (dateadd < 10)
    {
        dateadd = "0" + dateadd;
    }

    var monthadd = currentTime.getMonth();
    if (monthadd < 10)
    {
        monthadd = "0" + monthadd;
    }

    var houradd = currentTime.getHours();
    if (houradd < 10)
    {
        houradd = "0" + houradd;
    }

    var minadd = currentTime.getMinutes()
    if (minadd < 10)
    {
        minadd = "0" + minadd;
    }
    var seadd = currentTime.getSeconds()
    if (seadd < 10)
    {
        seadd = "0" + seadd;
    }
    var gotdate = currentTime.getFullYear() + "-" + monthadd + "-" + dateadd + "   " + houradd + " : " + minadd + " : " + seadd;

    document.getElementById("dates").value = gotdate;
</script>-->
