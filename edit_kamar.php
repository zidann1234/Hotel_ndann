<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form pendaftaran</title>
        <?php  include 'boostrap.php';
         ?>

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
        
<?php
 include "koneksi.php";
 $id_kamar = $_GET['id'];
 $query = "select * from tb_kamar where id_kamar='$id_kamar'";
 $result = mysqli_query($koneksi, $query);
 $row = mysqli_fetch_assoc($result);
 $tipe_kamar = $row['tipe_kamar'];
 $harga = $row['harga'];
  $gambar = $row['gambar'];

 $jumlah = $row['total_kamar'];
 $fasilitas = $row['fasilitas'];


?>

	  <div class="container">
        
        <h1 class="alert alert-success text-center">EDIT KAMAR!</h1>

 
    <form action="update_kamar.php" method="post">
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Tipe Kamar
                 <input type="text" name="tipe_kamar" class="form-control"  value="<?php echo "$tipe_kamar"; ?>"  >
             </label>
         </div>   
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 harga kamar
                 <input type="text" name="harga" class="form-control"  value="<?php echo "$harga"; ?>">
             </label>
         </div>  
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                total kamar
                 <input type="text" name="jumlah" class="form-control"  value="<?php echo "$jumlah"; ?>">
             </label>
         </div>  
          <div class="form-group">
             <label style="width:100%;">
                 fasilitas
                 <input type="text" name="fasilitas" class="form-control" value="<?php echo "$fasilitas"; ?>" >
             </label>
         </div> 
          <div class="form-group">

         <!-- <td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gbjalan" required />
<input type="submit" value="Upload" name="save"></td>
</div> -->
        
        
          
            <br>
                        <br>

         <button style="width: 80px;" type="submit" class=" btn btn-primary ">update</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>