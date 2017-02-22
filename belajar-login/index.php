<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<div class="box-login">
			<center>
				<img src="img/images.jpg" /><br>
				<h2>Silahkan Login</h2>
			</center>
			<form action="" method="POST">
				<input type="email" name="email" placeholder="Isi Email Anda" /><br>
				<input type="password" name="pass" placeholder="Isi Password Anda" /><br>
				<input type="submit" name="login" value="Login" />
			</form>
			<?php
				if(isset($_POST['login'])){
					include "koneksi.php";
					$cek_data = mysqli_query($conn, "SELECT * FROM user WHERE
					email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
					$data = mysqli_fetch_array($cek_data);
					$level = $data['level'];
					$nama = $data['nama_lengkap'];
					if(mysqli_num_rows($cek_data) > 0){
						session_start();
						$_SESSION['nama'] = $nama;
						if($level == 'admin'){
							header('location:admin.php');
						}elseif($level == 'siswa'){
							header('location:siswa.php');
						}elseif($level == 'guru'){
							header('location:guru.php');
						}
					}else{
						echo 'gagal login';
					}
				}
			?>
		</div>
	</body>
</html>