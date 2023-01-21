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


   







    <!-- HEADER -->
    <div class="cabecera">
      <header class="header">
        
      </header>
    </div>

    <div class="d-flex">
      <div id="sidebar-container" class="bg-primary">

        <div class="logo">
          <h4 class="text-light font-weight-bold" >YOINTI</h4>
        </div>

        <div class="menu">
          <a href="#" class="d-block text-light p-3 select-menu"><i class="fa-solid fa-house-chimney  mr-2"></i></i>Inicio</a>
          <a href="#" class="d-block text-light p-3"><i class="fa-solid fa-users mr-2"></i>Nosotros</a>
          <a href="#" class="d-block text-light p-3"><i class="fa-solid fa-laptop-code mr-2"></i>Servicios</a>
          <a href="../proyectos/proyectos.html" class="d-block text-light p-3"><i class="fa-solid fa-folder-open mr-2"></i>Proyectos</a>
                  <a href="../blog/publicaciones.html" class="d-block text-light p-3"><i class="fa-regular fa-id-card mr-2"></i></i>Blog</a>
                  <a href="../admins/administradores.html" class="d-block text-light p-3"><i class="fa-solid fa-user-tie mr-2"></i>Admins</a>
                </div>

      </div>

      <div class="w-100">

        <!-- sub menu -->
        <div class="sub-menu">
          <button type="button" class="btn btn-secondary btn-sm active">  Slides</button>
          <button type="button" class="btn btn-secondary btn-sm "> Servicios</button>
          <button type="button" class="btn btn-secondary btn-sm">Conocenos</button>
          <button type="button" class="btn btn-secondary btn-sm">Testimonios</button>
          <button type="button" class="btn btn-secondary btn-sm ">Estadisticas</button>
        </div>
         
        <!-- contenido submenu-->
        <div id="content" class="opciones-menu">
          <section>
            <div class="container">
              <div class="row">

                <div class="col-lg-3">
                  <button type="button" class="btn btn-primary btn-lg btn-add"><i class="fa-solid fa-file-circle-plus"></i> Nuevo Slide </button>
                </div>

                <!-- Herramientas -->
                <div class="herramientas col-lg-6 ">
                  <button type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-trash-can"></i></button>
                  <button type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-pen-to-square"></i></button>
                  <button type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-floppy-disk"></i></button>
                
                </div>

              </div>

            </div>
            <div class="tablero">
              <table class="table">
                <thead class="thead-dark">
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


        <div class="emergente">

          <!-- cabecera emergente -->
          <section class="cbz-em">
            <h3>Editar Slide</h3> 
          </section>

          <!-- cuerpo emergente -->
          <section>
            <div class="grid-content1">

              <!-- parte uno-->
                <div class="caja1">

                  <div class="grid-content1-1">

                    <div class="caja1-1">
                      <img src="../../img/01-screenshot.jpg" alt="" height="175px">
                    </div>

                    <div class="caja1-1">
                      <div class="grid-cont">
                        <div class="">
                          ID - 1
                        </div>
                        <div class="">
                          Img: url/img/nombre.png
                        </div>
                        <div class="">
                          Lorem ipsum dolor sit ar r adipisimet, consectetur adipisicing elit. Aliquam neque quam, minima, sunt eaque
                        </div>
                      </div>
                    </div>

                    <div class="caja1-1">
                      dsda
                    </div>

                  </div>
                </div>

              <!-- parte dos-->
                <div class="caja2">
                  caja2
                </div>
              </div>
    
             
    
    
            </div>
    
          </section>
          
    
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

