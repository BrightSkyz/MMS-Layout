<?php echo file_get_contents('../include/header.php'); ?>
<h2>Console</h2>
<div class="row">
<div class="col-lg-2">
<div class="btn-group-vertical">
   <a href="1overview.php" class="btn btn-primary">Overview</a>
   <a href="1console.php" class="btn btn-primary">Console</a>
   <a href="1ftp.php" class="btn btn-primary">FTP</a>
   <a href="1mymql.php" class="btn btn-primary">MySQL</a>
   <br>
   <a href="" class="btn btn-warning">Suspend Server</a>
   <a href="" class="btn btn-danger">Delete Server</a>
</div>
</div>
<br>
<div class="col-lg-10">

<div class="btn-group btn-group-justified">
   <a href="" class="btn btn-primary">Start</a>
   <a href="" class="btn btn-primary">Stop</a>
   <a href="" class="btn btn-primary">Restart</a>
   <a href="" class="btn btn-primary">Kill</a>
</div>
<br>
<div class="btn-group btn-group-justified">
   <a href="#" class="btn btn-primary">Start</a>
   <a href="#" class="btn btn-primary">Stop</a>
   <a href="#" class="btn btn-primary">Restart</a>
   <a href="#" class="btn btn-primary">Kill</a>
</div>
<br>
<div class="form-group">
   <label class="col-lg-2 control-label">Status</label>
   <input disabled type="text" class="form-control" placeholder="Server Status" value="Online (9/25)">
</div>
<div class="panel panel-default">
   <div class="panel-body">
      <br><br><br><br><br><br><br><br><br>
   </div>
</div>
<div class="form-group">
   <div class="input-group">
      <span class="input-group-addon">/</span>
      <input type="text" class="form-control">
      <span class="input-group-btn">
         <button class="btn btn-default" type="button">Send</button>
      </span>
   </div>
</div></div></div>
<?php echo file_get_contents('../include/footer.php'); ?>
