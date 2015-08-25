<table class="table table-striped table-hover ">
    <thead>
        <tr>
            
            <th>Produce Code</th>
            <th>Name</th>
            <th>Type</th>
            <th>Manufacturing Date</th>
                        <th>Edit</th>
                                    <th>Delete</th>
        </tr>
    </thead>
    
    <tbody>
    </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit entry</legend></h4>

            </div>
      
            <div class="modal-body">
            
<form class="form-horizontal"  id="edit_equipment_form" method="post" action="assets/updateas"> 
<fieldset>
        <legend>Add Equipments</legend>
 
            <div class="form-group">    
            <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="">                     
                </div>
                              
            </div>
            <div class="form-group">
            <label for="produce_code" class="col-lg-2 control-label">Produce code</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="produce-code" placeholder="Produce code" name="produce-code" required="">             
                </div></div>
                               <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Type</label> 
                 <div class="col-lg-4">
                     <select id="type" placeholder="type" class="form-control" name="type" required="">
                  <option></option>
                  <option value="Grease Pump">Grease Pump</option>
                  <option value="Hydraulic Hoists">Hydraulic Hoists</option>
                  <option value="Shampoo machine">Shampoo machine</option>
                  <option value="Oil Drainer">Oil Drainer</option>
                </select>
        </div>
              
            </div>
            
           
               <div class="form-group">
            <label for='manufacturing_date' class="col-lg-2 control-label">Manufacturing date </label>                       
                <div class="col-lg-4">
                    <input type="date" class="form-control" id="manufacturing-date" placeholder="Manufacturing date" name="manufacturing-date"  required="">            
                <input type="text" type="hidden" class="form-control" id="idd" name="idd"> 
                </div>
                              
            </div> 
     

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
      </fieldset>   
</form>
            </div>     
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('assets/loadEquipments',function(data){
         

            var len = data.length;
            for(x=0;x<len;x++){
                $("tbody").append('<tr class="' + x +'"id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-procode" + '">' + data[x].procode + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-name" + '">' + data[x].name + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-category" + '">' + data[x].category + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-mdate" + '">' + data[x].mdate + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-lolme" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function(e){
                var id = $(this).attr('href');
                 swal({   title: "Are you sure?",  
                    text: "You will not be able to recover this imaginary file!", 
                    type: "warning",   
                    showCancelButton: true, 
                    confirmButtonColor: "#DD6B55",  
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false },
                function(){   swal("Deleted!", "Your imaginary file has been deleted.", "success");
                $.post('assets/removeEquipments', { ID : id }, function(data){
                    console.log(data);
                   
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/assets/viewequipments',function(){
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('slow');
                    });
                }); });
                return false;
            });

            $('.edit').click(function(e){
                var id = $(this).attr('href');
      
                $('#myModal').modal('show');
                setTimeout(function(){
        var mycode=$('#' + id + '-lolme').text();         
                    $('#idd').val(data[mycode].id);
                    $('#produce-code').val(data[mycode].procode);
                    $('#name').val(data[mycode].name);
                    $('#manufacturing-date').val(data[mycode].mdate);
                    $('#type').val(data[mycode].category);
                },250);
                e.preventDefault();
            });

        });
            $('#edit_equipment_form').submit(function(e){
         e.preventDefault();
         
        var form = $('#edit_equipment_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').hide();
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/assets/viewequipments',function(){
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('slow');
                    });
            }
        });
                  
                    });
    });

</script>
