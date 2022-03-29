<!DOCTYPE html>
<html>
<head>
	<title>tabel user</title>
	<?php 
include 'boostrap.php';
	 ?>

</head>
<body style="background: url(img/gambar2.jpg); background-size:cover">



	<?php
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="hapus"){
      echo "<div class='alert'>Berhasil di hapus!</div>";
    }
  }
?>
        <h2 class="alert alert-light text-center bg-dark fixed-top ">Tabel User</h2>
	<br>
	<br>

	<br>
	<br>
	<br>
<div class="container">
	<a href="inputtb_user.php"><button class="btn btn-success">+ Tambah user</button></a>
	</div>
	<br/>
	<br/>
	<div class="container">
		<div class="cointainer bg-light">

	<table  class="table table-hover " border="1">
		<tr>
			<th>id user</th>
			<th>Nama</th>
			<th>email</th>
			<th>Alamat</th>
			<th>no_telp</th>
			<th>username</th>
			<th>level</th>
			<th>Aksi</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_identitas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['level']; ?></td>


				<td>
					<a 
					href="edit_tbuser.php?id=<?php echo  $d['id_user']; ?>"><button class="btn btn-success">EDIT</button><br>
				</a>
					<a href="hapus_tbuser.php?id=<?php echo $d['id_user']; ?>"><button class="btn btn-danger">HAPUS</button>


					</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	</div>
	         <td><a href="halaman_admin.php"><button>kembali</button></a></td>
	         For example, <code>&lt;section&gt;</code> should be wrapped as inline.


</body>
</html>
