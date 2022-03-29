<!DOCTYPE html>
<html>
<head>
	<title>tabel kamar</title>
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

	<tr>
			<th>id kamar</th>
			<th>tipe kamar</th>
			<th>harga kamar</th>
			<th>fasilitas</th>
			<th>total kamar</th>
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

			<?php 
                
		}
		?>
	</table>
	         <td><a href="halaman_admin.php"><button>kembali</button></a></td>

</body>
</html>