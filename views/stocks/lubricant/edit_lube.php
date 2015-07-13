<form class="form-horizontal">
    <fieldset>
        <legend>Search lubricants</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="search_lb" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('stocks/loadLubricants',function(data){
            console.log(data[0].Id);

            var len = data.length;
            for(x=0;x<len;x++){
                $("tbody").append('<tr class="' + x +'">');
                $("." + x + "").append('<td>' + data[x].Name + '</td>');
                $("." + x + "").append('<td>' + data[x].Price + '</td>');
                $("." + x + "").append('<td>' + data[x].Quantity + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                $("." + x + "").append('</tr>');
            }

            $('.remove').click(function(e){
                var id = $(this).attr('href');
                $.post('stocks/removeLubricant', { ID : id }, function(data){
                    console.log(data);
                    alert('Done !');
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/stocks/edit_lube',function(){
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('slow');
                    });
                });
                return false;
            });
        });
    });
</script>