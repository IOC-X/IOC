
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript">
    // autocomplet : this function will be executed every time we change the text
function autocomplet() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#id').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: 'carwash/customerSearchDetails/',
            type: 'POST',
            data: {keyword:keyword},
            success:function(data){
                $('#list_id').show();
                $('#list_id').html(data);
            }
        });
    } else {
        $('list_id').hide();
    }
}

// set_item : this function will be executed when we select an item
function set_item(item) {
    // change input value
    $('#id').val(item);
    // hide proposition list
    $('#list_id').hide();
}
</script>



    <div class="col-lg-7">
       
        <h1 class="main_title"></h1>
        
            <form>
                <div class="label_div">Search Customer : </div>
                <div class="input_container">
                    <input type="text" id="id" onkeyup="autocomplet()">
                    <ul id="list_id"></ul>
                </div>
            </form>
          

    </div>


