<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/index.css" />
	</head>
	<body>
	<?php
		require('dbconnect.php');
		session_start();
		if (isset($_POST['u_name'])){
			$username = $_REQUEST['u_name'];
			$password = $_REQUEST['u_pass'];
			$query = "SELECT * FROM users WHERE username='$username'
			and password='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
				if($rows==1){
				$_SESSION['Uname'] = $username;
				header("Location: index.php");
				}else{
					echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
			}else{
	?>
		<div class="log_form">
			<h1>Log In</h1>
			<form action="" method="post" name="login">
				<input type="text" name="u_name" placeholder="Username" required />
				<input type="password" name="u_pass" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
			</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
	<?php } ?>
	</body>
</html>
