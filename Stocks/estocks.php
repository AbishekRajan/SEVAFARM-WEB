<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product = $_POST["product"];
	$category = $_POST["category"];
	$quantity = $_POST["quantity"];
	$id = $_POST["id"];
$sql = "UPDATE stocks SET quantity='$quantity' where id='$id'";
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if (isset($_GET['id'])) {
	$sql='select*from stocks where id='.$_GET['id'];
	$data=$mysqli->query($sql);
	foreach ($data as $data) {
		$data=$data;

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>editStocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/Stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>



	<form method="post">
		<input type="" name="product" placeholder="product" value="<?= $data['product']?>">
		<input type="" name="category" placeholder="category" value="<?= $data['category']?>">
		<input type="" name="quantity" placeholder="quantity" value="<?= $data['quantity']?>">
		<input type="hidden" name="id" value="<?=$data['id']?>">
		<input type="submit" name="">

	</form>

</body>
</html>
