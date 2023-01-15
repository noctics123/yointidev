<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons-fontawesome -->
    <script src="https://kit.fontawesome.com/7762120437.js" crossorigin="anonymous"></script>

    <script defer src="index.js"></script>
    


    <title>Admin-YoInti</title>
  </head>

  <body>
    
    <div class="grid-layout">
        <!-- NAVBAR ADMIN-->
        <div class="caja cajanav">
            
              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Logo Navbar-->
                <img class="logonegro" src="../../img/logoblack.png" alt="">

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                            <span class="mr-2 d-none d-lg-inline text-black ">Antonio Fernandez</span>
                            
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-gray-400"></i>
                                Cerrar Sesión
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
        </div>


        <!-- MENU LATERAL-->
        <div class="caja">
            <div id="sidebar-container" class="bg-primary">

                <div class="logo">
                  <h4 class="text-light font-weight-bold" >MENÚ</h4>
                </div>
        
                <div class="menu">
                  <a href="./slides.php" class="d-block text-light p-3 select-menu"><i class="fa-solid fa-house-chimney  mr-2"></i></i>Inicio</a>
                  <a href="../nosotros/informacion.php" class="d-block text-light p-3"><i class="fa-solid fa-users mr-2"></i>Nosotros</a>
                  <a href="../servicios/tecnologia.php" class="d-block text-light p-3"><i class="fa-solid fa-laptop-code mr-2"></i>Servicios</a>
                  <a href="#" class="d-block text-light p-3"><i class="fa-solid fa-folder-open mr-2"></i>Proyectos</a>
                  <a href="#" class="d-block text-light p-3"><i class="fa-regular fa-id-card mr-2"></i></i>Blog</a>
                  <a href="#" class="d-block text-light p-3"><i class="fa-solid fa-user-tie mr-2"></i>Admins</a>
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
                        <a class="nav-link " href="./slides.php">Slides </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active1" href="./proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./conocenos.php">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./estadisticas.php">Estadísticas</a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>

          <!-- Herramientas -->
          <div class="c2">
            <div id="content" class="opciones-menu">

              <section>
                  <div class="container">
                      <div class="row">
                          <!-- Herramientas -->
                          <div class="col-lg-3 ">
                            <button type="button" class="btn btn-primary btn-lg btn-add">
                              <div>
                              <i class="fa-solid fa-file-circle-plus imgnewelement"></i> </div>
                              <div>Nuevo Slide </div>
                            </button>
                          </div>
                          <div class="col-lg-4 ">
                          </div>
                          <div class="herramientas col-lg-4">
                            <button type="button" class="btn btn-primary btn-lg btnh"><i class="fa-solid fa-trash-can"></i></button>
                            <button type="button" class="btn btn-primary btn-lg btnh"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-primary btn-lg btnh"><i class="fa-solid fa-floppy-disk"></i></button>
                          </div>
                      </div>
                  </div>
              </section>
              <br>
              
                <div class="divisor">
                </div>

              <section>
                <div class="tablero">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Seleccion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>asdfgadfsgasdgServicio de tec de informacion y mantenimiento</td>
                        <td>Otto</td>
                        <td> <button> X</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>afasdfsdafasdfServicio de tec de informacion y mantenimiento</td>
                        <td>Thornton</td>
                        <td><button> X</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>asfdasdefdsafdfgsafServicio de tec de informacion y mantenimiento</td>
                        <td>the Bird</td>
                        <td><button> X</button></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  
                </div>

              </section>

            </div>
          </div>

        </div>

       
        
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

