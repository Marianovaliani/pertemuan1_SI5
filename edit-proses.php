<center>
<?php
 if(isset($_POST['simpan']))
 {
  include('koneksi.php');
  $id 		= $_POST['id']; 
  $Nama  	= $_POST['Nama'];
  $Nim = $_POST['Nim'];
  $JenisKelamin  = $_POST['JenisKelamin'];
  $Alamat  	= $_POST['Alamat'];
  $Hobi  = $_POST['Hobi'];
  $TTL  = $_POST['TTL'];
  $update = mysql_query("UPDATE daftar_nama SET Nama='$Nama', JenisKelamin='$JenisKelamin', Alamat='$Alamat', Hobi='$Hobi', TTL='$TTL'  WHERE Nim='$id'") 
  or die(mysql_error());
  
	header("location:Home.php?pesan=update");
 }
?>
</center>