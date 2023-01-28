<?php
ob_start();
//valdiar id valido
$id2 = $_GET['id3'];
$id2 = filter_var($id2, FILTER_VALIDATE_INT);
if(!$id2){
  header('Location: /yointidev-main/admin2/inicio/servicios.php');
}



//El include
require_once ('../../../includes/funciones2.php');

incluirTemplateAdmin('header');

//Base de datos
require_once('../../../includes/config/database.php');
$db= conectarDB();


//optener datos de la propiedad
$consulta = "SELECT * FROM services WHERE id = ${id2}";
$resultado2 = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado2);


//conultar para obtner los servicios
$consulta= "SELECT * FROM services";
$resultado2 = mysqli_query($db, $consulta);

$errores= [];
$id3 = $propiedad['id'];
$titulo3 = $propiedad['title'];
$description  = $propiedad['description'];
$imagenServicios =$propiedad['imagen'];

  if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $titulo3 = mysqli_real_escape_string($db,$_POST['titulo']);
    $description =mysqli_real_escape_string($db, $_POST['description']);

    $imagen3 = $_FILES['imagen'];

    if(!$titulo3){
      $errores[] = "<script>
        Swal.fire({
          text:'El titlo es obligatorio o no es valido',
          width: 380 ,
          padding: '3em',
          color: '#ffffff',
          background: 'linear-gradient(to left,#040404,#FFB602)' ,
          confirmButtonColor: '#FFB602'
        })
        </script>";
    }
    
    if(!$description){
      $errores[] = 
      "<script>
        Swal.fire({
          text:'La descripcion es obligatorio o no es valido',
          width: 380 ,
          padding: '3em',
          color: '#ffffff',
          background: 'linear-gradient(to left,#040404,#FFB602)' ,
          confirmButtonColor: '#FFB602'
        })
        </script>";
    }

    //else
    //  if(strlen($description)<50){
    //   $errores3[] = "<script>
    //     Swal.fire({
    //       text:'La descripciondebe de contar con al menos 80 caracteres',
    //       width: 380 ,
    //       padding: '3em',
    //       color: '#ffffff',
    //       background: 'linear-gradient(to left,#040404,#FFB602)' ,
    //       confirmButtonColor: '#FFB602'
    //     })
    //   </script>";

    // }

    //validar por tamaño (1mb maximo)
    $medida3 = 10000 * 10000;

    if($imagen3['size'] > $medida3 ) {
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
      $carpetaImagenes3 = '../../../imagenes/' ;

      if(!is_dir($carpetaImagenes3)){
        mkdir($carpetaImagenes3);
      }

      $nombreImage3 = '';
      if($imagen3['name']){
        //Eliminar la imagen previa
        unlink($carpetaImagenes3.$property['imagen']);
        // Generar un nombre único
        $nombreImage3 = md5( uniqid( rand(), true ) ) . ".jpg";
        //Subir la imagen
        move_uploaded_file($imagen3['tmp_name'], $carpetaImagenes3.$nombreImage3);
      }else{
        $nombreImage3 = $property['imagen'];
      }

      
      //Insertar a la base de datos
      $query = "UPDATE services SET title = '${titulo3}' , description = '${description}' , imagen = '${nombreImage3}' WHERE id = ${id2}";

      $resultado2= mysqli_query($db,$query);


      //Es para el crearServicios.php
      if($resultado2){
        
        header("Location: /yointidev-main/admin2/inicio/servicios.php?resultado2=2");
      }
      
    }
   
      
  }


ob_end_flush();
?> 

<!-- Modal -->
<head>

<style>
    .imagen-tabla{
      width: 10rem;
    }
</style>

</head>

<!-- para editar servicios -->

              <br>
              
                <div class="divisor">
                </div>
              <form  method="post" enctype="multipart/form-data">
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
                      
                        <tr>
                          <td scope="row"><?php echo $id3; ?></td>
                          <td> 
                            <input class="titulo" type="text" id="titulo" name="titulo" placeholder="Titulo " value="<?php echo $titulo3; ?>">
                          </td>
                          <td>
                            <textarea id="description" name="description" spellcheck="false" width="300px" placeholder="Description" ><?php echo $description; ?></textarea>
                          </td>
                          <td>
                            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                            <img src="../../../imagenes/<?php echo $imagenServicios; ?>" class="imagen-tabla">
                          </td>
                         <td> 
                              <div class="herramientas">
                              <button  type="submit button" class="btn btn-primary btn-lg btn-save" width="10px" >  
                                  <div><i  class="fa-solid fa-desktop imgnewelement" ></i> </div>
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