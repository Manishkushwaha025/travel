<?php include('navbar.html'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style></style>
</head>

<body>
	<div class="back-img"></div>
	<div class="body1">
		<form class="form1" action="login.php" method="post">
			<h2 class="h2">LOGIN</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error1"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label class="label1">User Name</label>
			<input class="input1" type="text" name="uname" placeholder="User Name"><br>

			<label class="label1">Password</label>
			<input class="input1" type="password" name="password" placeholder="Password"><br>

			<button class="button1" type="submit">Login</button>
			<a href="signup.php" class="ca">Create an account</a>
		</form>
	</div>
</body>

</html>