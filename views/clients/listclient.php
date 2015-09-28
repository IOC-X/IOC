<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="clientlistlol"><i class="mdi-av-my-library-books"></i>Client Details</a>
   <a href="javascript:void(0)" class="btn btn-primary" id="searchlistlol"><i class="mdi-av-my-library-books"></i>Search Clients</a>
</div>

<script>


    $('#clientlistlol').click(function () {
        $('#subloader2').load('/IOC/clients/clientlist', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#searchlistlol').click(function () {
        
        $('#subloader2').load('/IOC/clients/clientSearch', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

</script>


<div id="subloader2">
