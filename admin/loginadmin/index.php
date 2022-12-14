<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if ($result->num_rows > 0) {
		if(password_verify($password, $row["password"])){
			$_SESSION = $row;
			$_SESSION["login"] = true;
	
			header("Location: welcome.php");
		} else {
			echo "<script>alert('Oops! Email Atau Password anda Salah.')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
	<link rel="shortcut icon" type="image" href="../../assets/img/sayyid.png">
	<title>Zenlo | Login Admin </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			
			<p class="login-register-text"><a href="../../index.php">Back</a>
			<!-- <p class="login-register-text"><a href="register.php">register</a> -->
			<br><br><br>
			
			
			
			
			
		</form>
		
	</div>
</body>
</html>
