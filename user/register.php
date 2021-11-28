<?php
	if($_POST){
		$nama=$_POST['nama'];
        $username=$_POST['username'];
		$password=$_POST['password'];
		$alamat=$_POST['alamat'];
        $telp=$_POST['telp'];

		if(empty($nama)){
			echo "<script>alert('nama tidak boleh kosong');location.href='register_pelanggan.php';</script>";
        } elseif(empty($username)){
			echo "<script>alert('username tidak boleh kosong');location.href='register_pelanggan.php';</script>";
		} elseif(empty($password)){
			echo "<script>alert('password tidak boleh kosong');location.href='register_pelanggan.php';</script>";
		} elseif(empty($alamat)){
			echo "<script>alert('alamat tidak boleh kosong');location.href='register_pelanggan.php';</script>";
        } elseif(empty($telp)){
			echo "<script>alert('no telp tidak boleh kosong');location.href='register_pelanggan.php';</script>";
		} else {
			include "config.php";
			$insert=mysqli_query($conn,"INSERT into pelanggan (nama, username, password, alamat, telp) 
			value ('".$nama."','".$username."','".md5($password)."', '".$alamat."', '".$telp."')")
			or die(mysqli_error($conn));
			if($insert){
				echo "<script>alert('Sukses menambahkan pelanggan');location.href='index.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan pelanggan');location.href='register.php';</script>";
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
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register</title>
</head>
<body class="register">
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Nama" name="nama"  required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder="Alamat" name="alamat"  required>
			</div><br>
			<div class="input-group">
				<input type="tel" placeholder="Nomor Telepon" name="telp"  required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"  required>
			</div><br>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
            </div><br>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div><br>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div><br>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>