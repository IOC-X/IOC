
<div>

    <!--start of filling application -->
    <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="revenue/insertlubricantinc" enctype="multipart/form-data" id="lubricantincome" >
            <fieldset>
                <legend>Search Lubricants</legend> <!--font style-->

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
                        <input type="text" class="form-control" name="price" placeholder="" 
                               title="Use only numbers for Price"/>
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="quantity">Quantity</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="qty" placeholder="" 
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
                        <input type="text" class="form-control" name="sqty" placeholder="" >
                    </div>

                </div>



                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="income">Total Income</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="income" placeholder="" >
                    </div>

                    <div class="col-lg-2 control-label">
                        <label for="time">Select Time(Date)</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="time" placeholder="" >
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
    
    <!-- end of filling application-->

    <table class="table table-striped table-hover ">
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
</table>

</div>
</div>

<script>
    $('#lubricantincome').submit(function (e) {

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
</script>

