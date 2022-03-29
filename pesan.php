<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pemesanan kamar</title>
	<link rel="stylesheet" type="text/css" href="styleregis.css">
	   <form action="simpan_pesanan.php" method="post">
        <?php 
  session_start();
  if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
  }
  ?>
<div class="container">
    	<table>
    			<tr>
    			<td>pilih tipe kamar</td>
    			<td>:</td>
    			<td> <input type="radio" name="tipe_kamar"class="form_pesan" 
                 required="required"value="1">KAMAR SINGLE
                <input type="radio" name="tipe_kamar"class="form_pesan" 
                 required="required"value="2">KAMAR PASANGAN
                   <input type="radio" name="tipe_kamar"class="form_pesan" 
                 required="required"value="3">KAMAR KELUARGA
    		</td>
    		</tr>
    		<tr>
    			<td>masukan tanggal check in</td>
    			<td>:</td>
    			<td> <input type="date" name="masuk"></td>
    		</tr>
    		<tr>
    			<td>masukan tanggal check out</td>
    			<td>:</td>
    			<td> <input type="date" name="keluar"></td>
    		</tr>
    		<tr>
    			<td>masukan jumlah kamar</td>
    			<td>:</td>
    			<td> <input type="number" name="jumlah"></td>
    		</tr>
    	
    		<td></td>
    		<td></td>
    		<td><input type="submit" class="tombol_daftar" name="submit" value="PESAN">
            <input type="reset" name="reset"class="tombol_daftar" value="RESET"></td>
</table>
</form>
         <td><a href="halaman_tamu.php"><button>kembali</button></a></td>
         </div>

</head>
<body>

</body>
</html>