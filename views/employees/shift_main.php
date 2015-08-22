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

</div>
