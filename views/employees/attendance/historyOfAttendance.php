<link rel="stylesheet" type="text/css" href="/IOC/views/employees/tooltip.css">
<style>
#da0,#da1,#da2,#da3,#da4,#daa{
    width: 5px;
    padding: 10px;
    margin-left:10px;
    margin-right:10px;
}
#ma0,#ma1,#ma2,#ma3,#ma4,#da0,#da1,#da2,#da3,#da4,#daa,#maa{
    float:left;
}

</style>


<legend>Search Attendance</legend>
<form class="form-horizontal" action="test1.php" method="GET" id="searchat">
    <fieldset>

        <div class="form-group">


            <div class="col-lg-2 control-label">
                <label for="year">Year</label>
            </div>

            <div class="col-lg-2">
                <select class="form-control" id="idyear" required="">
                    <option></option>
                </select>
            </div>

            <div class="col-lg-2 control-label">
                <label for="month">Month</label>
            </div>

            <div class="col-lg-2">
                <select class="form-control" id="idmonth" required="">
                    <option></option>
                    <option value="01" >January</option>
                    <option value="02" >February</option>
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

        <div class="col-lg-2 control-label">
            <p align="right"> <button type="submit" class="btn btn-flat btn-primary" >Search</button></p>
        </div>

        </div>
    </fieldset>
</form>

<span id="res"></span>
<script src="/IOC/views/employees/attendance/alasql.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {

//attendance list
        $.getJSON('employees/attendance_list', function (dataatt) {

            var res = alasql('SELECT  atyear  FROM ? GROUP BY atyear', [dataatt]);

            var dam = JSON.stringify(res);
            dam = dam.replace(/[^0-9\.]+/g, "");
            var countar = dam.length / 4;

            var firstnum = 0;
            var lastnum = 4;
            for (var x = 0; x < countar; x++) {
                var sam = dam.slice(firstnum, lastnum);
                $('#idyear').append(
                        $('<option class="year" id="' + x + '"></option>').val(x).html(sam));

                lastnum = lastnum + 4;
                firstnum = firstnum + 4;
            }
        });
    });
</script>


<div id="subloader02"  >

<table class="table table-striped table-hover ">
    
    <p id="da0"></p><p id="ma0"></p>
    <p id="da1"></p><p id="ma1"></p>
    <p id="da2"></p><p id="ma2"></p>
    <p id="da3"></p><p id="ma3"></p>
    <p id="da4"></p><p id="ma4"></p>
    <p id="daa" style="background-color:red"></p><p id="maa">Absence</p>
    <thead>
        
    </thead>
    <tbody>
        
    </tbody>
</table>
    
    
    
    
</div>
<script type="text/javascript">
    $(document).ready(function () {
           

           
                       var d = new Date();
            var cuyear = d.getFullYear();
            var cumonth = d.getMonth() + 1;
            if (cumonth < 10) {
                cumonth = "0" + cumonth;
            }

            if (cumonth == "01" || cumonth == "03" || cumonth == "05" || cumonth == "07" || cumonth == "08" || cumonth == "10" || cumonth == "12")
            {
//                $('#subloader02').load('/IOC/employees/with31month', function () {
//                    $('#subloader02').hide();
//                    $('#subloader02').fadeIn('fast');
//                });


//start of 31 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                var currentTime = new Date();
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');
                    $("." + dd + "").append('<th >30</th>');
                    $("." + dd + "").append('<th >31</th>');
             
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x30"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x31"+x + '"></td>');
                    
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "30")
                            {
                                $("#x30"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "31")
                            {
                                $("#x31"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 

                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 31 day table                
            
            }
            
            
            else if (cumonth == "04" || cumonth == "06" || cumonth == "09" || cumonth == "11") {


//start of 30 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                var currentTime = new Date();
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');
                    $("." + dd + "").append('<th >30</th>');
                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    //damsam
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"   onclick=myFunction("'+data[x].employeeCode+'") class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x30"+x + '"></td>');
                    
                    
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "30")
                            {
                                $("#x30"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 30 day table                


            }
            else {
                if ((cuyear % 4 == 0 && (cuyear % 100 != 0)) || (cuyear % 400 == 0))
                {


//start of 28 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                var currentTime = new Date();
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');                                        
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }                    
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 28 day table 

                }
                else {

//start of 28 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                var currentTime = new Date();
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    
                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                                
                 
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }

                            
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 28 day table 


                }

            }

           
           
           
    });

</script>



<!-- change to selection -->
<script>
        $('#searchat').submit(function (e) {
        e.preventDefault();




        var e1 = document.getElementById("idyear");
        var dyear = e1.options[e1.selectedIndex].text;
        var dmonth = document.getElementById("idmonth").value;
        




            if (dmonth == "01" || dmonth == "03" || dmonth == "05" || dmonth == "07" || dmonth == "08" || dmonth == "10" || dmonth == "12")
            {
          $("tbody").empty();
          $("thead").empty();
         
//start of 31 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');
                    $("." + dd + "").append('<th >30</th>');
                    $("." + dd + "").append('<th >31</th>');
             
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x30"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x31"+x + '"></td>');
                    
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == dyear && dataatt[y].atmonth == dmonth)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "30")
                            {
                                $("#x30"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "31")
                            {
                                $("#x31"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 

                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).empty();
            $("#ma"+z).empty();
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 31 day table                
            
            }
            
            
            else if (dmonth == "04" || dmonth == "06" || dmonth == "09" || dmonth == "11") {

          $("tbody").empty();
          $("thead").empty();
//start of 30 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');
                    $("." + dd + "").append('<th >30</th>');
                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x30"+x + '"></td>');
                    
                    
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == dyear && dataatt[y].atmonth == dmonth)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "30")
                            {
                                $("#x30"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).empty();
            $("#ma"+z).empty();
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 30 day table                


            }
            else {
                if ((dyear % 4 == 0 && (dyear % 100 != 0)) || (dyear % 400 == 0))
                {
          $("tbody").empty();
          $("thead").empty();

//start of 28 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    $("." + dd + "").append('<th >29</th>');                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x29"+x + '"></td>');                                        
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == dyear && dataatt[y].atmonth == dmonth)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "29")
                            {
                                $("#x29"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }                    
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).empty();
            $("#ma"+z).empty();
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 28 day table 

                }
                else {
          $("tbody").empty();
          $("thead").empty();
//start of 28 day table        
//employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list

            $.getJSON('employees/attendance_list', function (dataatt) {
                
                    var dd="emp";
                    $("thead").append('<tr class="' + dd + '">');
                    $("." + dd + "").append('<th >Employee ID</th>');
                    $("." + dd + "").append('<th >01</th>');
                    $("." + dd + "").append('<th >02</th>');
                    $("." + dd + "").append('<th >03</th>');
                    $("." + dd + "").append('<th >04</th>');
                    $("." + dd + "").append('<th >05</th>');
                    $("." + dd + "").append('<th >06</th>');
                    $("." + dd + "").append('<th >07</th>');
                    $("." + dd + "").append('<th >08</th>');
                    $("." + dd + "").append('<th >09</th>');
                    $("." + dd + "").append('<th >10</th>');
                    $("." + dd + "").append('<th >11</th>');
                    $("." + dd + "").append('<th >12</th>');
                    $("." + dd + "").append('<th >13</th>');
                    $("." + dd + "").append('<th >14</th>');
                    $("." + dd + "").append('<th >15</th>');
                    $("." + dd + "").append('<th >16</th>');
                    $("." + dd + "").append('<th >17</th>');
                    $("." + dd + "").append('<th >18</th>');
                    $("." + dd + "").append('<th >19</th>');
                    $("." + dd + "").append('<th >20</th>');
                    $("." + dd + "").append('<th >21</th>');
                    $("." + dd + "").append('<th >22</th>');
                    $("." + dd + "").append('<th >23</th>');
                    $("." + dd + "").append('<th >24</th>');
                    $("." + dd + "").append('<th >25</th>');
                    $("." + dd + "").append('<th >26</th>');
                    $("." + dd + "").append('<th >27</th>');
                    $("." + dd + "").append('<th >28</th>');
                    
                                 
                var len = data.length;
                var len2 = dataatt.length;

                for (var x = 0; x < len; x++) {
                    
                    $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                    $("." + x + "").append('<td id="' + "coder"+x + '"  onclick=myFunction("'+data[x].employeeCode+'")  class="tooltip-left" data-tooltip="'+ data[x].firstName + " " + data[x].lastName +'"></td>');
                    $("." + x + "").append('<td id="' + "x1"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x2"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x3"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x4"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x5"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x6"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x7"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x8"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x9"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x10"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x11"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x12"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x13"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x14"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x15"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x16"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x17"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x18"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x19"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x20"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x21"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x22"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x23"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x24"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x25"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x26"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x27"+x + '"></td>');
                    $("." + x + "").append('<td id="' + "x28"+x + '"></td>');
                                
                 
                    for (var y = 0; y < len2; y++) {
                        
                        //assing empcode to table 1st colum
                        if (y == "0")
                        {
                            $("#coder"+x).append(data[x].employeeCode);
                        }

                        //assing dates to other colums  
                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == dyear && dataatt[y].atmonth == dmonth)
                        {
                            if (dataatt[y].atdate == "01")
                            {
                                $("#x1"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "02")
                            {
                                $("#x2"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "03")
                            {
                                $("#x3"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "04")
                            {
                                $("#x4"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "05")
                            {
                                $("#x5"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "06")
                            {
                                $("#x6"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "07")
                            {
                                $("#x7"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "08")
                            {
                                $("#x8"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "09")
                            {
                                $("#x9"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "10")
                            {
                                $("#x10"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "11")
                            {
                                $("#x11"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "12")
                            {
                                $("#x12"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "13")
                            {
                                $("#x13"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "14")
                            {
                                $("#x14"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "15")
                            {
                                $("#x15"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "16")
                            {
                                $("#x16"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "17")
                            {
                                $("#x17"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "18")
                            {
                                $("#x18"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "19")
                            {
                                $("#x19"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } else if (dataatt[y].atdate == "20")
                            {
                                $("#x20"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "21")
                            {
                                $("#x21"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "22")
                            {
                                $("#x22"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "23")
                            {
                                $("#x23"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "24")
                            {
                                $("#x24"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            } 
                            else if (dataatt[y].atdate == "25")
                            {
                                $("#x25"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }
                            else if (dataatt[y].atdate == "26")
                            {
                                $("#x26"+x).css('backgroundColor',dataatt[y].colour)
                                
                                $("#x26"+x).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "27")
                            {

                                $("#x27"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                            }
                            else if (dataatt[y].atdate == "28")
                            {
                                $("#x28"+x).css('backgroundColor',dataatt[y].colour).append('<a style="text-decoration:none" class="tooltip-top"  data-tooltip="'+"Work In Time "+ dataatt[y].startTime +"&nbsp; Work Out Time "+dataatt[y].endTime+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>' );
                                
                            }

                            
                         }

                    }
                    $("." + x + "").append('</tr>');
                }
            });

        });

        $.getJSON('employees/shift_list', function (data3) {
        var len3 = data3.length;
        
        for(var z=0;z<len3;z++){
            $("#da"+z).empty();
            $("#ma"+z).empty();           
            $("#da"+z).css('backgroundColor',data3[z].shiftcolor)
            $("#ma"+z).append(data3[z].shiftName);
        }
     });
                
//start of 28 day table 


                }

            }
});



    </script>

    
    
    <!-- start of model -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  

                </div>

                
          <div id="chartContainer" style="height: 300px; width: 100%;"></div>      
                

            </div>
        </div>
    </div>


<!-- end of model -->

<script type="text/javascript">
function myFunction(a) {
        var empcode=a;
       
       var e1 = document.getElementById("idyear");
        var ddyear = e1.options[e1.selectedIndex].text;
      //  var ddyear = document.getElementById("idyear").value;
        var ddmonth = document.getElementById("idmonth").value; 
//alert(ddyear+" "+ddmonth);
    if(ddyear == "" || ddmonth == ""){
        
            var d = new Date();
            var cuyear = d.getFullYear();
            var cumonth = d.getMonth() + 1;
            if (cumonth < 10) {
                cumonth = "0" + cumonth;
            }
            
        }else{
            
            cuyear=ddyear;
            cumonth=ddmonth;
        }
//alert(cuyear+" "+cumonth);            
          var present=parseInt("0");
          var abcens=parseInt("0");
          
         
                             $.getJSON('employees/attendance_list', function (data) {
                   var len = data.length;
           
                   for(var x=0;x<len;x++)
                   {
                     
                       if(data[x].atyear == cuyear )
                       {
                                   
                           if(data[x].atmonth == cumonth ){
                             
                               if(data[x].empCode == empcode)
                               {
                                   
                                    if(data[x].colour == "#ff0000")
                                    {
                                        abcens=parseInt(abcens)+1;
                                    }
                                    else
                                    {
                                        present=parseInt(present)+1;
                                    }
                                    
                                   
                                   
                               }
                               
                           }
                           
                           
                       }
                   }
    
    
    });
   var name;
    $.getJSON('employees/list_employees', function (data1) { 
        for(var y=0;y<data1.length;y++)
        {
            
            if(data1[y].employeeCode==empcode)
            {
               name= data1[y].firstName + " " + data1[y].lastName;
                
            }
        }
    });
   
   
          
                $('#myModal').modal('show');
                setTimeout(function () {
              //    alert(abcens+" - "+present);
//lolman
                   
var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Employee "+name+" Attendance For "+cuyear+"-"+cumonth
		},
		exportFileName: "Pie Chart",
		exportEnabled: true,
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{legendText}: <strong>{y}%</strong>",
			indexLabel: "{label} {y}%",
			dataPoints: [
				{  y: present, legendText: "Present", exploded: true, label: "Present" },
				{  y: abcens, legendText: "Absence", label: "Absence" },

			]
	}
	]
	});
	chart.render();
                   
                   
                   
                   
                   
                }, 250);
                e.preventDefault();
   
  
  
  
}
</script>


<!--


	




-->
<script type="text/javascript" src="/IOC/views/employees/attendance/canvasjs.min.js"></script>
