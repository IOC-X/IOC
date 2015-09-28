<script>
    var currentTime = new Date();
    var gotdate = currentTime.toDateString();

    document.getElementById("demo").innerHTML = "Today's Date : " + gotdate;
</script>
<legend id="demo"></legend>

<div class="form-group">

    <div class="col-lg-4">
        <div class="bs-component">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Working Employees</h3>
                </div>
                <div class="panel-body">
                    <ul id="loadwork" ></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="bs-component">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees didn't Show up yet</h3>
                </div>
                <div class="panel-body">
                    <ul id="loadnotwork" ></ul>
                </div>
            </div>
        </div>
    </div>
    
        <div class="col-lg-4">
        <div class="bs-component">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees Absence Today</h3>
                </div>
                <div class="panel-body">
                    <ul id="loadadc" ></ul>
                </div>
            </div>
        </div>
    </div>
    
</div>





<script type="text/javascript">
    $(document).ready(function () {
        
         var currentTime = new Date();
        //employee list 
        $.getJSON('employees/list_employees', function (data) {
//attendance list
            $.getJSON('employees/attendance_list', function (dataatt) {
               

                var len = data.length;
                var len2 = dataatt.length;


                for (var x = 0; x < len; x++) {
                    for (var y = 0; y < len2; y++) {

                        if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1 && dataatt[y].atdate == currentTime.getDate() && dataatt[y].colour == "#ff0000")
                        {
                            $('#loadadc').append(
                                    $('<li id="' + x + '"></li>').val(x).html(data[x].firstName + " " + data[x].lastName+'<p align="right">'+" - "+data[x].emptype+'</p>'));
                            break;
                        }
                        else if (data[x].employeeCode == dataatt[y].empCode && dataatt[y].atyear == currentTime.getFullYear() && dataatt[y].atmonth == currentTime.getMonth() + 1 && dataatt[y].atdate == currentTime.getDate())
                        {
                            if(dataatt[y].endTime == null){
                            $('#loadwork').append(
                                    $('<li id="' + x + '"></li>').val(x).html(data[x].firstName + " " + data[x].lastName+" "+'<p align="right">'+" - "+data[x].emptype+'</p>'+ '<p align="right"><input type="number" min="0" palceholder="Pump Reading" required id="value'+x+'" class="pumpReading"></p><p align="right"> <a href="' + data[x].employeeCode + '"  id="'+x+'" class="finishh" >Mark As Finish</a></p>'));
                            break;
                            }
                            else{
                            $('#loadwork').append(
                                    $('<li id="' + x + '"></li>').val(x).html(data[x].firstName + " " + data[x].lastName+" "+'<p align="right">'+" - "+data[x].emptype+'</p>'+ '<p align="right"> - Finished </p>'));
                            break;
                            }                            
                        }
                        else if (y == len2 - 1)
                        {
                            $('#loadnotwork').append(
                                    $('<li id="' + x + '" ></li>').val(x).html(data[x].firstName + " " + data[x].lastName +" - "+data[x].emptype+ '<p align="right"><a href="' + data[x].employeeCode + '"  class="edit" >Mark As Absence</a></p>'));
                        }
                    }
                }

                $('.edit').click(function (e) {
                    var id = $(this).attr('href');
                    var currentTime = new Date();
                    var yearr=currentTime.getFullYear();
                    var monthh=currentTime.getMonth()+1;
                    if(monthh<10)
                    {
                        monthh="0"+monthh;
                    }
                    var datee=currentTime.getDate();
                    swal({title: "Are you sure?",
                        text: "You will not be able to Mark Attendance For this Employee Today!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Mark as Absence it!",
                        cancelButtonText: "No, cancel it!",
                        closeOnConfirm: false,
                        closeOnCancel: false},
                    function (isConfirm) {

                        if (isConfirm) {
                            $.ajax({
                                type: 'post',
                                url: 'employees/addabc',
                                data: {idac: id,idyear:yearr,idmonth:monthh,iddate:datee},
                                success: function (data) {
                                    swal("Done!", "Employee Has Been Set Absence!", "success");
                                    $('#subloader2').empty();
                                    $('#subloader2').load('/IOC/employees/current_attendance').hide().fadeIn('slow');

                                }
                            });

                        } else {
                            swal("Cancelled", "Your Employee is safe :)", "error");
                        }
                    });


                    return false;
                });


                $('.finishh').click(function (e) {
                 
               var id = $(this).attr('href');     
               var p = $(this).attr('id');
               //alert(pumpValue);
             
                        var pumpValue = document.getElementById("value"+p).value;
                       // alert(pumpValue);
                         if(pumpValue == 0){
                               e.preventDefault();
                         swal("Pump Reading Cannot be Empty")
                    }
                       else{
                           
                   //search pump type 

                   $.getJSON('employees/attendance_list', function (dataatt) {
                          var len2 = dataatt.length;

                       for(var f=0;f<len2;f++){
                           
                        
                        if (id == dataatt[f].empCode )
                        {
                           
                           
                           if(dataatt[f].atyear == currentTime.getFullYear())
                           {
                               var a=currentTime.getMonth() + 1;
                               if(a<10)
                               {
                                   a="0"+a;
                               }
                               
                               
                               if(dataatt[f].atmonth == a)
                               {
                                   if(dataatt[f].atdate == currentTime.getDate())
                                   {
                                      //  alert(dataatt[f].atid);
                                 //    dataatt[f].pumps; 
                                   
                             $.getJSON('employees/pump_list', function (data) {
                            var len = data.length;
                          
                            for (x = 0; x < len; x++) {
                                 // alert(dataatt[f].pumps);
                              if(dataatt[f].pumps == data[x].PumpNo)
                                {
                                 var  abc = data[x].Fuel;

                        $.getJSON('employees/gettank', function (dat) { 
                            
                         var spetrol,petrol,diesel,sdiesel;
                         
                                if(abc == "SuperPetrol")
                                {
                                    spetrol=parseInt(dat[0].SPetrol)-parseInt(pumpValue);
//                                    alert(dat[0].SPetrol);
//spetrol=dat[0].SPetrol;
petrol=dat[0].Petrol;
diesel=dat[0].Diesel;
sdiesel=dat[0].SDiesel;
                                }
                                else if(abc == "Petrol")
                                {
                                    petrol=parseInt(dat[0].Petrol)-parseInt(pumpValue);
  //                                  alert(dat[0].Petrol); 
  spetrol=dat[0].SPetrol;
//petrol=dat[0].Petrol;
diesel=dat[0].Diesel;
sdiesel=dat[0].SDiesel;
                                }
                                else if(abc == "Diesel")
                                {
                                    diesel=parseInt(dat[0].Diesel)-parseInt(pumpValue);
    //                                 alert(dat[0].Diesel);
    spetrol=dat[0].SPetrol;
petrol=dat[0].Petrol;
//diesel=dat[0].Diesel;
sdiesel=dat[0].SDiesel;
                                }
                                else if(abc == "SuperDiesel")
                                {
                                    sdiesel=parseInt(dat[0].SDiesel)-parseInt(pumpValue);
      //                               alert(dat[0].SDiesel);
      spetrol=dat[0].SPetrol;
petrol=dat[0].Petrol;
diesel=dat[0].Diesel;
//sdiesel=dat[0].SDiesel;
                                }

  //  alert(tu);
                      
                    var currentTime = new Date();
                    var dateeofthe=currentTime.getMinutes();
                    if(dateeofthe<10)
                    {
                        dateeofthe="0"+dateeofthe;
                    }
                    var tim=currentTime.getHours()+":"+dateeofthe;
                    var yearr=currentTime.getFullYear();
                    var monthh=currentTime.getMonth()+1;
                    if(monthh<10)
                    {
                        monthh="0"+monthh;
                    }
                    var datee=currentTime.getDate();
                    swal({title: "Are you sure?",
                        text: "You want to mark this Employee Finished Work!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Mark as Finish!",
                        cancelButtonText: "No, cancel it!",
                        closeOnConfirm: false,
                        closeOnCancel: false},
                    function (isConfirm) {

                        if (isConfirm) {
                            $.ajax({
                                
                                type: 'post',
                                url: 'employees/addfinish',
                                data: {idac: id,idyear:yearr,idmonth:monthh,iddate:datee,idtime:tim,spetrol:spetrol,petrol:petrol,diesel:diesel,sdiesel:sdiesel},
                                success: function (data) {
                                   
                                    swal("Done!", "Employee Has Been Set Finish!", "success");
                                    $('#subloader2').empty();
                                    $('#subloader2').load('/IOC/employees/current_attendance').hide().fadeIn('slow');

                                }
                            });

                        } else {
                            swal("Cancelled", "Your Employee is safe :)", "error");
                        }
                    });
  
  
  
  //
                        });
   
                                  break;
                                }
                                
                                //alert();
                            }
                            });                                   
                                    break;
                                    }
                               }
                           }
                          
                        }                       
                    }
                     });
                     
           

           
                  
                   //end pump type



                    return false;
                           
                       }
                 
                });

            });

        });

       

    });


</script>