<form class="form-horizontal" method="post" action="assets/data_backup" id="data_base_backup_form">
    <fieldset>
        <legend>Database Backup</legend>
         <div class="form-group">    
           
                <div class="col-lg-6 checkbox">
                    <label > <input type="checkbox" id="yes" name="confirm" value="yes">.  I want to database Backup </label>                    
                </div>
                              
            </div>
            
         <div class="col-lg-8 col-lg-offset-2">
             <button type="submit" id="databackup" class="btn btn-primary">Backup</button>
            </div>
    </fieldset>
   
</form>
 
<script type="text/javascript">
   $('#data_base_backup_form').submit(function(event)
   {    
       var confirm = document.getElementById("yes").checked;
      
       if(confirm == "false")
       {   
             swal("Oops !", "NIC number field as XXXXXXXXXV"); 
            event.preventDefault();
           
         
               
           
                
       }
       else{
            
            var form = $('#data_base_backup_form');
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data: form.serialize(),
                success: function (data) {
                console.log(data);
                
                swal("Supplier added successfully!", "click okay to continue", "success");

                $('#subloader2').empty();
                $('#subloader2').load('/IOC/assets/database_backup').hide().fadeIn('slow');
            }
               
                   
                
               
              }
              
            );
            }
      
       
    });
        
 </script>