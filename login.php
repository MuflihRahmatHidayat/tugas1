<?php 

include "koneksi.php";


error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($connect, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		header("Location: index.php");
	} else {
		echo "<script>alert('Email Dan Password Yang Anda Masukkan Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
	<div>
		<form action="" method="POST">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a>.</p>
		</form>
	</div>
</center>
</body>
</html>
