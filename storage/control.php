<?php
$mysqli = new mysqli("localhost","root","","sevafarm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$temp1 = $_POST["temp1"];
	$humidity1 = $_POST["humidity1"];
	$temp2 = $_POST["temp2"];
    $humidity2 = $_POST["humidity2"];
    if ($temp1!=0) {
      // code...

    $sql = "UPDATE storage
    SET temp1 = $temp1, humidity1 = $humidity1, temp2 = $temp2, humidity2 = $humidity2
    WHERE ID= 1";
        // The request is using the POST method
    if ($mysqli->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    }
if ($temp1!=0) {
  // code...

$sql = "UPDATE storage
SET temp1 = $temp1
WHERE ID= 1";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if ($humidity1!=0) {
  // code...

$sql = "UPDATE storage
SET humidity1 = $humidity1
WHERE ID= 1";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if ($temp2!=0) {
  // code...

$sql = "UPDATE storage
SET temp2 = $temp2
WHERE ID= 1";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if ($humidity2 !=0) {
  // code...

$sql = "UPDATE storage
SET humidity2  = $humidity2
WHERE ID= 1";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}


$mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../css/sidegrid.css">
    <meta charset="utf-8">
    <title>STORAGE CONTROL</title>
  </head>
  <body>


<div class="section hpanel leftpan">

<div class="background-img">
<div class="home">
         <a href="../sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>
</div>
<div class="content-area">

      <h2>COLD STORAGE</h2>
  <form method="post">
      <table>
         <thead>
            <th><h4>Temp(°C)</h4></th>
            <th><h4>humidity(g.kg-1)</h4></th>
         </thead>
         <tr>
           <td><input type="" name="temp2" placeholder="temp non-ref"></td>
           <td><input type="" name="humidity2" placeholder="humidity non-ref"></td>
         </tr>
       </table>
         <div  ><input value="Submit"  type="submit"></div>
   </form>
</div>
</div>
</div>


<div class="section hpanel rightpan">
  <div class="background-img">
    <div class="content-area">
      <h2>OPEN STORAGE</h2>
      <form method="post">
          <table>
             <thead>
                <th><h4>Temp(°C)</h4></th>
                <th><h4>humidity(g.kg-1)</h4></th>
             </thead>
             <tr>
              <td><input type="" name="temp1" placeholder="temp ref"></td>
              <td><input type="" name="humidity1" placeholder="humidity ref"></td>
            </tr>
          </table>
          <div class="track" ><input class="track" value="Submit"  type="submit"></div>
      </form>




    </div>
  </div>
</div>

  </body>
</html>
