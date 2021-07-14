<?php
//creates order
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];
	$customerid = $_POST["customerid"];
  	$status = 1;
  	$ordertime = $_POST["ordertime"];
$sql = "INSERT INTO cart (product, quantity, customerid, status, ordertime)
VALUES ('$product','$quantity','$customerid','$status', '$ordertime')";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$sql1 = "UPDATE alstocks
SET quantity = quantity - $quantity
WHERE product='$product'";
if ($mysqli->query($sql1) === TRUE) {
  echo "<br> Record Updated Successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}


$mysqli->close();
}
?>
