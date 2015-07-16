<form class="form-horizontal" id="searchForm">
    <fieldset>
        <legend>Search</legend>
        <div class="form-group">
            <div class="col-lg-6">
                <input type="text" class="form-control" id="search_lb" placeholder="filter">
            </div>
        </div>
        <input type="submit" value="Submit">
    </fieldset>
</form>

<div class="search-results">
    <div class="list-group">
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
    </div>
</div>
<div id="test"></div>

<script type="text/javascript">

    // function instantSearch(){
    //     xmlhttp = new XMLHttpRequest();
    //     xmlhttp.open("GET","stocks/searchLube?nm="+ $('#search_lb').val(),false);
    //     xmlhttp.send(null);
    //     document.getElementById("test").innerHTML = xmlhttp.responseText;
    // }

    $('#searchForm').submit(function(e){
        e.preventDefault();
        console.log('succ');
        $.ajax({
          type : 'post',
          url : 'stocks/searchLube',
          data : { name : $('#search_lb').val() },
          success: function(data){
            console.log(data);
            if(data){
                $('.row-content').append(data);
            }
          }
        });
    });

</script>
