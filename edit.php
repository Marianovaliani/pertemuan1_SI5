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
	<center> <h3><b>Edit Daftar Nama</b><br>
  </h3>
  
  <?php
   include('koneksi.php');
   $id = $_GET['id'];
   $show = mysql_query("SELECT * FROM daftar_nama WHERE Nim='$id'");
   if(mysql_num_rows($show) == 0)
   {
    echo '<script>window.history.back()</script>';
   }
   else
   {
    $data = mysql_fetch_assoc($show);
   }
  ?>
  
  <form action="edit-proses.php" method="post">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
<table class="table table-hover">
  <tbody>
    <td>Nama</td>
    <td><input type="text" name="Nama" class="form-control" size="30" value="<?php echo $data['Nama']; ?>" required ></td>
    </tr>
	<tr>
     <td>Nim</td>
     <td><?php echo $data['Nim']; ?> </td>
    </tr>
    <tr>
	<tr>
    <td>Jenis Kelamin</td>
    <td><input type="text" name="JenisKelamin" class="form-control" size="30" value="<?php echo $data['JenisKelamin']; ?>" required ></td>
    </tr>
	<tr>
    <td>Alamat</td>
    <td><input type="text" name="Alamat" class="form-control" size="30" value="<?php echo $data['Alamat']; ?>" required ></td>
    </tr>
	<tr>
    <td>Hobi</td>
    <td><input type="text" name="Hobi" class="form-control" size="30" value="<?php echo $data['Hobi']; ?>" required ></td>
    </tr>
	<tr>
    <td>TTL</td>
    <td><input type="text" name="TTL" class="form-control" size="30" value="<?php echo $data['TTL']; ?>" required ></td>
    </tr>
	
	<tr>
      <td colspan="2"><input type="submit" name="simpan" id="submit" value="Simpan" class="btn btn-primary btn-block"></td>
    </tr>
   </table>
  </form></center>	
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Tentang Kami</h3>
	  <img src="laptop.jpg" width="250" height="100"/>
      <p>Hai! Kami adalah mahasiswa Fakulas Ilmu Komputer dan Teknologi Informasi, Jurusan Ilmu Komputer USU.
		Ini adalah Informasi mahasiswa lab 5 Sistem Ingormasi Ilmu Komputer USU.</p>
    </div>
  </div>
  </br>
</div>
<footer> Copyright &copy; 2019 Designed by Me</footer>
</body>
</html>