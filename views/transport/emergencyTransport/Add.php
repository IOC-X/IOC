<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Add Entry</legend></h4>

            </div>
            
            <div class="modal-body">
    <form class="form-horizontal" id="edit_lube_form" action="stocks/addLube" method="post">
    <fieldset>
    
        <div class="form-group">
        <label for="fullname" class="col-lg-2 control-label">Full name</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="fullname" name="fullname">
        </div>
        </div>
        <div class="form-group">
        <label for="nic" class="col-lg-2 control-label">NIC</label>
        <div class="col-lg-7">
            <input type="text" class="form-control" id="nic" name="nic">
        </div>
        </div>
        <div class="form-group">
        <label for="contact" class="col-lg-2 control-label">Contact</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="contact" name="contact">
        </div>
        </div>
        <div class="form-group">
        <label for="description" class="col-lg-2 control-label">Description</label>
        <div class="col-lg-7">
            <textarea class="form-control" id="description"  name="description" rows="4" cols="50"></textarea>
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-7">
            <input type="email" class="form-control" id="email" name="email">
        </div>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="edit_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </fieldset>
        </form>
    </div>
</div>
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" data-mfb-label="A long long label" class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting ion-plus-round"></i>
          <i class="mfb-component__main-icon--active ion-edit"></i>
        </a>
        <ul class="mfb-component__list">

       <li>
            <a href="#" data-mfb-label="Add" class="mfb-component__button--child" id="addEntry">
              <i class="mfb-component__child-icon ion-calendar"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>


<script type="text/javascript">
    $("#addEntry").click(function(){
        $('#myModal').modal('show');
    });


</script>