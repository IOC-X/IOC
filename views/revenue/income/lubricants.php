
<div>

    <!--start of filling application -->
    <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="revenue/insertlubricantinc" enctype="multipart/form-data" id="lubricantincome" >
            <fieldset>
                <legend>Add Lubricants Income</legend> <!--font style-->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="lubname" placeholder="filter">
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="price">Price</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="price" id="price" placeholder="" 
                               title="Use only numbers for Price"/>
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="quantity">Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="qty" id="qty" placeholder="" 
                               title="Use only numbers for Quantity" />
                    </div>

                </div>

                <!--address -->

                <div class="form-group">
                    <label for="supplier" class="col-lg-2 control-label">Supplier</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="supplier" placeholder=""  >
                    </div>
                </div> 


                <!--phone number +nic -->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="sqty">Selling Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="sqty" id="sqty" placeholder="" >
                    </div>

                </div>



                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="income">Total Income</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="income" id="income" placeholder="" >
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="time">Date</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="time" id="time" readonly="readonly" value="<?php echo date("Y-m-d"); ?>">
                    </div>

                </div>



                <!-- end -->

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>

                </div>





            </fieldset>
        </form>

    </div> 
    
    
    
    
    <div class="form-actions col-lg-12">
        <div class="col-lg-0 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="lubricant_inc_history"><i class="mdi-social-poll"></i> History</a></div>

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
    $('#lubricantincome').submit(function (e) {
alert("fdfsdf");
        e.preventDefault();
        var form = $('#lubricantincome');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader2').empty();
                $('#subloader2').load('/IOC/revenue/lubricants').hide().fadeIn('slow');
            }
        });
    });

    


  $('#lubricant_inc_history').click(function (e2) {
         e2.preventDefault();
         var id = $(this).attr('id');
         $('#subloader2').load('/IOC/revenue/' + id, function () {

             $('#subloader2').hide();
             $('#subloader2').fadeIn('fast');
         });
     });

</script>

