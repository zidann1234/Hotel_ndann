<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tabel pesanan</title>
	<!DOCTYPE html>
<html>
<head>
	<title>tabel user</title>
	<?php include 'boostrap.php';

	 ?>
</head>
<body style="background: url(img/gambar2.jpg); background-size:cover">
	<?php
 if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo"Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
        <h2 class="alert alert-light text-center bg-dark fixed-top ">Tabel pesanan</h2>
	<br/>
	<br/>
	<br/>
	<nav class="navbar navbar-light bg-light">

</nav>
<div style="padding-top: 10px;" class="container">
	
 <div class="container-fluid position-relative">
    <div class="position-absolute top-0 end-0">
    <form class="d-flex">
      <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      </div>

 

 <?php 


  ?>
    </form>
  </div>
  </div>
  <br>
<br>
<br>
<div class="container">
		<div class="cointainer bg-light">
	<table class="table table-hover" border="1">
		<tr>
			<th>Id Pesan</th>
			<th>Id kamar</th>
			<th>Nama</th>
			<th>check in</th>
			<th>check out</th>
			<th>Jumlah kamar</th>
			<th>jumlah hari</th>
			<th>status</th>
						<th>aksi</th>

		</tr>
		<?php 
		include 'koneksi.php';
		session_start ();

		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_pesan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_kamar']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['check_in']; ?></td>
                                <td><?php echo $d['check_out']; ?></td>
                               
                                <td><?php echo $d['jumlah_kamar']; ?></td>
				<td><?php echo $d['jumlah_hari']; ?></td>
				<td><?php echo $d['status']; ?></td>


				<td>
					<form method="POST" action="validasi.php">
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-success btn-sm" type="submit">Check_in</button>
					</form>
					<form method="POST" action=check_out.php>
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-danger btn-sm"  type="submit">Check_out</button>
					</form>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>
</div>
	         <td><a href="halaman_admin.php"><button>kembali</button></a></td>

</body>
</html>

