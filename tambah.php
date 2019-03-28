<html>
<head>
	<title>Tugas Lab SI 5</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="utf-8">
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
	<center> <h3><b>Tambah Daftar Nama</b><br></h3>
<form action="tambah-proses.php" method="post">
<table class="table table-hover">
  <tbody>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="Nama" class="form-control" required></td>
    </tr>
    
	<tr>
      <td>Nim</td>
      <td><input type="text" name="Nim" class="form-control" required></td>
    </tr>
	<tr>
      <td>JenisKelamin</td>
      <td><input type="text" name="JenisKelamin" class="form-control" required></td>
    </tr>
	<tr>
      <td>Alamat</td>
      <td><input type="text" name="Alamat" class="form-control" required></td>
    </tr>
	
	<tr>
      <td>Hobi</td>
      <td><input type="text" name="Hobi" class="form-control" required></td>
    </tr>
	<tr>
      <td>TTL</td>
      <td><input type="text" name="TTL" class="form-control" required></td>
    </tr>
    
      <td colspan="2"><input type="submit" name="tambah" id="submit" value="Tambah" class="btn btn-primary btn-block"></td>
    </tr>
	
  </tbody>
</table>
</div>
</form></center>	
</div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Tentang Kami</h3>
	  <img src="laptop.jpg" width="250" height="100"/>
      <p>Hai! Kami adalah website penyedia informasi tentang berbagai macam jenis laptop. Mulai dari spesifikasi hingga harga pasar.
		Website ini kami buat untuk memudahkan para user dalam mendapatkan informasi tentang laptop. Website ini juga kami buat untuk menyelasaikan tugas akhir mata kuliah sistem manajemen database.</p>
    </div>
  </div>
  </br>
</div>
<footer> Copyright &copy; 2019 Designed by Me</footer>
</body>
</html>