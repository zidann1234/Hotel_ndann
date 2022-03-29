<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profil</title>
	<!DOCTYPE html>
<html>
<head>
	<title>tabel user</title>
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
<div class="cointainer">
        <h2 class="alert alert-light text-center bg-dark fixed-top ">Tabel User</h2>
	<br>
	<br>

	<br>
	<br>
	<br>

	<a href="inputtb_user.php"><button class="btn btn-success">+ Tambah user</button></a>
	<br/>
	<br/>
	<table  class="table table-hover" border="1">
		<tr>
		<th>id user</th>
			<th>Nama</th>
			<th>email</th>
			<th>Alamat</th>
			<th>no_telp</th>
			<th>username</th>
			<th>password</th>
			<th>level</th>
		</tr>
		<?php 
		session_start ();
		include 'koneksi.php';
		$username=$_SESSION['username'];

		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_identitas where username=$username");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>


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
	         For example, <code>&lt;section&gt;</code> should be wrapped as inline.


</body>
</html>

</head>
<body>

</body>
</html>