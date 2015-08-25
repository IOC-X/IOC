<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="shiftlist"><i class="mdi-av-my-library-books"></i> Shift list</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="shiftadd"><i class="mdi-av-queue"></i>  add new Shift</a>
</div>
            

<script>
    $('#shiftlist').click(function () {
        $('#subloader2').load('/IOC/employees/shiftload', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#shiftadd').click(function () {
        $('#subloader2').load('/IOC/employees/shift_add', function () {
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
        $.getJSON('employees/shift_list', function (data) {
            var len = data.length;

            for (x = 0; x < len; x++) {

                $("tbody").append('<tr class="' + x + '" id="' + data[x].shiftId + '">');
                $("." + x + "").append('<td>'+'<p class="box" style="background-color:'+data[x].shiftcolor+' "></p>'+ '</td>');
                $("." + x + "").append('<td style="text-align:left;">'+'<br\>' +"Shift ID - <b>"+data[x].shiftId+"</b><br\>"+"Shift Name - "+data[x].shiftName+"<br\>Shift Duration - "+data[x].shiftDuration+"<br\>Shift Rate - Rs "+data[x].shiftRate+ '</td>');
                $("." + x + "").append('<td>'+'<p class="box" style="background-color:'+data[x+1].shiftcolor+' "></p>'+ '</td>');
                $("." + x + "").append('<td style="text-align:left;">'+'<br\>' +"Shift ID - <b>"+data[x+1].shiftId+"</b><br\>"+"Shift Name - "+data[x+1].shiftName+"<br\>Shift Duration - "+data[x+1].shiftDuration+"<br\>Shift Rate - Rs "+data[x+1].shiftRate+ '</td>');
                $("." + x + "").append('</tr>');
                x=x+1;
            }
             });
            });
</script>

<style>
.box {
    width: 50px;
    height: 50px;
    padding: 10px;
    margin-left:50px;
    margin-top: 25px;
    border-radius: 99em;
   // margin-right:100px;
}
</style>