<div class="col-lg-12" id="pay_show">
    <!-- DISPLAYING LATEST LUBRICANT INCOME-->
    <div>
        <h3 class="text-center success"><strong>Payment History</strong></h3>

    </div>
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr class="success">
                <th>Employee Code</th>
                <th>Employee Name</th>
                <th>NIC</th>
                <th>Date</th>
                <th>Shift Type</th>
                <th>Gross Salary</th>
                <th>EPF</th>
                <th>Net Salary</th>
                <th>Paid</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>

<div class="ui modal" id="modalT" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-justify">Edit Payment Details</h4>
            </div>
            <form role="form" action="" name="frmPayment" method="post">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>ID</label>
                        <input name="id" id="id" class="form-control" required readonly="">
                    </div>
                    <div class="form-group">
                        <label>Employee Code</label>
                       <!-- <select class="btn form-control" id="empcode" name="empcode">
                            <?php //foreach ($type as $prodtype) : ?>
                                <option value="<?php //echo ($prodtype->prdType); ?>"><?php //echo ($prodtype->prdType); ?></option>
                            <?php //endforeach; ?>
                        </select> -->

                       <input name="empcode" id="empcode" class="form-control" required>

                    </div>

                    <div class="form-group">
                        <label>Employee Name</label>

                        <input name="empname" id="empname" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>NIC</label>
                        <input name="nic" id="nic" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input name="date" id="date" class="form-control form_datetime" required>
                    </div>

                    <div class="form-group">
                        <label>Shift Type</label>
                        <input name="shtype" id="shtype" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Gross Salary</label>
                        <input type="text" name="gsal" id="gsal" class="form-control" required>
                    </div> 

                    <div class="form-group">
                        <label>EPF</label>
                        <input name="epf" id="epf" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Net Salary</label>
                        <input type="text" name="nsal" id="nsal" class="form-control" required>
                    </div> 


                    <div class="form-group">
                        <label>Paid</label>
                        <input name="paid" id="paid" class="form-control" required>
                    </div> 



                    <button type="submit" class="btn btn-primary btn-lg" name="form-submitted" id="form-submitted">
                        <span class="mdi-content-create" aria-hidden="true"></span> Edit
                    </button>

                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   $(document).ready(function () {
       
        $.getJSON('revenue/pay_list', function (data) {
           //alert("dsa");
            var len = data.length;

            for (x = 0; x < len; x++) {
               
                $("tbody").append('<tr class="' + x + '" id="' + data[x].payID + '">');
                $("." + x + "").append('<td id="' + data[x].payID + "-empID" + '">' + data[x].empID + '</td>');              
                $("." + x + "").append('<td id="' + data[x].payID + "-empName" + '">' + data[x].empName + '</td>'); 
                $("." + x + "").append('<td id="' + data[x].payID + "-NIC" + '">' + data[x].NIC + '</td>');                
                $("." + x + "").append('<td id="' + data[x].payID + "-date" + '">' + data[x].date + '</td>');
                $("." + x + "").append('<td id="' + data[x].payID + "-shifttype" + '">' + data[x].shifttype + '</td>');
                $("." + x + "").append('<td id="' + data[x].payID + "-grosssal" + '">'+ "Rs : " + data[x].grosssal + '</td>');
                $("." + x + "").append('<td id="' + data[x].payID + "-epf" + '">'  +data[x].epf  + '</td>');
                $("." + x + "").append('<td id="' + data[x].payID + "-netsal" + '">'  +data[x].netsal  + '</td>');
                $("." + x + "").append('<td id="' + data[x].payID + "-paid" + '">'  +data[x].paid  + '</td>');

                $("." + x + "").append('<td class="hide" id="' + data[x].payID + "-pod" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].payID + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].payID + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function (e) {
                var id = $(this).attr('href');

                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Payment!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel it!",
                    closeOnConfirm: false,
                    closeOnCancel: false},
                function (isConfirm) {

                        
                                            if (isConfirm) {
                        $.ajax({
                            type: 'post',
                            url: 'revenue/delete_payment',
                            data: {id2: id},
                            success: function (data) {
                                swal("Deleted!", "Your payment information has been deleted!", "success");
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/revenue/pay_show').hide().fadeIn('slow');
                               
                            }
                        });

                    }
                        
                        

                     else {
                        swal("Cancelled", "Your Pyment data is safe..", "error");
                    }
                });


                return false;
            });

             $('.edit').click(function(e){
                e.preventDefault();
                var id = $(this).attr('href');
                window.editID = id;
                $('#modalT').modal('show');
                setTimeout(function(){
                    //$('#supplier').empty();
                    var name = $()
                    //$('#prd-name').val('Test');
                    var name = $('#'+ id +'-empID').text();
                    var k1 = $('#'+ id +'-empName').text();
                    var k2 = $('#'+ id +'-NIC').text();
                    var k3 = $('#'+ id +'-date').text();
                    var k4 = $('#'+ id +'-shifttype').text();
                    var k5 = $('#'+ id +'-grosssal').text();
                    var k6 = $('#'+ id +'-epf').text();
                    var k7 = $('#'+ id +'-netsal').text();
                    var k8 = $('#'+ id +'-paid').text();

                    //$.getJSON('revenue/pay_list',function(data){
                        //var len = data.length;
                        
                        //for(a=0;a<len;a++){
                           // $('#supplier').append($('<option>', {value:data[a].name, text:data[a].name}));                
                        //}

                     //});


                    //console.log(name + price + quantity + supplier);
                    $('#empcode').val(name);
                    $('#empname').val(k1);
                    $('#nic').val(k2);
                    $('#date').val(k3);
                    $('#shtype').val(k4);
                    $('#gsal').val(k5);
                    $('#epf').val(k6);
                    $('#nsal').val(k7);
                    $('#paid').val(k8);
                },250);
                
            });

        //});


        $('#edit_sub').click(function(){
                
                var p_ID = window.editID;
                var pp1 = $('#empcode').val();
                var pp2= $('#empname').val();
                var pp3 = $('#nic').val();
                var pp4 = $('#date').val();
                var pp5 = $('#shtype').val();
                var pp6 = $('#gsal').val();
                var pp7 = $('#epf').val();
                var pp8 = $('#nsal').val();
                var pp9 = $('#paid').val();
                
                // if(prd_name == ""){
                //     swal("Oops !", "Please fill name field");
                //     return false;
                // }
                // if(isNaN(prd_price) || prd_price == ""){
                //     swal("Oops !", "Name should be a number !");
                //     return false;
                // }
                // if(isNaN(prd_qnty) || prd_qnty == ""){
                //     swal("Oops !", "Quantity should be a number !");
                //     return false;
                // }
                // if(prd_supplier == ""){
                //     swal("Oops !", "Please select a supplier");
                //     return false;
                // }

                $.post('revenue/editPayment',{ p1 : pp1 , p2 : pp2 , p3 : pp3 , p4 : pp4, p5 : pp5 , p6 : pp6 , p7 : pp7 , p8 : pp8 , p9 : pp9 , id : p_ID },function(data){
                    console.log(data);
                    $('#modalT').hide();
                    refresh();
                });
            });
            
            
            
            
            });


            });
















//
//
//    function EditTrans(prdIncomeID, prdType, , quantity, supplier, sellingqty, price, date1, lubricantincome) {
//
//        document.frmLIncome.prdIncomeID.value = prdIncomeID;
//        document.frmLIncome.prdType.value = prdType;
//        document.frmLIncome.quantity.value = quantity;
//        document.frmLIncome.supplier.value = supplier;
//        document.frmLIncome.sellingqty.value = sellingqty;
//        document.frmLIncome.price.value = price;
//        document.frmLIncome.date1.value = date1;
//        document.frmLIncome.lubricantincome.value = lubricantincome;
//        $('#modalT').modal('show');
//    }
//
//    $(document).ready(function () {
//        console.log('Editing Regular History');
//        $("#form-submitted").click(function (e) {
////assiging values    
//            e.preventDefault();
//            var prdIncomeID = $("#prdIncomeID").val(); 
//            var prdType = $("#prdType").val();
//            var quantity = $("#quantity").val();
//            var supplier = $("#supplier").val();
//            var sellingqty = $("#sellingqty").val();
//            var price = $("#price").val();
//            var date1 = $("#date1").val();
//            var lubricantincome = $("#lubricantincome").val();
//
////expression for validation
//            var numbers = /^[0-9]+$/;
//            var validDate = new Date();
//            
//
//
////date validation
//            var chkdate = document.getElementById('date').value;
//            var edate = chkdate.split("-");
//            var spdate = new Date();
//            var sdd = spdate.getDate();
//            var smm = spdate.getMonth();
//            var syyyy = spdate.getFullYear();
//            var today = new Date(syyyy, smm, sdd);
//            var e_date = new Date(edate[0], edate[1] - 1, edate[2]);
//
//
////validation
//            if (prdIncomeID == '' || prdType == '' || quantity == '' || supplier == '' || sellingqty == '' || price == '' || date1 == '' || lubricantincome == '') {
//
//                swal("Error!", "Insertion Failed Some Fields are Blank....!!", "error");
//            }
//
//            else if (quantity.match(numbers)) {
//                swal("Error!", "Quantity is invalid....!!", "error");
//            }
//            
//            else if (e_date > today) {
//                swal("Error!", "Selected date is a future date....!!", "error");
//            }
//            else {
//// Returns successful data submission message when the entered information is stored in database.
//                $.post("revenue/income/editlubinc", {prdIncomeID: prdIncomeID,prdType: prdType, quantity:quantity, supplier: supplier, sellingqty: sellingqty, price: price, date1: date1, lubricantincome: lubricantincome},
//                function (data) {
//                    swal("Good job!", "Successfully Updated the Lubricant Income", "success");
//                    // $('#form')[0].reset(); //To reset form fields
//                    $('#subloader2').empty();
//                    $('#subloader2').load('/IOC/revenue/income/lubricant_inc_history', function () {
//                        $('#subloader2').hide();
//                        $('#subloader2').fadeIn('fast');
//                    });
//
//                });
//                console.log('data sent');
//
//            }
//        });
//    });
//
//    function DeleteAlert(prdIncomeID) {
//        swal({
//            title: "Are you sure?",
//            text: "You will not be able to recover these details!",
//            type: "warning",
//            showCancelButton: true,
//            confirmButtonClass: "btn-danger",
//            confirmButtonText: "Yes, Please Delete!",
//            cancelButtonText: "No, Cancel!",
//            closeOnConfirm: false,
//            closeOnCancel: false
//        },
//        function (isConfirm) {
//            if (isConfirm) {
//                swal("Deleted!", "Your Lubricant Income details has been deleted.", "success");
//                
//                $.post('revenue/income/delete_lubinc', { prdIncomeID : prdIncomeID }, function(data){
//                                console.log(data);                                
//                            });
//                        $('#subloader2').empty();
//                        $('#subloader2').load('/IOC/revenue/income/lubricant_inc_history', function () {
//                        $('#subloader2').hide();
//                        $('#subloader2').fadeIn('fast');
//                    });
//            } else {
//                swal("Cancelled", "Your Income  details are safe :)", "error");
//            }
//        });
//    }
</script>