<?php
 ob_start();
require __DIR__ .'/../config/database.php';
$db = conectarDB();

// consultar
$query = "SELECT * FROM slides LIMIT ${limite}";

// obtener resultado
$resultado = mysqli_query($db, $query);
ob_end_flush();

?>
    <?php while($property = mysqli_fetch_assoc($resultado)): ?>

        <div class="swiper-slide slide back1" style="background-image: url(/yointidev-main/imagenes/<?php echo $property['imagen']; ?>);">
            <div class="content">
                <h3><?php echo $property['title'];?></h3>
                <p><?php echo $property['sub_title']; ?></p><br>
                <a href="#" class="btn1">Conocer más</a>             
            </div>
              
    </div>
   <?php endwhile; ?>