<?php echo file_get_contents('include/header.php'); ?>
<h2>Add Node</h2>
<p>
Here is how to add a node:<br>
&bull; Get computer with the port 7473 forwarded<br>
&bull; Launch this software: Link<br>
&bull; Leave software open and cofigure the file below.
</p>
<div class="form-group">
   <label class="control-label">Name the node</label>
   <input type="text" class="form-control" placeholder="Node Name (Ex, FRANCE/Node1)">
</div>
<div class="form-group">
   <label class="control-label">Type the name of the user that will have the node.</label>
   <input type="text" class="form-control" placeholder="Username">
</div>
<div class="form-group">
   <label class="control-label">Public IP of the node</label>
   <input type="text" class="form-control" placeholder="12.34.567.89">
</div>
<div class="form-group">
   <label class="control-label">Type the code displayed when application is launched.</label>
   <input type="text" class="form-control" placeholder="ys73j93">
</div>
<div class="form-group">
   <label class="control-label">Type the availible ports separated by commas. (No spaces!)</label>
   <input type="text" class="form-control" placeholder="25565,25626,26738">
</div>
<div class="btn-group" role="group">
   <a href="/pages/nodes.php"><button type="button" class="btn btn-primary">Create</button></a>
</div>
<?php echo file_get_contents('include/footer.php'); ?>
