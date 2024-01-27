<?php
session_start();

$isRoot = isset($_SESSION['is_root']) && $_SESSION['is_root'] == 1;
?>

<header class="header fixed-top">
  <a href="#" class="logo"><img src="" alt=""></a>

  <nav>
    <ul>
      <li><a href="/revenco/pages/index.php">Acasă</a></li>
      <li><a href="#about">Despre</a></li>
      <li><a href="#service">Servicii</a></li>
      <li><a href="#project">Produse</a></li>
      <li><a href="#contact">Contacte</a></li>
      <li><a href="/revenco/pages/cos.php">Cos de Cumparaturi</a></li>
      <?php
      if ($isRoot) {
        echo '<li><a href="/revenco/admin/index.php">Admin Panel</a></li>';
    }
      ?>
    </ul>
  </nav>

  <div class="fas fa-bars"></div>
</header>
