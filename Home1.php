<html>
<head>
	<title>Tugas Lab SI 5</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Text+Me+One" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<a id="posisi" href="Home.php"><img src="laptop.jpg" width="200px" height="200px"></a>
	<h1 id="header"><a class="link" href="Home.php">Informasi Mahasiswa Lab SI 5</a></h1>
	<form method="get" action="search.php" class="cari">
		<input type="text" name="cari" placeholder="Cari Nama" required>
		<button type="submit"><i class="fa fa-search"></i></button>
	</form><br>
	<nav id="navClass">
		<ul>
					<li><a href="Home1.php"><i class ="fa fa-list"></i>Home</a></li>
			<li><a href="Home.php"><i class ="fa fa-list"></i>Admin</a></li>
			<li><a href="tambah.php"><i class ="fa fa-plus"></i>Tambah Daftar</a></li>
		</ul>
	</nav>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
		<center><h3>Daftar Nama</h3>
		<table cellpadding="8" cellspacing="0" border="3" bgcolor="white" color="#622505">
		<tr bgcolor="#00CED1">
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>JenisKelamin</th>
			<th>Alamat</th>
			<th>Hobi</th>
			<th>TTL</th>
		</tr></center>	

<?php
include('koneksi.php');
$query = mysql_query("SELECT * FROM daftar_nama ORDER BY Nim desc") or die(mysql_error());
		if(mysql_num_rows($query) == 0 ){
		echo '<tr align="center"><td colspan="6">Tidak ada data!</td></tr>';
			}else{
		$no = 1;
		while($data= mysql_fetch_assoc($query)){
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['Nama'].'</td>';
		echo '<td>'.$data['Nim'].'</td>';
		echo '<td>'.$data['JenisKelamin'].'</td>';
		echo '<td>'.$data['Alamat'].'</td>';
		echo '<td>'.$data['Hobi'].'</td>';
		echo '<td>'.$data['TTL'].'</td>';
		$no++;
		}
		}
?>
</table></center>
	</div>
</div>
	<div class="rightcolumn">
	<div class="card">
      <h3>Tentang Kami</h3>
	  <img src="laptop.jpg" width="250" height="100"/>
      <p> Hai! Kami adalah mahasiswa Fakulas Ilmu Komputer dan Teknologi Informasi, Jurusan Ilmu Komputer USU.
		Ini adalah Informasi mahasiswa lab 5 Sistem Ingormasi Ilmu Komputer USU.</p>
    </div>
	</div></br>
</div>
<footer> Copyright &copy; 2019 Designed by Me</footer>
</body>
</html>