<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form pendaftaran</title>
      <link rel="stylesheet" type="text/css" href="styledaftar.css">

</head>
<body>
	  <div class="container">
    <p class="tulisan_login">SILAHKAN MASUKAN KAMAR BARU!</p>
 
    <form action="simpan_tbkamar.php" method="post">
    	<table>
    		<tr>
    			<td>Tipe kamar</td>
    			<td>:</td>
    			<td> <input type="text" name="tipe_kamar" class="form_daftar"required="required"></td>
    		</tr>
            <tr>
    			<td>Harga</td>
    			<td>:</td>
    			<td> <input type="text" name="harga" class="form_daftar"required="required"></td>
    		</tr>
    		<tr>
    			<td>jumlah</td>
    			<td>:</td>
                <td> <input type="number" name="total_kamar" class="form_daftar"required="required"></td>
            </tr>
    		<td></td>
    		<td></td>
            <td></td>
    		<td><input type="submit" class="tombol_daftar" name="submit" value="INPUT">
            <input type="reset" name="reset"class="tombol_daftar" value="RESET"></td>
</table>
</form>
         <td><a href="halaman_admin.php"><button>kembali</button></a></td>

</body>
</html>