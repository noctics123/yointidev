<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>YoInti</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/yointidev-main/css/estilos.css">
    <script src="https://kit.fontawesome.com/7762120437.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/yointidev-main/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script defer src="index.js"></script>
</head>
<body>
   
   <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <nav class="nav">
        <div class="logo">
            <img src="/yointidev-main/img/yiamarillo.png" alt="Logo de YoInti">
        </div>
        <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu ">
          <li class="nav-menu-item"><a href="/yointidev-main/index.php" class="nav-menu-link nav-link">Inicio</a></li>
          <li class="nav-menu-item"><a href="/yointidev-main/servicios.php" class="nav-menu-link nav-link">Servicios</a></li>
          <li class="nav-menu-item"><a href="/yointidev-main/proyectos.php" class="nav-menu-link nav-link">Proyectos</a></li>
          <li class="nav-menu-item"><a href="/yointidev-main/nosotros.php" class="nav-menu-link nav-link">Nosotros</a></li>
          <li class="nav-menu-item"><a href="/yointidev-main/html/blog.html" class="nav-menu-link nav-link">Blog</a></li>
          <li class="nav-menu-item"><a href="/yointidev-main/contacto.php" class="nav-menu-link nav-link">Contacto</a></li>
          <?php if(!$auth): ?>
            <li class="nav-menu-item"><a href="/yointidev-main/login.php" class="nav-menu-link nav-link">login</a></li>
          <?php endif; ?>

          <?php if($auth): ?>
             <a class="nav-menu-item" href="/yointidev-main/cerrar-sesion.php">Cerrrar Sesion</a>
         <?php endif; ?>
        </ul>
    </nav>
   </header>
