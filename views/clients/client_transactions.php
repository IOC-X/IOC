
<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="clienttransadd"><i class="mdi-av-my-library-books"></i>Add Transactions</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="clientpay"><i class="mdi-av-my-library-books"></i> View Transactions</a>
     <a href="javascript:void(0)" class="btn btn-primary" id="clientupdate"><i class="mdi-av-my-library-books"></i> Update Clients</a>

</div>

<div id="subloader02">



<script type="text/javascript">
    
    $('#clientpay').click(function (e2) {
                   
        e2.preventDefault();
 
        $('#subloader02').load('/IOC/clients/clientpay', function () {
        });
    });
    
    
      $('#clientupdate').click(function (e2) {
                   
        e2.preventDefault();
 
        $('#subloader02').load('/IOC/clients/clientupdate', function () {
        });
    });
    
    
      $('#clienttransadd').click(function (e2) {
                   
        e2.preventDefault();
 
        $('#subloader02').load('/IOC/clients/clientaddTransaction', function () {
        });
    });
    
    
    
    $('#clienttrasactions').submit(function (e) {
        e.preventDefault();
 
        swal("Successfully Transaction is Added")
        var form = $('#clienttrasactions');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader').empty();
                $('#subloader').load('/IOC/clients/client_transactions').hide().fadeIn('slow');
            }
        });
            });
            
            
        $.getJSON('clients/getclientdata', function (data) {
            
            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#cliName').append(
                        $('<option class="cliName" id="' + x + '"></option>').val(x).html(data[x].client_fname+" "+data[x].client_lname));

            }
            
            
        });

    function loadnum() {


        var ee = document.getElementById("cliName").value;
        $.getJSON('clients/getclientdata', function (data) {

            document.getElementById("client_id").value = data[ee].client_id;
            document.getElementById("gotemp").value= data[ee].client_fname+" "+data[ee].client_lname;
           
        });
    }



            
            
</script>
    