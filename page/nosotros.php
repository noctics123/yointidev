<?php
require '../includes/funciones.php';
    incluirTemplate('header');
?>
<head>
    <link rel='stylesheet' href='../css/nosotros.css'>
</head>
<!-- <body> -->
    <!-- HEADER -->
    <header class="header">
        <nav class="nav">
            <div class="logo">
                <img src="../img/yiamarillo.png" alt="Logo de YoInti">
            </div>
            <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Inicio</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Servicios</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Proyectos</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Nosotros</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Blog</a></li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Contacto</a></li>
                </ul>
        </nav>
       </header> -->
    
    <!-- BODY -->
    <div class="s">

        <!---------------------- scroll -------------------------------->
        <div class="s-ideas">
            <h1 class="tittle">IDEAS</h1>
        </div>
        <!-- CARDS NOSOTROS -->
            <div class="content">
                <div class="infonosotros">
                    <p>Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum quia minima sunt sed enim sint id facilis ipsam.
                        Ut nisi animi qui amet cumque quo autem dolorem. Qui facilis veniam ut fugiat sint sed nihil possimus in neque
                        exercitationem in magnam galisum eos dolores accusantium. Aut expedita suscipit ut corrupti quaerat ut autem 
                        error non cumque  culpa qui necessitatibus itaque quaerat cupiditate est earum dicta.</p>
                </div>

                <div class="card-wrap">
                    <article class="card">
                        <header class="header-card">
                            <img src="../img/pagnosotros/cardnos/cardnos1.jpg" alt="">
                        </header>
                        <footer class="footer-card">
                            <div class="texto-card">
                                <p>Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum.</p>
                            </div>
                        </footer>
                    </article>

                    <article class="card">
                        <header class="header-card">
                            <img src="../img/pagnosotros/cardnos/cardnos2.jpg" alt="">
                        </header>
                        <footer class="footer-card">
                            <div class="texto-card">
                                <p>Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum.</p>
                            </div>
                        </footer>
                    </article>

                    <article class="card">
                        <header class="header-card">
                            <img src="../img/pagnosotros/cardnos/cardnos3.jpg" alt="">
                        </header>
                        <footer class="footer-card">
                            <div class="texto-card">
                                <p>Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum.</p>
                            </div>
                        </footer>
                    </article>
                </div>
            </div>

            <!-- MISION Y VISION -->
               <h1 class="letrasmv">Visión <span> Misión</span></h1>

               <div class="mision-vision">
                   
                   <div class="cardmv">
                       <div class="circle" style="--clr:#000000">
                           <img src="../img/pagnosotros/mv/eye.png" class="eye">
                       </div>
                       <div class="contentvision">
                           <h1>Visión</h1>
                           <h4>Ser una empresa que va de la mano con los avances de la tecnología y la sociedad; comprometidos con las necesidades y logros de nuestros clientes.
                           </h4>
                       </div>
                       <img src="../img/pagnosotros/mv/imgmv.png" class="vision_img">
                   </div>  
                   <div class="cardmv">
                       <div class="circle" style="--clr:#FFB602">
                           <img src="../img/pagnosotros/mv/point.png" class="eye">
                       </div>
                       <div class="contentmision">
                           <h1>Misión</h1>
                           <h4>Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum.
                               Lorem ipsum dolor sit amet. Non nihil cupiditate aut galisum.
                           </h4>
                       </div>
                       <img src="../img/pagnosotros/mv/imgm.png" class="vision_img">
                   </div> 
               </div>

        <!-- GALERÍA -->
        <h1 class="letrasmv">Galería</h1>

        <div class="main-carousel">
            <div class="cell"><img src="../img/01-screenshot.jpg"></div>
            <div class="cell"><img src="../img/02-screenshot.jpg"></div>
            <div class="cell"><img src="../img/03-screenshot.jpg"></div>
            <div class="cell"><img src="../img/04-screenshot.jpg"></div>
            <div class="cell"><img src="../img/05-screenshot.jpg"></div>
        </div>
        
        <br>
        <br>

        <!-- OUR TEAM -->
      
        <div class="team">

            <h1>Nuestro equipo</h1>

            <div class="row">

                <div class="boxx">
                    <img src="../img/pagnosotros/team/t1.jpg">
                    <h2>Ruben Garcia</h2>
                    <h4>Desarrollador web</h4>
                    <h5>(+51)987654321</h5>
                    <h5>ruben123@gmail.com</h5>
                    <div class="icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </div>
                </div>

                <div class="boxx">
                    <img src="../img/pagnosotros/team/t2.jpg">
                    <h2>Antonio Padua</h2>
                    <h4>Analista</h4>
                    <h5>(+51)987654321</h5>
                    <h5>ruben123@gmail.com</h5>
                    <div class="icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </div>
                </div>

                <div class="boxx">
                    <img src="../img/pagnosotros/team/t3.jpg">
                    <h2>Vivian Roddro</h2>
                    <h4>Diseñadora gráfica</h4>
                    <h5>(+51)987654321</h5>
                    <h5>ruben123@gmail.com</h5>
                    <div class="icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </div>
                </div>

            </div>
        </div>
        

        <!---->
        <!-- FOOTER -->
<?php
    incluirTemplate('footer');
?>  