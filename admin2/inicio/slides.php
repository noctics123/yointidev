<?php
  ob_start();
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

  

  $Arrayresult = [];


  
  //el template
  require '../../includes/funciones2.php';
  incluirTemplateAdmin('header');

  //Importar la conexcion
  require_once '../../includes/config/database.php';
  $db= conectarDB();
  //El Query
  $query = "SELECT * FROM slides";
  //Consultando ha la BD
  $resultQuey = mysqli_query($db, $query);

  //muestra un mensaje
  $resultado= $_GET['resultado'] ??null;

  if($_SERVER['REQUEST_METHOD']==='POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if($id){
      //deleting file
      $query = "SELECT imagen FROM slides where id = ${id}";
      $resultado = mysqli_query($db, $query);
      $property = mysqli_fetch_assoc($resultado);
      unlink('/yointidev-main/imagenes' . $property['imagen']);
      //deleting property
      $query = "DELETE FROM slides where id =${id}";
      $resultado=mysqli_query($db,$query);
      if($resultado){
        // header('/yointidev-main/admin2/inicio/slides.php?resultado=2');
        header("Location: /yointidev-main/admin2/inicio/slides.php?resultado=3");
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
              <?php switch(intval($resultado)) {
                case 1:
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
                  break;
                case 2:
                  echo "<script>
                    Swal.fire({
                    text:'Se ha editado correctamente',
                    width: 380 ,
                    padding: '3em',
                    color: '#ffffff',
                    background: 'linear-gradient(to left,#040404,#FFB602)' ,
                    confirmButtonColor: '#FFB602'
                    })
                    </script>";
                  break;

                case 3:
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
                  break;
              } ?>

              <section>
                  <div class="container">
                      <div class="row">
                          <!-- Herramientas -->
                          <div class="col-lg-2 ">
                            <a href="../propiedades/slides/crearSlides.php">
                              <button type="button" class="btn btn-primary btn-lg btn-add">
                                <div>
                                <i class="fa-solid fa-file-circle-plus imgnewelement"></i> </div>
                                <div>Nuevo Slide </div>
                              </button>
                            </a>
                            
                          </div>
                          <div class="col-lg-4 ">
                            <!-- <button type="button" class="btn btn-primary btn-lg btn-save">
                              <div>
                                <i class="fa-solid fa-desktop imgnewelement"></i> </div>
                              <div>Guardar</div>
                            </button> -->
                          </div>
                          <div class="herramientas col-lg-4">
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
                        <th scope="col">Subtitulo </th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Herramientas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($property = mysqli_fetch_assoc($resultQuey)): ?>
                      <tr>
                        <th scope="row"><?php echo $property['id']; ?></th>
                        <td><?php echo $property['title']; ?></td>
                        <td><?php echo $property['sub_title']; ?></td>
                        <td><img src="../imagenes/<?php echo $property['imagen']; ?>" class="imagen-tabla"></td>
                        <td>
                          <form method="post">
                            <div class="herramientas">
                              <input type="hidden" name="id" value="<?php echo $property['id'] ?>" >
                              <button type="submit button"class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                              <a href="../propiedades/slides/editarSlides.php?id=<?php echo $property['id'] ?>">
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></scrip>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

<?php
 // cerrar la conexion
  mysqli_close($db);
?>