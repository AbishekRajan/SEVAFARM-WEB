<?php
//error_reporting(0);
$conn=mysqli_connect("localhost","root","","sevafarm");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accounts</title>
    <link rel="stylesheet" type="text/css" href="../../css/notification.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>
    <div class="pic1">
            <a>
            <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2>Accounts</h2>
	<div id="Accounts">
	<form action="">
  <label>
    Date
    <input type="date" name="Date">
  </label>
  	</form>
	</div>
	<?php
	$conn=mysqli_connect("localhost","root","","sevafarm");

	$result = mysqli_query($conn,"SELECT * FROM data");
	?>
	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
	<table  >
	<tr>
	<th>Farmer ID</th>
	<th>Name</th>
	<th>Dues</th>
	<th>PAYMENT</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	<td><?php echo $row["farmerid"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["dues"]; ?></td>
	<td><button type="button"  class="track">PAY</button></td>
	</tr>
	<?php
	$i++;
	}
	?>
	</table>
	<?php
	}
	else{
	echo "No result found";
	}
	?>

</body>
</html>
