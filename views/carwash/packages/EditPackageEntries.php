<div>

    <h1 class="text-center text-success">Carwash Packages</h1>
    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                
                <th>Name</th>
                <th>Description</th>
                <th>Time</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packages as $package) : ?>						
                <tr>
                    
                    <td><?php echo ($package->name); ?></td>
                    <td><?php echo ($package->description); ?></td>
                    <td><?php echo ($package->time) . " Hours"; ?></td>
                    <td><?php echo "Rs." . ($package->price); ?></td>
                    <td>
                        <a onclick="Editpackage('<?php echo ($package->id); ?>', '<?php echo ($package->name); ?>', '<?php echo ($package->description); ?>', '<?php echo ($package->time); ?>', '<?php echo ($package->price); ?>')"> <i class="mdi-content-create"></i> </a>                                                                      
                    </td>
                    <td>
                        <a id="delete_package" onclick="DeleteAlert('<?php echo ($package->id); ?>')" > <i class="mdi-content-remove-circle"></i></a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    <div class="ui modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-justify">Edit Package Details</h4>
                </div>
                <form role="form" action="carwash/editPackage" name="frmPackages" method="post">
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

                        <button type="submit" class="btn btn-info btn-lg">
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
                                $('#subloader').load('/IOC/carwash/' + id, function () {

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
                                        window.location = 'carwash/delete_package/'+id+'';

                                    } else {
                                        swal("Cancelled", "Your Package details is safe :)", "error");
                                    }
                                });
                            }

</script>

