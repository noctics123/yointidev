<?php
  ob_start();
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

 
 
    //Base de datos 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]). '/yointidev-main/includes/config/database.php');
    $db= conectarDB();

    //Obtener los datos de la propiedad
    $consulta = "SELECT * FROM admins";
    $resultado = mysqli_query($db,$consulta);    
    $usuario = mysqli_fetch_assoc($resultado);

    $user= $usuario['username'];

    ob_end_flush();

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="/yointidev-main/admin2/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons-fontawesome -->
    <script src="https://kit.fontawesome.com/7762120437.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="index.js"></script>
    <title>Admin-YoInti</title>
  </head>

  <body>
    
    <div class="grid-layout" >
        <!-- NAVBAR ADMIN-->
        <div class="caja cajanav" >
            
              <!-- Topbar -->
              <form  method="post">
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Logo Navbar-->
                <img class="logonegro" src="/yointidev-main/img/logoblack.png" alt="">

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="/yointidev-main/" id="userDropdown" role="button"

                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                            <span class="mr-2 d-none d-lg-inline text-black "><?php echo $user; ?></span>
                        </a>
                        
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown" >
                            <?php if($auth): ?>
                              <a  class="dropdown-item"  href="/yointidev-main/procesos/cerrar-sesion.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-gray-400"></i>Cerrar Sesión</a>
                            <?php endif; ?>
                        </div>
                    </li>

                </ul>

            </nav>
            </form>
        </div>


        <!-- MENU LATERAL-->
        <div class="caja">
            <div id="sidebar-container" class="bg-primary">

                <div class="logo">
                  <h4 class="text-light font-weight-bold" >MENÚ</h4>
                </div>
        
                <div class="menu">

                  <a href="/yointidev-main/admin2/inicio/slides.php" class="d-block text-light p-3 select-menu"><i class="fa-solid fa-house-chimney  mr-2"></i></i>Inicio</a>
                  <a href="/yointidev-main/admin2/nosotros/informacion.php" class="d-block text-light p-3"><i class="fa-solid fa-users mr-2"></i>Nosotros</a>
                  <a href="/yointidev-main/admin2/servicios/tecnologia.php" class="d-block text-light p-3"><i class="fa-solid fa-laptop-code mr-2"></i>Servicios</a>
                  <a href="/yointidev-main/admin2/proyectos/proyectos.php" class="d-block text-light p-3"><i class="fa-solid fa-folder-open mr-2"></i>Proyectos</a>
                  <a href="/yointidev-main/admin2/blog/publicaciones.php" class="d-block text-light p-3"><i class="fa-regular fa-id-card mr-2"></i></i>Blog</a>
                  <a href="/yointidev-main/admin2/admins/administradores.php" class="d-block text-light p-3"><i class="fa-solid fa-user-tie mr-2"></i>Admins</a>
                </div>
        
              </div>
    
        </div>

        <div class="caja ccont">

          <!-- contenido submenu-->
          <div class="c1">
            <nav class="navbar-expand-lg bg-light navsub">

                <div class="collapse navbar-collapse submenu" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link   active1" href="/yointidev-main/admin2/inicio/slides.php">Slides </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/yointidev-main/admin2/inicio/servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/yointidev-main/admin2/inicio/proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/yointidev-main/admin2/inicio/conocenos.php">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/yointidev-main/admin2/inicio/estadisticas.php">Estadísticas</a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
