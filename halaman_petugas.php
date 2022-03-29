<!DOCTYPE html>
<html>
<head>
	<title>Halaman petugas</title>
</head>
<body>
	<?php 
	include 'boostrap.php';
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
	?>
</div>  
<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>
        <a class="navbar-brand" href="#"> / PETUGAS</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse text-right" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="tabel_kamarp.php">Tabel kamar</a></li>
            <li><a class="dropdown-item" href="tabel_pesanan.php">Bookingan</a></li>
            <li><a class="dropdown-item" href="#">pembayaran</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tipe.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
             </ul>
    </div>
  </div>
  	
</nav>

<img  style="width: 100%; height: 700px;"  src="img/gambar4.jpg" class="img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>HOTEL FLOWSTA</h3>
        <p>Halaman Petugas</p>
      </div>

</body>
 
</body>
</html>