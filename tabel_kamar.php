<!DOCTYPE html>
<html>
<head>
	<title>tabel kamar</title>
</head>
<?php 
include 'boostrap.php';
	 ?>
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
<div class="container">
        <h2 class="alert alert-light text-center bg-dark fixed-top ">Tabel Kamar</h2>
	<br>
	<br>

	<br>
	<br>
	<br>
	<div class="container">
	 	<a href="tambah_kamar.php"><button class="btn btn-success">+ Tambah kamar</button></a>
	 	</div>


	<br><br>
			<div class="cointainer bg-light">

	<table  class="table table-hover" border="1">
		<tr>
			<th>id kamar</th>
			<th>tipe kamar</th>
			<th>harga kamar</th>
			<th>total kamar</th>
			<th width="300px">fasilitas</th>	
			<th>Aksi</th>	

		
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_kamar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tipe_kamar']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['total_kamar']; ?></td>
				<td><?php echo $d['fasilitas']; ?></td>


                
 

				<td>
					<a 
					href="edit_kamar.php?id=<?php echo $d['id_kamar']; ?>"><button class="btn btn-success">Edit</button><br>
				</a>
				

					</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	         <td><a href="halaman_admin.php"><button>kembali</button></a></td>

</body>
</html>