<!DOCTYPE html>
<html>
<head>
	<title>tabel Fasilitas</title>
	<?php 
include 'boostrap.php';
	 ?>
</head>
<body>
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

        <h2 class="alert alert-light text-center bg-dark fixed-top shadow-lg ">Tabel Kamar</h2>
	<br/>
	<br><br><br>
		<div class="container">

	<a href="tambah_fasilitas.php"><button class="btn btn-success">+ Tambah Fasilitas</button></a>
		<br><br><br>

	<table class="table table-hover" border="1">


	<tr>
			<th>id fasilitas</th>
			<th>fasilitas</th>
			<th>keterangan</th>

			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_fasilitashotel");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_fasilitashotel']; ?></td>
				<td><?php echo $d['nama_fasilitas']; ?></td>
				<td><?php echo $d['ket']; ?></td>
				<td>
					<a 
					href="edit_tbuser.php?id=<?php echo $d['id']; ?>"><button class="btn btn-success">Edit</button><br>
				</a>
					<a href="hapus_tbuser.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger">	Hapus</button>


					</a>
				</td>

			<?php 
                
		}
		?>
	</table>

	</div>
	         <td><a href="halaman_admin.php"><button>kembali</button></a></td>

</body>
</html>