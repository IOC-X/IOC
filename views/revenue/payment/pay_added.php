<form class="form-horizontal" method="post" action="revenue/pay_details" id="clicksub">
    <fieldset>
        <legend>Employee Payment</legend>
        <div class="form-group">
            <label for="empid" class="col-lg-2 control-label">Employee Code</label>
            <div class="col-lg-7">
                <select id="empid" name="empid" class="form-control">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="empname" class="col-lg-2 control-label">Employee Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="empname" placeholder="" name="empname"
                    >
            </div>
        </div>
        <div class="form-group">
            <label for="nic" class="col-lg-2 control-label">NIC</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="nic" placeholder="" name="nic"
                       pattern="[0-9V]{1,10}" title="Use only numbers " required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="date" class="col-lg-2 control-label">Date</label>
            <div class="col-lg-7">
                <input type="date" class="form-control" placeholder="" id="date">
            </div>
        </div> 
        
        <div class="form-group">
            <label for="salary" class="col-lg-2 control-label">Salary</label>
            <div class="col-lg-7">
                
                <input type="text" class="form-control" id="salary" name="salary" placeholder="">
            </div>
        </div> 

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>	
    </fieldset>
</form>


<script>
    $(document).ready(function(){
        console.log("sending")
        $.getJSON('revenue/loadEmpData',function(data){
            var len = data.length;
            for(a=0;a<len;a++){
                $('#empid').append("<option value='"+ data[a].employeeCode +"'>" + data[a].employeeCode + "</option>")
            }
        });
        $('#empid').change(function(){
            empID = $(this).val();
            $.getJSON('revenue/loadEmpDataSpec',{ empCode : empID },function(data){
                console.log(data);
                $("#empname").val(data[0].firstName + " " + data[0].lastName);
                $("#nic").val(data[0].nicNumber);
            });
        });
        $("#date").focusout(function(){
            fulldate = $(this).val();
            year = fulldate.substr(0,4);
            month = fulldate.substr(4,4);
            date = fulldate.substr(8,9);
            realMonth = month.substr(1,2);
        
            $.getJSON('revenue/getShiftDetails',{ empCode : empID , year : year , month : realMonth , date : date },function(data){
                console.log(data[0].startTime);
                startTime = data[0].startTime;
                endTime = data[0].endTime;       
                duration = Number(endTime - startTime);

                salary = 1500;
                $("#salary").val(salary);
            });
        });

        $("#clicksub").submit(function(e){
            e.preventDefault();
            var form = $("#clicksub");
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data : form.serialize(),
              success: function(data){
                console.log(data);
                if(data == "Success"){
                    swal("Success !", "Order entries successfully added !", "success");
                    $('#subloader2').load('/IOC/revenue/showpay', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                    });
                }
                $('#calculate').attr('disabled','disabled');                    
              }
            });
        });


    });
</script>