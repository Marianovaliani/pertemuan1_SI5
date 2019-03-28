<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT Nim FROM daftar_nama WHERE Nim='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}
	else{
		$del = mysql_query("DELETE FROM daftar_nama WHERE Nim='$id'");
		header("location:Home.php?pesan=hapus");
	}}
?>
