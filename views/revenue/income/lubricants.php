
<div>

    <!--start of filling application -->
    <div class="col-md-12">
        <form class="form-horizontal" method="post" action="revenue/insertlubricantinc" id="lubricantincomeForm" >
            <fieldset>
                <legend>Add Lubricants Income</legend> <!--font style-->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="name">Product</label>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control" id="products" name="prd-name">
                            <option></option>
                        </select>
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="price">Price</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="price" id="price" placeholder="" 
                               title="Use only numbers for Price" disabled="" />
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="quantity">Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="qty" id="qnty" placeholder="" 
                               title="Use only numbers for Quantity" disabled="" />
                    </div>

                </div>

                <!--address -->

                <div class="form-group">
                    <label for="supplier" class="col-lg-2 control-label">Supplier</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="supplier" placeholder="" id="supplier" disabled="">
                    </div>
                </div> 


                <!--phone number +nic -->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="sqty">Selling Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <select class="form-control" id="sqnty" name="sqty">
                            <option></option>
                        </select>
                    </div>

                </div>



                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="income">Total price</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="total" id="total" placeholder="" disabled="">
                    </div>

                </div>



                <!-- end -->

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" id="inert">Submit</button>
                    </div>

                </div>





            </fieldset>
        </form>

    </div> 
    
    
    
    
    <div class="form-actions col-lg-12">
        <div class="col-lg-50 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="lubricant_inc_history"><i class="mdi-social-poll"></i> History</a></div>

    </div>   
    <!-- end of filling application-->

   <!--  <table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Selling quantity</th>
            <th>Total price</th>
            <th>TIme(Date)</th>>
            <th></th>
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table> -->

</div>


<script>

    $(document).ready(function(){
        //console.log('DD');
        $.getJSON('revenue/loadLubricantProducts',function(data){
            console.log(data[0]);
            console.log('DD');
            var len = data.length;
            for(a=0;a<len;a++){
 //               console.log(data[a].Name);
                $("#products").append("<option value='"+ data[a].Id +"'>" + data[a].Name + "</option>");
                $("#price").append(data[a].price);
            }
        });

        $("#products").change(function(){
            var id = $(this).val();
            console.log(id);
            $("#sqnty").empty();
            $.getJSON('revenue/loadLubricantDataSpec',{ ID : id },function(data){
                // console.log(data[0]);
                price = data[0].Price;
                qnty = data[0].Quantity;
                supplier = data[0].Supplier;
                // console.log(price);
                $("#price").val(price);
                $("#qnty").val(qnty);
                $("#supplier").val(supplier);
                $("#sqnty").empty();
                for(b=1;b<=qnty;b++){
                    $("#sqnty").append("<option value='"+ b +"'>" + b + "</option>");                    
                }
                $("#sqnty").change(function(){
                    console.log('sd');
                    sid = $("#sqnty").val();
                    //console.log("SQNQYY" + sid);
                    total = sid*$("#price").val();
                    console.log(total);
                    $("#total").val(total);
                });

            });
        });

        $('#inert').click(function(e){
            e.preventDefault();
            var name = $("#products option:selected").text();
            var price = $("#price").val();
            var qnty = $("#qnty").val();
            var supplier = $("#supplier").val();
            var sqnty = $("#sqnty option:selected").text();
            var total = $("#total").val();

            $.post('revenue/insertlubricantinc',{ name : name , price : price , quantity : qnty , supplier : supplier , sqnty : sqnty , total : total },function(data){
                console.log(data);
            });
        });
    });
  //   $('#lubricantincome').submit(function (e) {
  //       alert("fdfsdf");
  //       e.preventDefault();
  //       var form = $('#lubricantincome');
  //       $.ajax({
  //           type: form.attr('method'),
  //           url: form.attr('action'),
  //           data: form.serialize(),
  //           success: function (data) {
  //               console.log(data);
  //               $('#subloader2').empty();
  //               $('#subloader2').load('/IOC/revenue/lubricants').hide().fadeIn('slow');
  //           }
  //       });
  //   });

    


  // $('#lubricant_inc_history').click(function (e2) {
  //        e2.preventDefault();
  //        var id = $(this).attr('id');
  //        $('#subloader2').load('/IOC/revenue/' + id, function () {

  //            $('#subloader2').hide();
  //            $('#subloader2').fadeIn('fast');
  //        });
  //    });

</script>