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
                
                <div class="titulocentral"><h5>Agencia de servicios digitales</h5></div>
                

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
                  <a href="../inicio/slides.html" class="d-block text-light p-3"><i class="fa-solid fa-house-chimney  mr-2"></i></i>Inicio</a>
                  <a href="../nosotros/informacion.html" class="d-block text-light p-3"><i class="fa-solid fa-users mr-2"></i>Nosotros</a>
                  <a href="./tecnologia.html" class="d-block text-light p-3  select-menu"><i class="fa-solid fa-laptop-code mr-2"></i>Servicios</a>
                  <a href="../proyectos/proyectos.html" class="d-block text-light p-3"><i class="fa-solid fa-folder-open mr-2"></i>Proyectos</a>
                  <a href="../blog/publicaciones.html" class="d-block text-light p-3"><i class="fa-regular fa-id-card mr-2"></i></i>Blog</a>
                  <a href="../admins/administradores.html" class="d-block text-light p-3"><i class="fa-solid fa-user-tie mr-2"></i>Admins</a>
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
                        <a class="nav-link active1" href="./tecnologia.html">Tecnología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./marketing.html">Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./partner.html">Partner</a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>

          <!-- Herramientas -->
          <div class="c2">
            <div id="content" class="opciones-menu">

              <section class="menuservicios">
                  <div class="container">
                      <div class="row ">
                          <!-- Herramientas -->
                          <div class="col-lg-6 ">
                            <table class="table tableinfo">
                              <tbody>
                                <tr>
                                  <th scope="col">Servicio de tecnologia de informacion</th>
                                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. 
                                    Felis eget nunc lobortis mattis aliquam faucibus purus in massa. 
                                    A diam sollicitudin tempor id eu nisl nunc mi.
                                  </td>
                                  <td class="seccbtn">
                                    <button type="button" class="btn btn-primary btn-lg btnedit">
                                      <i class="fa-solid fa-pen"></i>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="col-lg-2 ">
                            <button type="button" class="btn btn-primary btn-lg btn-add">
                              <div>
                              <i class="fa-solid fa-file-circle-plus imgnewelement"></i> </div>
                              <div>New Servicio </div>
                            </button>
                          </div>
                          
                          <div class="col-lg-2 ">
                            <button type="button" class="btn btn-primary btn-lg btn-save">
                              <div>
                                <i class="fa-solid fa-desktop imgnewelement"></i> </div>
                              <div>Guardar</div>
                            </button>
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
                        <th scope="col">Descripción </th>
                        <th scope="col">Fondo</th>
                        <th scope="col">Herramientas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                        <td>Otto</td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh-editar"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.o</td>
                        <td>Thornton</td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh-editar"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>asfdLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.o</td>
                        <td>the Bird</td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh-editar"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
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

