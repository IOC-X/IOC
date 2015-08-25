<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="list"><i class="mdi-social-person"></i> employees list</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="add"><i class="mdi-social-person-add"></i> add new employee</a>
</div>
    <script>
        $('#list').click(function(){
            $('#subloader2').load('/IOC/employees/loadlistemp',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#add').click(function(){
            $('#subloader2').load('/IOC/employees/add_employees',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });

    </script>
<br/>

<div id="subloader2">

    
<table class="table table-striped table-hover">
 <col style="width:20%">
 <col style="width:30%">
 <col style="width:20%">
 <col style="width:30%">

  <tbody>
 </tbody>
</table>
    
    
   
    
    
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $.getJSON('employees/list_employees', function (data) {
            var len = data.length;

            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].employeeCode + '">');
                $("." + x + "").append('<td>' + '<img class="circle" src="/IOC/views/employees/propic/'+"IOC"+data[x].userFile+'" id="image">' + '</td>');
                $("." + x + "").append('<td style="text-align:left;">'+'<br\>' +"Employee Code - <b>"+data[x].emptype+"</b><br\>"+"Employee Name - "+data[x].firstName + " " + data[x].lastName+"<br\>Phone Number - "+data[x].mobilePhone+ '</td>');
                $("." + x + "").append('<td>' + '<img class="circle" src="/IOC/views/employees/propic/'+"IOC"+data[x+1].userFile+'" id="image">' + '</td>');
                $("." + x + "").append('<td style="text-align:left;">'+'<br\>' +"Employee Code - <b>"+data[x+1].emptype+"</b><br\>"+"Employee Name - "+data[x+1].firstName + " " + data[x+1].lastName+"<br\>Phone Number - "+data[x+1].mobilePhone+ '</td>');
                $("." + x + "").append('</tr>');
                x=x+1;
            }
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


