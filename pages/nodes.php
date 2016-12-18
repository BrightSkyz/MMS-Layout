<?php echo file_get_contents('include/header.php'); ?>
<h2>Nodes</h2>
<a href="/pages/addnode.php" class="btn btn-sm btn-primary">Add Node</a>
<div ="table-responsive">
   <table class="table">
      <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>RAM Usage</th>
            <th>IP</th>
            <th>Ports Left</th>
            <th>Status</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>1</td>
            <td><a href="/pages/node/1.php">Local</td>
            <td>1.28/31.93 GB</td>
            <td>71.74.111.83</td>
            <td>1</td>
            <td>Online</td>
         </tr>
         <tr>
            <td>2</td>
            <td><a href="/pages/node/2.php">USA/Node1</td>
            <td>--/--</td>
            <td>37.42.26.272</td>
            <td>30</td>
            <td>Offline</td>
         </tr>
         <tr>
            <td>3</td>
            <td><a href="/pages/node/3.php">USA/Node2</td>
            <td>--/--</td>
            <td>74.98.36.29</td>
            <td>30</td>
            <td>Offline</td>
         </tr>
         <tr>
            <td>4</td>
            <td><a href="/pages/node/4.php">USA/Node3</td>
            <td>--/--</td>
            <td>77.89.17.171</td>
            <td>13</td>
            <td>Offline</td>
         </tr>
         <tr>
            <td>5</td>
            <td><a href="/pages/node/5.php">USA/Node4</td>
            <td>24.73/31.36 GB</td>
            <td>57.33.124.37</td>
            <td>1</td>
            <td>Online</td>
         </tr>
         <tr>
            <td>6</td>
            <td><a href="/pages/node/6.php">FRANCE/Node1</td>
            <td>--/--</td>
            <td>82.25.37.27</td>
            <td>13</td>
            <td>Offline</td>
         </tr>
         <tr>
            <td>7</td>
            <td><a href="/pages/node/7.php">FRANCE/Node2</td>
            <td>4.74/15.57 GB</td>
            <td>24.88.28.27</td>
            <td>9</td>
            <td>Online</td>
         </tr>
         <tr>
            <td>8</td>
            <td><a href="/pages/node/7.php">FRANCE/Dedicated1</td>
            <td>9.27/15.25 GB</td>
            <td>73.27.200.27</td>
            <td>9</td>
            <td>Online</td>
         </tr>
      </tbody>
   </table>
   </div>
<?php echo file_get_contents('include/footer.php'); ?>
