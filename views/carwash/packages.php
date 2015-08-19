<?php  
if (!$packages){ ?>
     <h3 class="text-center success"><strong>No Packages added yet. Please add a package.</strong></h3>
<?php

}
 else {
    

?>
<div class="btn-group btn-group-justified">
    <a href="carwash/create_package/" class="btn btn-primary" id="create_package"><i class="glyphicon glyphicon-gift"></i>  Add Package</a>
    <a href="carwash/EditPackageEntries/" class="btn btn-primary" id="EditPackageEntries"><i class="glyphicon glyphicon-wrench"></i>  Edit Entries</a>
</div>
<div id="subloader2">
    <h1 class="text-center text-success">Carwash Packages</h1>
   
            <?php foreach ($packages as $package) : ?>						
    <div class="col-lg-4 panel panel-primary text-center ">
                    
        <div class="panel-heading panel">
            <button type="button" class=" btn btn-primary  btn-group btn-group-justified " data-toggle="collapse" data-parent="#subloader2" href="#<?php echo ($package->id); ?>"><i class="mdi-navigation-arrow-drop-down"></i> <h5><?php echo ($package->name); ?></button>
        </div>
        
        
        <div id="<?php echo ($package->id); ?>" class="panel panel-body panel-collapse collapse">  
            <div class="col-lg-12 "><?php echo ($package->description); ?></div>
            <div class="col-lg-12 "><h4><?php echo ($package->time) . " Hours estimated"; ?></h4></div>
            <div class="col-lg-12 panel"><h1><?php echo "Price Rs." . ($package->price); ?></div> 
        </div>
    </div>  
       
            <?php endforeach; ?>
       

</div>
<?php } ?>
<script type="text/javascript">

    $('#EditPackageEntries').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/' + id, function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });
              
    $('#create_package').click(function (e2) {
        e2.preventDefault();
        var id = $(this).attr('id');
        $('#subloader2').load('/IOC/carwash/' + id, function () {

            $('#subloader2').hide();
            $('#subloader2').fadeIn('fast');
        });
    });

    
</script>