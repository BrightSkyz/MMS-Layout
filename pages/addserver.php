<?php echo file_get_contents('include/header.php'); ?>
<h2>Create Server</h2>
<div class="form-group">
   <label class="col-lg-2 control-label">Name the server</label>
   <input type="text" class="form-control" placeholder="Server Name">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Type the name of the user that will have the server</label>
   <input type="text" class="form-control" placeholder="Username">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Type the max server RAM (in MB)</label>
   <input type="text" class="form-control" placeholder="RAM in MB">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Select Avalible Node</label>
   <select class="form-control" id="select">
      <option>Local</option>
      <option disabled>USA/Node1</option>
      <option disabled>USA/Node2</option>
      <option disabled>USA/Node3</option>
      <option>USA/Node4</option>
      <option disabled>FRANCE/Node1</option>
      <option selected>FRANCE/Node2</option>
      <option>FRANCE/Dedicated1</option>
   </select>
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Select Avalible Port for FRANCE/Node2</label>
   <select class="form-control" id="select">
      <option>25362</option>
      <option>24574</option>
      <option>27748</option>
      <option>28930</option>
      <option>28273</option>
      <option>28327</option>
      <option>24565</option>
      <option>28474</option>
      <option>21918</option>
   </select>
</div>
<br>
<div class="btn-group" role="group">
   <a href="/pages/servers.php"><button type="button" class="btn btn-primary">Create</button></a>
</div>
<?php echo file_get_contents('include/footer.php'); ?>
