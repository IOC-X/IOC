

<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="addclient1"><i class="mdi-av-my-library-books"></i> Add New Client</a>
   <a href="javascript:void(0)" class="btn btn-primary" id="clientmanagement"><i class="mdi-av-my-library-books"></i> Client Management Portal</a>
</div>

<script>


    $('#clientmanagement').click(function () {
        $('#subloader02').load('/IOC/clients/clientmanagement', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#addclient1').click(function () {
        
        $('#subloader02').load('/IOC/clients/addclient', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>

<div id="subloader02">

  
 