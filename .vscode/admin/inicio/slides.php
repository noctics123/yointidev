<?php
    require '../../includes/funciones2.php';
    incluirTemplateAdmin('header');
?>

</head>
        <div class="caja ccont">

          <!-- contenido submenu-->
          <div class="c1">
            <nav class="navbar-expand-lg bg-light navsub">

                <div class="collapse navbar-collapse submenu" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link   active1" href="./slides.php">Slides </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./conocenos.php">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./estadisticas.php">Estadísticas</a>
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
                          <div class="col-lg-4 ">
                            <a href="/yointidev-main/admin/propiedades/crearSlides.php">
                              <button type="button" class="btn btn-primary btn-lg btn-add">
                                <div>
                                  <i class="fa-solid fa-file-circle-plus imgnewelement"></i> </div>
                                <div>Nuevo Slide </div>
                              </button>
                            </a>
                          </div>
                          <div class="herramientas col-lg-4">
                            <button type="button" class="btn btn-primary btn-lg btnh"><i class="fa-solid fa-trash-can"></i></button>
                            <a href="../propiedades/ActuralizarSlides.php">
                              <button type="button" class="btn btn-primary btn-lg btnh"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>
                              <button type="button" class="btn btn-primary btn-lg btnh">
                                <i class="fa-solid fa-floppy-disk"></i>
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
                    <center><h1>Administrador</h1></center>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Subtitulo </th>
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
                        <td> 
                          <p>
                            <input type="checkbox" class="mycheck2" id="mycheck1"> <label for="mycheck1"></label>
                            
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>afasdfsdafasdfServicio de tec de informacion y mantenimiento</td>
                        <td>Thornton</td>
                        <td> 
                          <p>
                            <input type="checkbox" class="mycheck2" id="mycheck2"> <label for="mycheck2"></label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Servicio de tec de informacion y mantenimiento</td>
                        <td>asfdasdefdsafdfgsafServicio de tec de informacion y mantenimiento</td>
                        <td>the Bird</td>
                        <td> 
                          <p>
                            <input type="checkbox" class="mycheck2" id="mycheck3"> <label for="mycheck3"></label>
                          </p>
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

