<form class="form-horizontal">
    <fieldset>
        <legend>Search lubricants</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Product</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table>


<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('stocks/loadLubricantsSuppliers',function(data){
            console.log(data[0]);

            var len = data.length;
            for(x=0;x<len;x++){
                $("tbody").append('<tr class="' + x +'">');
                $("." + x + "").append('<td>' + data[x].name + '</td>');
                $("." + x + "").append('<td>' + data[x].product + '</td>');
                $("." + x + "").append('<td>' + data[x].contact + '</td>');
                $("." + x + "").append('<td>' + data[x].email + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
            
            $('.remove').click(function(e){
                var id = $(this).attr('href');
                e.preventDefault();
                swal({   title: "Are you sure?",   
                    text: "You will not be able to recover this entry",   
                    type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   cancelButtonText: "No, cancel !",   
                    closeOnConfirm: false,   closeOnCancel: false }, 
                    function(isConfirm){   
                        if (isConfirm) {     
                            swal("Deleted!", "Entry deleted !.", "success");   
                            
                            $.post('stocks/removeLubricantSupplier', { ID : id }, function(data){
                                console.log(data);
                                $('#subloader2').empty();
                                $('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                                    $('#subloader2').hide();
                                    $('#subloader2').fadeIn('slow');
                                });
                            });
                        } 
                            else {    
                             swal("Cancelled", "", "error");   
                            } 
                    });

                // e.preventDefault();
                // var id = $(this).attr('href');
                // $.post('stocks/removeLubricantSupplier', { ID : id }, function(data){
                //     console.log(data);
                //     alert('Done !');
                //     $('#subloader2').empty();
                //     $('#subloader2').load('/IOC/stocks/edit_suppliers',function(){
                //         $('#subloader2').hide();
                //         $('#subloader2').fadeIn('slow');
                //     });
                // });

            });

            $('.edit').click(function(e){
                var id = $(this).attr('href');
                alert(id);
                return false;
            })
        });

    });
    $("#searchInput").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();

        //Recusively filter the jquery object to get results.
        jo.filter(function () {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
    });
</script>