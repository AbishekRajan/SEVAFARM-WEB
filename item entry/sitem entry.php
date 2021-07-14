<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql='select * from stocks';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Item Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>

	<h2>Items</h2>

  	</form>
	</div>
	<div>
		<form action="">
			<table>
		<thead>
			<th>Si.No</th>
			<th>Product</th>
			<th>Category</th>
			<th>Quantity</th>
			<th>farmerid</th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?= $stock['id']; ?></td>
			<td><?= $stock['product']; ?></td>
			<td><?= $stock['category']; ?></td>
			<td><?= $stock['quantity']; ?></td>
			<td><?= $stock['farmerid']; ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
		</form>
	</div>

</body>
</html>
