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
  $farmerid = $_POST["farmerid"];
$sql = "INSERT INTO `data`(`farmerid`, `name`, `details`, `dues`)
VALUES ('$product','$category','$quantity','$farmerid')";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Database</title>
	<link rel="stylesheet" type="text/css" href="../../css/database.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>

	<h2>Database</h2>

	<div>
		<form method="post">
			<input type="" name="product" placeholder="farmerid">
			<input type="" name="category" placeholder="Name">
			<input type="" name="quantity" placeholder="Details">
			<input type="" name="farmerid" placeholder="dues">
			<input type="submit" name="">

	</form>
	</div>
</body>
</html>
