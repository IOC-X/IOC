<div class="col-lg-12" id="lubricant_inc_history">
    <!-- DISPLAYING LATEST LUBRICANT INCOME-->
    <div>
        <h3 class="text-center success"><strong>Lubricant Income</strong></h3>

    </div>
    <table class="table table-striped table-bordered table-hover">

        <thead>
            <tr class="success">
                <th>Name</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Selling quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Income</th>

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
                <h4 class="modal-title text-justify">Edit Lubricant Income Details</h4>
            </div>
            <form role="form" action="" name="frmLIncome" method="post">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>ID</label>
                        <input name="id" id="id" class="form-control" required readonly="">
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <select class="btn form-control" id="prdType" name="prdType">
                            <?php foreach ($type as $prodtype) : ?>
                                <option value="<?php echo ($prodtype->prdType); ?>"><?php echo ($prodtype->prdType); ?></option>
                            <?php endforeach; ?>
                        </select>
<!--                            <input name="prdType" id="prdType" class="form-control" required readonly="">-->
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>

                        <input name="quantity" id="quantity" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Supplier</label>
                        <input name="supplier" id="supplier" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Selling Quantity</label>
                        <input name="sqty" id="sqty" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" id="price" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" id="date" class="form-control form_datetime" required>
                    </div> 

                    <div class="form-group">
                        <label>Lubricant Income</label>
                        <input name="lubincome" id="lubincome" class="form-control" required>
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
       
        $.getJSON('revenue/lub_list', function (data) {
           alert("dsa");
            var len = data.length;

            for (x = 0; x < len; x++) {
               
                $("tbody").append('<tr class="' + x + '" id="' + data[x].prdIncomeID + '">');
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-prdType" + '">' + data[x].prdType + '</td>');              
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-quantity" + '">' + data[x].quantity + '</td>'); 
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-supplier" + '">' + data[x].supplier + '</td>');                
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-sellingqty" + '">' + data[x].sellingqty + '</td>');
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-price" + '">' + data[x].price + '</td>');
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-date1" + '">' + data[x].date1 + '</td>');
                $("." + x + "").append('<td id="' + data[x].prdIncomeID + "-lubricantincome" + '">' + "Rs : " +data[x].lubricantincome  + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].prdIncomeID + "-pod" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].prdIncomeID + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].prdIncomeID + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function (e) {
                var id = $(this).attr('href');

                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Shift!",
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
                            url: 'revenue/delete_lubinc',
                            data: {idd: id},
                            success: function (data) {
                                swal("Deleted!", "Your imaginary file has been deleted!", "success");
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/revenue/lubricant_inc_history').hide().fadeIn('slow');
                               
                            }
                        });

                    }
                        
                        

                     else {
                        swal("Cancelled", "Your Payment data is safe :)", "error");
                    }
                });


                return false;
            });
            



            $('.edit').click(function (e) {
                var id = $(this).attr('href');
                window.editID = id;

                $('#modalT').modal('show');
                setTimeout(function () {
                    var n1 = $('#'+ id +'-prdType').text();
                    var n2 = $('#'+ id +'-quantity').text();
                    var n3 = $('#'+ id +'-supplier').text();
                    var n4 = $('#'+ id +'-sellingqty').text();
                    var n5 = $('#'+ id +'-price').text();
                    var n6 = $('#'+ id +'-date1').text();
                    var n7 = $('#'+ id +'-lubricantincome').text();


                     $('#prdType').val(n1);
                    $('#quantity').val(n2);
                    $('#supplier').val(n3);
                    $('#sqty').val(n4);
                    $('#price').val(n5);
                    $('#date').val(n6);
                    $('#lubincome').val(n7);



                }, 250);
                e.preventDefault();
            });
            
            });


            $('#form-submitted').click(function(){
                
                var m1 = window.editID;
                var m2 = $('#prdType').val();
                var m3 = $('#quantity').val();
                var m4 = $('#supplier').val();
                var m5 = $('#sqty').val();
                var m6 = $('#price').val();
                var m7 = $('#date').val();
                var m8 = $('#lubincome').val();
               
              /*  if(prd_name == ""){
                    swal("Oops !", "Please fill name field");
                    return false;
                }
                if(isNaN(prd_price) || prd_price == ""){
                    swal("Oops !", "Name should be a number !");
                    return false;
                }
                if(isNaN(prd_qnty) || prd_qnty == ""){
                    swal("Oops !", "Quantity should be a number !");
                    return false;
                }
                if(prd_supplier == ""){
                    swal("Oops !", "Please select a supplier");
                    return false;
                }*/

                $.post('revenue/editLubinc',{ prdType : m2 , quantity : m3 , supplier : m4 , sqty : m5 , price : m6 , date : m7 , lubincome : m8 },function(data){
                    console.log(data);
                    $('#modalT').hide();
                    refresh();
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