<?php echo file_get_contents('include/header.php'); ?>
<div class="col-xs-3"></div>
<div class="col-xs-6 text-center"><h2>Login</h2>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Username">
   </div>
   <div class="form-group">
      <input type="password" class="form-control" placeholder="Password">
   </div>
   <div class="btn-group" role="group">
      <a href="/pages/servers.php"><button type="button" class="btn btn-primary">Login</button></a>
   </div>
</div>
<div class="col-xs-3"></div>
<?php echo file_get_contents('include/footer.php'); ?>
