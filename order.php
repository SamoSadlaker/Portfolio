<?php
  $theme = "light";

  if (isset($_COOKIE['theme'])) {
      $theme = $_COOKIE['theme'];
  }

?>
<!DOCTYPE html>
<html lang="sk">
  
<head>
 <?php require_once "./assets/include/head.php" ?>
</head>

<body data-theme="<?= $theme ?>">
  <!-- Navbar -->
  <nav class="navbar">
    <a href="" class="nav-logo">Samo<span>Sadlaker</span></a>
    <ul class="nav-list">
      <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Order</a></li>
      <li class="nav-item"><a href="/#Contact" class="nav-link">Contact</a></li>
    </ul>
    <button id="theme"><i class="far fa-moon"></i></button>
  </nav>

  <header class="header-order">
    <h1>Order from SamoSadlaker</h1>
  </header>
  
  <main>
    <secion id="Order">
      <div class=" titles">
        <h3>Order</h3>
        <span>buy my stuff</span>
      </div>
    </secion>
  </main>

  <?php require_once "./assets/include/footer.php" ?>
</body>
</html>