<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/alogin.css">
</head>
<body>
	<h1 id="sevafarm">SEVAFARM</h1>
	<div>
		<form action="loginasst.php" method="post">
		     	<h2>LOGIN</h2>
		     	<?php if (isset($_GET['error'])) { ?>
		     		<p class="error"><?php echo $_GET['error']; ?></p>
		     	<?php } ?>
		     	<label>User Name</label>
		     	<input type="text" name="uname" placeholder="User Name"><br>

		     	<label>Password</label>
		     	<input type="password" name="password" placeholder="Password"><br>

		     	<button type="submit">Login</button>
		          <a href="signup.php" class="ca">Create an account</a>
		     </form>
</div>
</body>
</html>
