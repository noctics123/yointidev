<?php 
ob_start();
// require __DIR__ .'/../config/database.php';
 $db = conectarDB();

// consultar
$query2 = "SELECT * FROM services LIMIT ${limit2}";

$resultado2 = mysqli_query($db, $query2);


ob_end_flush();
?>
<!-- <head>
  <style>
    .imagen-tabla{
      width: 10rem;
    }
  </style>
</head> -->

    <?php while($property = mysqli_fetch_assoc($resultado2)): ?>
            <div class="cuadro">
                  <img src="/yointidev-main/imagenes/<?php echo $property['imagen'] ?>"  class="imagen-tabla" alt="a">
                <h1><?php echo $property['title']; ?></h1>
                <ol>
                  <li><?php echo $property['description'];?></li>
                
                </ol>
                <a href="#" class="btn-servicios">Ver más</a>
            </div>

    <?php endwhile; ?>