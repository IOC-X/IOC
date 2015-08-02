<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="newEntry">New entry</a>
	<a href="javascript:void(0)" class="btn btn-primary" id="history">History</a>
</div>
	<script>
        $('#newEntry').click(function(){
            $('#subloader2').load('/IOC/transport/newEntry',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#history').click(function(){
            $('#subloader2').load('/IOC/transport/history',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    </script>
<div id="subloader2">

</div>