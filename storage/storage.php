<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql='select * from storage';
$stores = $mysqli->query($sql);
foreach($stores as $store )

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../css/sidegrid.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="section hpanel leftpan">

  <div class="background-img">
    <div class="home">
         <a href="../sevafarm.php"><img src="../../pictures/sevalogo.png"height="80px" width="120px"></a>
    </div>
    <div class="content-area">

      <h2>COLD STORAGE</h2>
      <table >
         <thead>
            <th><h4>Temp(°C)</h4></th>
            <th><h4>humidity(g.kg-1)</h4></th>
         </thead>
    <?php foreach($stores as $store ):  ?>
         <tr>
            <td><?= $store['temp2']; ?></td>
            <td><?= $store['humidity2']; ?></td>
         </tr>
    <?php endforeach; ?>
      </table>


      <div class="btn-area">
        <a href="control.php">CONTROL</a> </div>
    </div>
  </div>
</div>
<div class="section hpanel rightpan">
  <div class="background-img">
    <div class="content-area">
      <h2>OPEN STORAGE</h2>
      <table >
        <thead>
           <th><h4>Temp(°C)</h4></th>
           <th><h4>humidity(g.kg-1)</h4></th>
        </thead>
    <?php foreach($stores as $store ):  ?>
           <tr>
              <td><?= $store['temp1']; ?></td>
              <td><?= $store['humidity1']; ?></td>
           </tr>
    <?php endforeach; ?>
      </table>


      <div class="btn-area">
        <a href="control.php">CONTROL</a> </div>
    </div>
  </div>
</div>

  </body>
</html>
