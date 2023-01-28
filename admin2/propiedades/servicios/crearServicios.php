<?php
ob_start();

require_once '../../../includes/config/database.php';
$db= conectarDB();

$titulo3 = $_POST['titulo'];
$description = $_POST['description'];

//conultar para obtner los servicios
$consulta3 = "SELECT * FROM services";
$resultado2 = mysqli_query($db, $consulta3);

$errores= [];
$titulo3 = '';
$description = ' ';

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

    if(!$imagen3['name'] || $imagen3['error'] ) {
      $errores[] = 
      "<script>
      Swal.fire({
        text:'La Imagen es Obligatoria',
        width: 380 ,
        padding: '3em',
        color: '#ffffff',
        background: 'linear-gradient(to left,#040404,#FFB602)' ,
        confirmButtonColor: '#FFB602'
      })
      </script>";
      
    }

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

      // Generar un nombre único
      $nombreImage3 = md5( uniqid( rand(), true ) ) . ".jpg";

      //Subir la imagen
      move_uploaded_file($imagen3['tmp_name'], $carpetaImagenes3.$nombreImage3);
      //Insertar a la base de datos
      $query = "INSERT INTO services (title, description, imagen) values ('$titulo3', '$description','$nombreImage3')";
      
      $resultado2= mysqli_query($db,$query);


      //Es para el crearServicios.php
      if($resultado2){
        
        header("Location: /yointidev-main/admin2/inicio/servicios.php?resultado2=1");
      }

    
      
    }else{
      
      header("Location: /yointidev-main/admin2/inicio/servicios.php");
  
    }
      
  }

ob_end_flush();
?> 

<!-- <?php foreach($errores as $error): ?>
    <div class="alerta error">
    <?php echo $error?>
    </div> 
<?php endforeach ?>  -->

<!-- <div>
  <?php foreach($errores as $error): ?>
    <div class="alerta error">
    <?php echo $error?>
    </div> 
<?php endforeach ?> 
</div> -->