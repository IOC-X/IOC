
<div class="col-lg-7">
    <div class="span">
        <div class="row">
            <h3><strong>Create a Package</strong></h3>

        </div>

        <form id="form2" class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label class="control-label col-lg-4">Name</label>
                <div class="controls col-lg-6">
                    <input type="text" class="form-control floating-label" name="name" id="name" placeholder=" Package Name" value="<?php echo ($name); ?>">

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-4">Description</label>
                <div class="controls col-lg-6">
                    <textarea  name="description" id="description" class="form-control floating-label" placeholder="Package Description" rows="4" cols="50"><?php echo ($description); ?></textarea>
                    <span class="help-inline"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-4">Duration</label>
                <div class="controls col-lg-6">
                    <input type="number" class="form-control floating-label" name="time" id="time" placeholder="Time in Hours" value="<?php echo ($time); ?>">
                    <span class="help-inline"></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-4">Price</label>
                <div class="controls col-lg-6">
                    <input type="number" class="form-control floating-label" name="price" id="price" placeholder="Package Price" value="<?php echo ($price); ?>">
                    <span class="help-inline"></span>
                </div>
            </div>
            <br>
            <div class="form-actions col-lg-12 col-lg-offset-8">
<!--						<input type="hidden"  id="form-submitted" value="1">-->
                <button type="submit" class="btn btn-success btn-raised" id="form-submitted" name="form-submitted" >Create</button>

            </div>
        </form>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function () {
        console.log('package creation');
        $("#form-submitted").click(function (e) {
            e.preventDefault();
//assigning values
            var name = $("#name").val();
            var description = $("#description").val();
            var time = $("#time").val();
            var price = $("#price").val();

//expression for validation
            var numbers = /^[0-9]+$/;

//validation
            if (name == '' || description == '' || time == '' || price == '') {
                swal("Oops...", "Creating Failed Some Fields are Blank!!!", "error");
            }
            else if ((name.match(numbers))) {
                swal("Oops...", "Sorry.. Name should be letters!!!", "error");

            }

            else if ((description.match(numbers))) {
                swal("Oops...", "Sorry.. Description should be letters!!!", "error");
            }
            else if (!(time.match(numbers))) {
                swal("Oops...", "Sorry.. Given Duration is Invalid!!!", "error");
            }
            else if (!(price.match(numbers))) {
                swal("Oops...", "Sorry.. Invalid Price!!!", "error");
            }
            else if (time < 1) {
                swal("Oops...", "Duration should be atleast one hour....!!", "error");
            }
            else if (price < 1000) {
                swal("Oops...", "Check the price again....!! Minimum is Rs.1000/=", "error");
            }
            else { //check for package name whether already exists
                var name = $('#name').val();
                if ((name[0])) {
                    name = $('#name').val();
                    $.post('carwash/checkPackage', {name: name}, function (data) {
                        if (data.length < 1000) {
                            swal("Oops !", "Package name already exists! Please try another name for the package!");
                            return false;
                        }

                        else {
                            $.post("carwash/createPackage", {name: name, description: description, time: time, price: price},
                            function (data) {
                                swal("Good job!", "Successfully added the New Package!", "success");
                                $('#form2')[0].reset(); //To reset form fields

                                $('#subloader').empty();
                                $('#subloader').load('/IOC/carwash/packages', function () {
                                    $('#subloader').hide();
                                    $('#subloader').fadeIn('fast');
                                });
                            });
                        }
                    });
                }
                // Returns successful data submission message when the entered information is stored in database.
                console.log('data sent');
            }
        });
    });

    $('#name').focusout(function () {
        if (($(this).val()) == "") {
            swal("Oops !", "Please fill name field");
        }
        var name = $(this).val();
        if ((name[0])) {
            name = $(this).val();
            $.post('carwash/checkPackage', {name: name}, function (data) {
                if (data.length < 1000) {
                    swal("Oops !", "Package name already exists!");
                    return false;
                }
            });
        }

    });

</script>