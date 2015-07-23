<form class="form-horizontal" id="searchForm">
    <fieldset>
        <legend>Search</legend>
        <div class="form-group">
            <div class="col-lg-6">
                <input type="text" class="form-control" id="search_lb" placeholder="filter by name" name="src">
            </div>
        </div>
    </fieldset>
</form>

<div class="search-results">
    <ul id="results">
        
    </ul>
<!--    <div class="list-group">
    <div class="list-group-item">
        <div class="row-action-primary">
            <i class="mdi-file-folder"></i>
        </div>
        <div class="row-content">
            <div class="action-secondary"><i class="mdi-material-info"></i></div>
            <h4 class="list-group-item-heading">Lube name</h4>
            <p class="list-group-item-text">Rs 720</p>
            <p class="list-group-item-text">Quantity</p>
        </div>
    </div> -->
</div>
<div id="test"></div>

<script type="text/javascript">

    // function instantSearch(){
    //     xmlhttp = new XMLHttpRequest();
    //     xmlhttp.open("GET","stocks/searchLube?nm="+ $('#search_lb').val(),false);
    //     xmlhttp.send(null);
    //     document.getElementById("test").innerHTML = xmlhttp.responseText;
    // }
    $('#search_lb').keyup(function(){
        var keyval = $(this).val();
        //alert(keyval);
        console.log('emptying !!!!!!!!!!11')
        $('#results').empty();
        $.post('stocks/searchLube',{ key : keyval },function(data){
            console.log(data);
            if(data){
                var x = JSON.parse(data);
                var len = x.length;
                var lubricantName;
                var lubricantPrice;
                for(m=0;m<len;m++){
                    console.log(x[m].Name);
                    lubricantName = x[m].Name;
                    lubricantPrice = x[m].Price;
                    $('#results').append(lubricantName + "    " + lubricantPrice + "\n");
                }


            }
            else if(data == null){
                $('#results').empty();
            }
            return false;
        });
    });

    // $('#searchForm').submit(function(e){
    //     e.preventDefault();
    //     console.log('success');
    //     $.ajax({
    //       type : 'post',
    //       url : 'stocks/searchLube',
    //       data : { name : $('#search_lb').val() },
    //       success: function(data){
    //         console.log(data);
    //         if(data){
    //             alert(data);
    //         }
    //       }
    //     });
    // });

</script>
