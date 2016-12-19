<?php echo file_get_contents('../include/header.php'); ?>
<h2>Edit Server</h2>
<div class="btn-group btn-group-justified">
   <a href="2overview.php" class="btn btn-primary">Overview</a>
   <a href="2console.php" class="btn btn-primary">Console</a>
   <a href="2ftp.php" class="btn btn-primary">FTP</a>
   <a href="2mymql.php" class="btn btn-primary">MySQL</a>
   <a href="" class="btn btn-warning">Suspend Server</a>
   <a href="" class="btn btn-danger">Delete Server</a>
</div>
<br>
<div class="btn-group btn-group-justified">
   <a href="" class="btn btn-primary">Start</a>
   <a href="" class="btn btn-primary">Stop</a>
   <a href="" class="btn btn-primary">Restart</a>
   <a href="" class="btn btn-primary">Kill</a>
</div>
<br>
<div class="form-group">
   <label class="control-label">Status</label>
   <input disabled type="text" class="form-control" placeholder="Server Status" value="Online (9/25)">
</div>
<div class="form-group">
   <label class="control-label">Server Name</label>
   <input type="text" class="form-control" placeholder="My Minecraft Server" value="The Vanilla Server">
</div>
<label class="control-label">Players <small>&bull; The unlimited will make it always have 5 more slots than current player ammount.</small></label>
<div class="row">
   <div class="col-lg-6">
      <div class="input-group">
         <span class="input-group-addon">
            <input name="players" type="radio">
         </span>
         <input disabled type="text" class="form-control" value="Unlimited">
         <span class="input-group-addon">
            <input selected name="players" type="radio">
         </span>
         <input type="text" class="form-control" value="25">
      </div>
   </div>
</div>
<br>
<div class="form-group">
   <label class="control-label">Select Avalible Node <small>&bull; You can only move servers to nodes that are online and you have permission to the node and action.</small></label>
   <select class="form-control" id="select">
      <option>Local</option>
      <option disabled>USA/Node1</option>
      <option disabled>USA/Node2</option>
      <option disabled>USA/Node3</option>
      <option selected>USA/Node4</option>
      <option disabled>FRANCE/Node1</option>
      <option>FRANCE/Node2</option>
      <option>FRANCE/Dedicated1</option>
   </select>
</div>
<div class="form-group">
   <label class="control-label">IP <small>&bull; Moving a server to a different node changes the IP.</small></label>
   <input disabled type="text" class="form-control" placeholder="12.34.567.89" value="57.33.124.37">
</div>
<div class="form-group">
   <label class="control-label">Select Avalible Port for Local <small>&bull; The port 25565 will only be allowed if you have permission for that server.</small></label>
   <select class="form-control" id="select">
      <option>25565</option>
      <option selected>25693</option>
   </select>
</div>
<div class="form-group">
   <label class="control-label">Select one of your templates.</label>
   <select class="form-control" id="select">
      <option selected>None</option>
      <option>CastleBuild</option>
      <option>TNTWars</option>
   </select>
</div>
<div class="form-group">
   <label class="control-label">User <small>&bull; Give the user full access to this server.</small></label>
   <input type="text" class="form-control" placeholder="Username" value="admin">
</div>
<div class="btn-group" role="group">
   <a href="/pages/servers.php"><button type="button" class="btn btn-primary">Submit Changes</button></a>
</div>
<?php echo file_get_contents('../include/footer.php'); ?>
