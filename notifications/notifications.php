<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql='SELECT * from cart ORDER BY ordertime ';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/notification.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2>Notification</h2>
	<div id="Notification">
	<form>
  <label>
    Date
    <input type="date" name="Date">
  </label>
  	</form>
	</div>
	<div>
	<form>
	<table>
		<thead>
			<th>Product</th>
			<th>Quantity</th>
			<th>Customer ID</th>
			<th>Status</th>
			<th>Ordered Time</th>
			<th>Track</th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?= $stock['product']; ?></td>
			<td><?= $stock['quantity']; ?></td>
			<td><?= $stock['customerid']; ?></td>
			<td><?= $stock['status']; ?></td>
			<td><?= $stock['ordertime']; ?></td>
				<td><button type="button"  class="track">SEND</button></td>

		</tr>
		<?php endforeach; ?>

	</table>
	</form>
	</div>
</body>
</html>
