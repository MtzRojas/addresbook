<h1 class="page-header">Addresbook </h1>
<a class="btn btn-primary pull-right" href="?c=addresbook&a=edit">Add</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
  <thead>
    <tr>
      <th style="width:180px; background-color: #5DACCD; color:#fff">Name</th>
      <th style=" background-color: #5DACCD; color:#fff">Email</th>
      <th style=" background-color: #5DACCD; color:#fff">Address</th>
      <th style="width:120px; background-color: #5DACCD; color:#fff">Phone</th>            
      <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
      <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($this->model->index_data()['rows'] as $r): ?>
    <tr>
      <td><?php echo $r['name']; ?></td>
      <td><?php echo $r['address']; ?></td>
      <td><?php echo $r['phone']; ?></td>
      <td><?php echo $r['email']; ?></td>
      <td>
        <a  class="btn btn-warning" href="?c=addresbook&a=edit&id=<?php print($r['id']); ?>">Edit</a>
      </td>
      <td>
        <a  id = "<?php print($r['id']); ?>" class="btn btn-danger delete-class" ?>Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table> 

</body>
<script src="assets/js/datatable.js"></script>
<script src="assets/js/removerow.js"></script>
</html>
