<?php
session_start();
?>
<html>
	<head>
		<title>Halaman Guru</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<h3>Selamat Datang <?php echo $_SESSION['nama'] ?> di Halaman</h3>
		<h1>Guru</h1>
		<a href="logout.php">Logout</a>
	</body>
</html>