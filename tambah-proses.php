<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$Nama	= $_POST['Nama'];
	$Nim	= $_POST['Nim'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Alamat  = $_POST['Alamat'];
	$Hobi   = $_POST['Hobi'];
	$TTL  = $_POST['TTL'];
	
	$input = mysql_query("INSERT INTO daftar_nama VALUES ( '$Nama', '$Nim', '$JenisKelamin', '$Alamat', '$Hobi', '$TTL')") or die(mysql_error());
	header("location:Home.php?pesan=input");
}else{
	  echo '<script>window.history.back()</script>';
}
?>	