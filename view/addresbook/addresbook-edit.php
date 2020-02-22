<h1 class="page-header">
  <?php echo $addresbook->id != null ? $addresbook->name : 'New Address'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=addresbook">addresbook</a></li>
  <li class="active"><?php echo $addresbook->id != null ? $addresbook->name : 'New Address'; ?></li>
</ol>

<form id="frm-addresbook" action="?c=addresbook&a=create" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $addresbook->id; ?>" />
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $addresbook->name; ?>" class="form-control" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $addresbook->email; ?>" class="form-control" placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" value="<?php echo $addresbook->address; ?>" class="form-control" placeholder="Enter Address" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" value="<?php echo $addresbook->phone; ?>" class="form-control" placeholder="Enter Phone" required>
  </div>      
  <hr /> 
  <div class="text-right">
    <button class="btn btn-primary">Save</button>
  </div>
</form>

<script>
  $(document).ready(function(){
    $("#frm-addresbook").submit(function(){
    return $(this).validate();
    });
  })
</script>