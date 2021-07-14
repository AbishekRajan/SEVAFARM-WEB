<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql='select * from alstocks';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2>Stocks</h2>
	<div id="Stocks">
	<form action="">
  <label>
    Date
    <input type="date" name="Date">
  </label>
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

		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?= $stock['ID']; ?></td>
			<td><?= $stock['product']; ?></td>
			<td><?= $stock['category']; ?></td>
			<td><?= $stock['quantity']; ?></td>

		</tr>
		<?php endforeach; ?>

	</table>
		</form>
	</div>

</body>
</html>
