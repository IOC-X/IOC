<style>


    a:hover {color:red;}  /* mouse over link */

</style>
<div class="subloader2">

    <h1 class="text-center text-success">Carwash Packages</h1>
    <?php foreach ($packages as $package) : ?>						
        <div class="col-lg-4 panel panel-primary text-center">

            <div class="panel-heading panel"> 
                <button class="btn-primary btn-group btn-group-justified" data-toggle="collapse" data-parent="#subloader2" href="#<?php echo ($package->id); ?>"><i class="mdi-navigation-arrow-drop-down"></i> <?php echo ($package->name); ?></button>
            </div>

            <div class="panel panel-body panel-collapse collapse" id="<?php echo ($package->id); ?>">  
                <div class="col-lg-12 panel"><?php echo ($package->description); ?></div>
                <div class="col-lg-12 panel"><?php echo ($package->time) . " Hours estimated"; ?></div>
                <div class="col-lg-12 panel"><?php echo "Price Rs." . ($package->price); ?></div> 
            </div>
            <div class="panel-footer clearfix danger">
                <div class="pull-right">
                    <a onclick="Editpackage('<?php echo ($package->id); ?>', '<?php echo ($package->name); ?>', '<?php echo ($package->description); ?>', '<?php echo ($package->time); ?>', '<?php echo ($package->price); ?>')"> <i class="mdi-content-create"></i> </a>
                    <a id="delete_package" onclick="DeleteAlert('<?php echo ($package->id); ?>')" > <i class="mdi-content-remove-circle"></i></a>
                </div>
            </div>
        </div>

    </div>         
<?php endforeach; ?>

</div>               

<!--PACKAGE EDIT MODAL-->

<div class="ui modal" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-justify">Edit Package Details</h4>
            </div>
            <form role="form" action="" name="frmPackages" method="post">
                <div class="col-lg-12">

                    <div class="form-group">
                        <label>ID</label>
                        <input name="id" id="id" class="form-control" required readonly="">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea  name="description" id="description" class="form-control floating-label" placeholder="Description" rows="4" cols="50" required> </textarea>
      <!--                  <input name="description" class="form-control" required>-->
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="number" name="time" id="time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
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

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.css">
<script type="text/javascript">

                $('#create_package').click(function (e2) {
                    e2.preventDefault();
                    var id = $(this).attr('id');
                    $('#subloader2').load('/IOC/carwash/' + id, function () {

                        $('#subloader').hide();
                        $('#subloader').fadeIn('fast');
                    });
                });


                function Editpackage(id, name, description, time, price) {


                    document.frmPackages.id.value = id;
                    document.frmPackages.name.value = name;
                    document.frmPackages.description.value = description;
                    document.frmPackages.time.value = time;
                    document.frmPackages.price.value = price;
                    $('#modal').modal('show');

                }

                $(document).ready(function () {
                    console.log('Editing Packages');
                    $("#form-submitted").click(function (e) {
//assiging values    
                        e.preventDefault();
                        var id = $("#id").val();
                        var name = $("#name").val();
                        var description = $("#description").val();
                        var time = $("#time").val();
                        var price = $("#price").val();

//expression for validation
                        var numbers = /^[0-9]+$/;

//validation
                        if (id == '' || name == '' || description == '' || time == '' || price == '') {

                            sweetAlert("Oops...", "Insertion Failed Some Fields are Blank....!!", "error");
                        }


                        else {
// Returns successful data submission message when the entered information is stored in database.
                            $.post("carwash/editPackage", {id: id, name: name, description: description, time: time, price: price},
                            function (data) {
                                swal("Good job!", "Successfully Updated the package!", "success");
                                // $('#form')[0].reset(); //To reset form fields

                            });
                            console.log('data sent');

                        }
                    });
                });

                function DeleteAlert(id) {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Package Details!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, Delete it!",
                        cancelButtonText: "No, Cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your Package details has been deleted.", "success");
                            window.location = 'carwash/delete_package/' + id + '';

                        } else {
                            swal("Cancelled", "Your Package details is safe :)", "error");
                        }
                    });
                }

</script>

