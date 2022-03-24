<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background:url(img/bg.jpg); background-size: cover;" >
	<?php include 'boostrap.php';
session_start();

	 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>
        <a class="navbar-brand" href="#"> / Good Paradise Hotel</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right navbar-dark" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         
        <li class="nav-item">
          <a class="nav-link" href="tabel_user.php">User</a>
        </li>
        <li class="nav-item">
         
          <a class="nav-link" href="tabel_pesanan.php">Booking</a>
           <li class="nav-item">
          <a class="nav-link" href="tabel_kamar.php">Kamar</a>
           <li class="nav-item">
         


        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
             </ul>
    </div>
  </div>

    
</nav>

</body>
</html>