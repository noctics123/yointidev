<?php
  ob_start();
    
    require_once '../../includes/funciones2.php';
    incluirTemplateAdmin('header');

    //Importar la conexcion
    require_once '../../includes/config/database.php';
    $db= conectarDB();
    //El Query
    $query= "SELECT * FROM services";

    //Consultando ha la BD
    $resultQuey = mysqli_query($db, $query);

    //muestra un mensaje
    $resultado2= $_GET['resultado2'] ??null;
  

    // var_dump($resultado2);
    if($_SERVER['REQUEST_METHOD']==='POST'){
      $id2 = $_POST['id'];
      $id2 = filter_var($id2, FILTER_VALIDATE_INT);

        //deleting file
        $query = "SELECT imagen FROM services where id = ${id2}";
        $resultado2 = mysqli_query($db, $query);
        $property = mysqli_fetch_assoc($resultado2);
        
        
        if($id2){
        unlink('/yointidev-main/imgServicios' . $property['imagen']);
        //deleting property
        $query = "DELETE FROM services where id =${id2}";
        $resultado2=mysqli_query($db,$query);
        if($resultado2){
          header("Location: /yointidev-main/admin2/inicio/servicios.php?resultado2=3");
        }

        
      }

      if(empty($errores)){
        if($resultado2){
        
          header("Location: /yointidev-main/admin2/inicio/servicios.php?resultado2=2");
        }
      }

    }
    
    ob_end_flush();
?>


<head>
  <style>
    .imagen-tabla{
      width: 10rem;
    }
  </style>
</head>

          <!-- Herramientas -->
          <div class="c2">
            <div id="content" class="opciones-menu">
              <?php 
              if(intval($resultado2) === 1){
                 echo "<script>
                  Swal.fire({
                  text:'Se ha creado correctamente',
                  width: 380 ,
                  padding: '3em',
                  color: '#ffffff',
                  background: 'linear-gradient(to left,#040404,#FFB602)' ,
                  confirmButtonColor: '#FFB602'
                  })
                  </script>";
              }else
              
              if(intval($resultado2) === 2){
                echo "<script>
                Swal.fire({
                text:'Se ha actualizado correctamente',
                width: 380 ,
                padding: '3em',
                color: '#ffffff',
                background: 'linear-gradient(to left,#040404,#FFB602)' ,
                confirmButtonColor: '#FFB602'
                })
                </script>";

              }else
              if (intval($resultado2) === 3) {
                echo "<script>
                Swal.fire({
                text:'Se ha eliminado correctamente',
                width: 380 ,
                padding: '3em',
                color: '#ffffff',
                background: 'linear-gradient(to left,#040404,#FFB602)' ,
                confirmButtonColor: '#FFB602'
                })
                </script>";
              }?>
              
              
              <section class="menuservicios">
                  <div class="container">
                      <div class="row ">
                          <!-- Herramientas -->
                          <div class="col-lg-6 ">
                            <table class="table tableinfo">
                              <tbody>
                                <tr>
                                  <th scope="col">Te acompañamos</th>
                                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. 
                                    Felis eget nunc lobortis mattis aliquam faucibus purus in massa. 
                                    A diam sollicitudin tempor id eu nisl nunc mi.
                                  </td>
                                  <td class="seccbtn">

                                  
                                  <button type="button" class="btn btn-primary btn-lg btnedit" data-bs-toggle="modal" data-bs-target="#editar1">
                                      <i class="fa-solid fa-pen"></i>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="col-lg-2   ">
                            <button type="button" class="btn btn-primary btn-lg btn-add" data-bs-toggle="modal" data-bs-target="#crear">
                              <div>
                              <i class="fa-solid fa-file-circle-plus imgnewelement" ></i> </div>
                              <div>Nuevo servicio </div>
                              
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
                        <th scope="col">Imagen</th>
                        <th scope="col">Herramientas</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($property = mysqli_fetch_assoc($resultQuey)): ?>
                      <tr>
                        <td scope="row"><?php echo $property['id']; ?></td>
                        <td><?php echo $property['title']; ?></td>
                        <td><?php echo $property['description']; ?></td>
                        <td><img src="../../imagenes/<?php echo $property['imagen']; ?>" class="imagen-tabla"></td>
                        <td>

                          <form method="post">
                            <div class="herramientas">
                              <input type="hidden" name="id"  value="<?php echo $property['id']; ?>" >
                              <button type="submit " class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                              <a href="../propiedades/servicios/editarServicios2.php?id3=<?php echo $property['id'] ?>">
                                <button type="button" class="btn btn-primary btnh">
                                  <i class="fa-solid fa-pen-to-square hrr" width="10px"></i>
                                </button>
                              </a>
                              
                            </div>
                          </form>
                        </td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </div>
        </div>
    </div>
    





    <!-- para crear servicios -->
    <head>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>


    <!-- para crear servicios -->
    <div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Crear nuevo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <!--formulario-->
          <form method="post" action="/yointidev-main/admin2/propiedades/servicios/crearServicios.php" enctype="multipart/form-data">
              <div class="modal-body">
                <label for="titulo">Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo ">
              </div>

              <div class="modal-body">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control"  id="description" name="description" placeholder="Description" ></textarea>
              </div>

              <div class="modal-body">
                <label for="imagen" >Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
              </div>

              <div class="modal-footer">
                <button  type="button " class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                <button style="height: 68px;" type="submit button" class="btn btn-primary btnh"> 
                  <i style="width: 20px;" class="fa-solid fa-desktop imgnewelement"></i>
                </button>
                
              </div>
          </form>
        </div>
      </div>
    </div>






  




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <!-- <script>
      $('.editbtn').on('click', function() {
        $tr=$(this).closest('tr');
        var datos=$tr.children("td").map(function() {
          return $(this).text();
        });
          
         $('$update_id').val(datos[0]);
         $('#titulo').val(datos[1]);
         $('#description').val(datos[2]);
         $('#imagen').val(datos[3]);
      });

    </script> -->
  
  
  </body>
</html>

<?php
//cerrando conex
mysqli_close($db);

?>