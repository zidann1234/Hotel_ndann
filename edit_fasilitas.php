<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form pendaftaran</title>
        <?php  include 'boostrap.php'; ?>

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
        

	  <div class="container">
        
        <h1 class="alert alert-success text-center">TAMBAH FASILITAS!</h1>

 
    <form action="simpan_fasilitas.php" method="post">
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Nama Fasilitas
                 <input type="text" name="nama_fasilitas" class="form-control">
             </label>
         </div>   
          <div class="form-group">
             <label style="width:100%;">
                 Keterangan
                 <input type="text" name="ket" class="form-control" >
             </label>
         </div> 
                   <div class="form-group">

         <td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gbjalan" required />
<input type="submit" value="Upload" name="save"></td>
</div>
        
          
            <br>
                        <br>

         <button type="submit" class=" btn btn-primary">DAFTAR</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>