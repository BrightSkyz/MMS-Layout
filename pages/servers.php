<?php echo file_get_contents('include/header.php'); ?>
<h2>Servers</h2>
<a href="/pages/addserver.php" class="btn btn-sm btn-primary">Create Server</a>
<div ="table-responsive">
   <table class="table">
      <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Player Count</th>
            <th>IP</th>
            <th>Port</th>
            <th>Status</th>
            <th>Node</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>1</td>
            <td><a href="/pages/server/1.php">Test Server</td>
            <td>--/10</td>
            <td>71.74.111.83</td>
            <td>25585</td>
            <td>Offline</td>
            <td>Local</td>
         </tr>
         <tr>
            <td>2</td>
            <td><a href="/pages/server/2.php">The Vanilla Server</td>
            <td>9/25</td>
            <td>play.tvs-mc.com</td>
            <td>25693</td>
            <td>Online</td>
            <td>USA/Node4</td>
         </tr>
         <tr>
            <td>3</td>
            <td><a href="/pages/server/3.php">Crazy Factions</td>
            <td>78/79</td>
            <td>play.crazyfac.com</td>
            <td>25565</td>
            <td>Online</td>
            <td>USA/Node4</td>
         </tr>
         <tr>
            <td>4</td>
            <td><a href="/pages/server/4.php">Billys Creative Server</td>
            <td>--/--</td>
            <td>billy.myhost.co</td>
            <td>25693</td>
            <td>Suspended</td>
            <td>FRANCE/Node2</td>
         </tr>
         <tr>
            <td>5</td>
            <td><a href="/pages/server/5.php">KitPvP Land</td>
            <td>35/36</td>
            <td>mc.kitpvp-games.co.uk</td>
            <td>25565</td>
            <td>Online</td>
            <td>FRANCE/Dedicated1</td>
         </tr>
         <tr>
            <td>6</td>
            <td><a href="/pages/server/6.php">Minecraft Server 6</td>
            <td>45/46</td>
            <td>24.88.28.27</td>
            <td>25633</td>
            <td>Online</td>
            <td>FRANCE/Node2</td>
         </tr>
      </tbody>
   </table>
   </div>
<?php echo file_get_contents('include/footer.php'); ?>
