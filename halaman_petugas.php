<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background:url(img/img_2.jpg); background-size: cover;" >
  <?php include 'boostrap.php';
session_start();

   ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>
        <a class="navbar-brand" href="#"> / GOOD PARADISE HOTEL</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right navbar-dark" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Tabel User</a></li>
            <li><a class="dropdown-item" href="#">Tabel User</a></li>
            <li><a class="dropdown-item" href="#">Tabel User</a></li>
            <li><a class="dropdown-item" href="#">Tabel User</a></li>
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

</body>
</html>