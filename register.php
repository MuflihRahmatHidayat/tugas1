<?php 

include "koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($connect, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($connect, $sql);
			if ($result) { ?>
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				<script>alert('Selamat Regisrasi Berhasil.');
				window.location.href="login.php";
				</script>";
			<?php	
			} else {
				echo "<script>alert('Error')</script>";
			}
		} else {
			echo "<script>alert('Email Yang Ada Masukkan Sudah Ada.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Yang Anda Masukkan Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
	<div class="container">
		<form action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p>Anda sudah punya akun?  <a href="login.php">Login</a>.</p>
		</form>
	</div>
</center>
</body>
</html>