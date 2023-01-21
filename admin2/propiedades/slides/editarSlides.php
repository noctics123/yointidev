<?php
    ob_start();


    //para validar
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id){
      header("Location: /yointidev-main/admin2/inicio/slides.php");
    }



    //El include
    require_once '../../../includes/funciones2.php';

    incluirTemplateAdmin('header');
    
    //Base de datos
    require_once '../../../includes/config/database.php';
    $db= conectarDB();

    //Obteniendo  datos de la propiedad
    $consulta = "SELECT * FROM slides where id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);


    

    // Consultar para obtener los vendedores
   $consulta = "SELECT * FROM slides";
   $resultado = mysqli_query($db,$consulta); 

   $errores = [];
   $titulo = $propiedad['title'];
   $subtitulo = $propiedad['sub_title'];
   $imagenSlides = $propiedad['imagen'];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

      // echo "<pre>";
      // var_dump($_FILES);
      // echo "</pre>";


      $titulo = mysqli_real_escape_string($db,$_POST['titulo']);
      $subtitulo =mysqli_real_escape_string($db, $_POST['subtitulo']);

      $imagen = $_FILES['imagen'];

      if(!$titulo){
        $errores[] = "<script>
          Swal.fire({
            text:'El usuario es obligatorio o no es valido',
            width: 380 ,
            padding: '3em',
            color: '#ffffff',
            background: 'linear-gradient(to left,#040404,#FFB602)' ,
            confirmButtonColor: '#FFB602'
          })
          </script>";
      }

      if(!$subtitulo){
        $errores[] = "<script>
          Swal.fire({
            text:'Tiene que añadir un titulo',
            width: 380 ,
            padding: '3em',
            color: '#ffffff',
            background: 'linear-gradient(to left,#040404,#FFB602)' ,
            confirmButtonColor: '#FFB602'
          })
          </script>";

      }
      //else
      // if(strlen($subtitulo)<50){
      //   $errores[] = "<script>
      //     Swal.fire({
      //       text:'El tubtitulo debe de contar con al menos 80 caracteres',
      //       width: 380 ,
      //       padding: '3em',
      //       color: '#ffffff',
      //       background: 'linear-gradient(to left,#040404,#FFB602)' ,
      //       confirmButtonColor: '#FFB602'
      //     })
      //   </script>";

      // }


      //validar por tamaño (1mb maximo)
      $medida = 10000 * 10000;
      if($imagen['size'] > $medida ) {
          $errores[] =
          "<script>
          Swal.fire({
          text:'La Imagen es muy pesada',
          width: 380 ,
          padding: '3em',
          color: '#ffffff',
          background: 'linear-gradient(to left,#040404,#FFB602)' ,
          confirmButtonColor: '#FFB602'
          })
        </script>";
      }

      //Revisar que el array este vacio

      if(empty($errores)){

        //Crear carpeta 
        $carpetaImagenes = '../../imagenes/' ;

        if(!is_dir($carpetaImagenes)){
          mkdir($carpetaImagenes);
        }

        $nombreImage = '';

        if($imagen['name']){

          //Elimanar la imagen previa
          unlink($carpetaImagenes.$propiedad['imagen']);
          // Generar un nombre único
          $nombreImage = md5( uniqid( rand(), true ) ) . ".jpg";
      
          //Subir la imagen
          move_uploaded_file($imagen['tmp_name'], $carpetaImagenes.$nombreImage);
          
        }else{
          $nombreImagen = $propiedad['imagen'];
        }

        
        //Insertar a la base de datos
          $query = "UPDATE slides SET title = '${titulo}',  sub_title = '${subtitulo}' , imagen='${nombreImage}' WHERE id = ${id} ";

          $resultado = mysqli_query($db, $query);

          if($resultado){
            
            header("Location: /yointidev-main/admin2/inicio/slides.php?resultado=2");
          }

      }

  }
  ob_end_flush();
?>

          <!-- Herramientas -->
          <div class="c2">
            <div id="content" class="opciones-menu">

              
      <form  method="post" enctype="multipart/form-data">
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
                          <tr>
                            <th scope="row">1</th>
                            <td>
                                <input class="titulo" type="text" id="titulo" name="titulo" placeholder="Titulo " value="<?php echo $titulo; ?>">
                            </td>
                            <td>
                                <textarea id="subtitulo" name="subtitulo" spellcheck="false" width="300px" placeholder="Subtitulo" ><?php echo $subtitulo; ?></textarea>
                            </td>
                            <td>
                                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                                <img src="./../../imagenes/<?php echo $imagenSlides; ?>" width="100rem">
                            </td>
                            <td>
                              <div class="herramientas">
                                <button  type="submit button" class="btn btn-primary btn-lg btn-save" width="10px" >                                      
                                          <div><i class="fa-solid fa-desktop imgnewelement" ></i> </div>
                                          <div>Guardar</div>
                                </button>
                                
                              <?php foreach($errores as $error): ?>
                                <div class="alerta error">
                                  <?php echo $error?>
                                </div> 
                              <?php endforeach ?>
                              </div>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      
                      
                    </div>

                  </section>
      </form>
            
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
