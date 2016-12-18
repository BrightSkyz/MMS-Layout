<?php echo file_get_contents('../include/header.php'); ?>
<nav class="navbar navbar-default navbar-top">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/pages/servers.php">Edit Server</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li><a href="/pages/server/1.php">Overview</a></li>
            <li><a href="/pages/server/console.php">Console</a></li>
            <li><a href="/pages/server/ftp.php">FTP</a></li>
            <li><a href="/pages/server/mysql.php">MySQL</a></li>
         </ul>
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>
<h2>Console</h2>
<div class="btn-group btn-group-justified">
   <a href="#" class="btn btn-primary">Start</a>
   <a href="#" class="btn btn-primary">Stop</a>
   <a href="#" class="btn btn-primary">Restart</a>
   <a href="#" class="btn btn-primary">Kill</a>
</div>
<br>
<div class="form-group">
   <label class="col-lg-2 control-label">Status</label>
   <input disabled type="text" class="form-control" placeholder="Server Status" value="Offline">
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
</div>
<?php echo file_get_contents('../include/footer.php'); ?>
