<div class="col-lg-12 text-center">
    <h3 class="text-left success"><strong>Earlier NON-Regular Customer Transactions</strong></h3>
</div>
<div class="col-md-3">
    <select id="mySelect" class="form-control">
        <option value="01">January</option>
        <option value="02">February</option>
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

    <select id="mySelect2" class="form-control">
        <option value="2014">2014</option>
        <option value="2015">2015</option>
    </select>

    <input type="button" value="Generate report" class="btn btn-primary" id="sub">
</div>




<script>
    $("#sub").click(function () {
        var month = $('#mySelect').val();
        var year = $('#mySelect2').val();

        var xx = year + "-" + month;
        window.xx = xx;
        $("#pdfloader").load('carwash/NonRegIframe', {month: month, year: year}, function (data) {
            console.log(data);
        });

    });


</script>
<p id="pdfloader">
</p>