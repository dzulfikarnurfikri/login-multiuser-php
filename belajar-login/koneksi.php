<?php
$conn = mysqli_connect('localhost','root','','db_login');
if(!$conn){
	echo 'gagal terhubung ke database';
}
?>