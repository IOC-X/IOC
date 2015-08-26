<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="addpayment">Add Payment</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="paymentlist">Payment History</a>
</div>
            

<script>
    $('#addpayment').click(function () {
        $('#subloader2').load('/IOC/revenue/addpay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
    $('#paymentlist').click(function () {
        $('#subloader2').load('/IOC/revenue/showpay', function () {
            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
</script>
<br/>
<div id="subloader2">

</div>