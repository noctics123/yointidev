<?php
  require './includes/funciones.php';
  incluirTemplate('header', $inicio = true);
  
?>
<!------------------------  SLIDE-HOME  --------------------->
<section class="home" id="home">
  
  <div class="swiper home-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
          <div class="swiper-slide slide back1">
              <div class="content">
                <h3>The best way to show your project</h3>
                <p>Here you can put a shot description about you</p><br>
                <a href="#" class="btn1">Conocer más</a>             
              </div>
              
          </div>
          <div class="swiper-slide slide back2">
            <div class="content">
              <h3>The best way to show your project</h3>
              <p>Here you can put a shot description about you</p><br>
              <a href="#" class="btn1">Conocer más</a>             
            </div>
          </div>
          <div class="swiper-slide slide back3">
            <div class="content">
              <h3>The best way to show your project</h3>
              <p>Here you can put a shot description about you</p><br>
              <a href="#" class="btn1">Conocer más</a>             
            </div>
          </div>
          <div class="swiper-slide slide back4">
            <div class="content">
              <h3>The best way to show your project</h3>
              <p>Here you can put a shot description about you</p><br>
              <a href="#" class="btn1">Conocer más</a>             
            </div>
          </div>
      
    </div>
    <!-- pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- navigation buttons -->
    <div class="swiper-button-prev" data-aos="fade-right"></div>
    <div class="swiper-button-next" data-aos="fade-left"></div>
  
    <!-- scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
</section> 
<!------------------------  SERVICIOS  --------------------->
<section class="about">
  <div class="about-container">
        <h1 class="heading">Innova y posiciona tu  marca</h1>
        <br>
        <div class="content">
          <p>...con nuestro equipo multidisciplinario, 
            poniendo a disposición su experiencia y 
            conocimiento en tecnología y marketing digital. 
            Permítenos atender eficazmente sus requerimientos 
            brindandole nuestros  diversos servicios integrales:
          </p>     
        </div>
  </div>
</section>

<section class="cuadrado">
  <div class="container-cua">
     <div class="container-cuadro">
            <div class="cuadro">
                  <img src="./img/p1.png" alt="a">
                <h1>Digital Marketing</h1>
                <ol>
                  <li>Social Media Manager</li>
                  <li>Campañas Publicitarias</li>
                  <li>Diseño de Identidad de Marca(Branding)</li>
                  <li>Social Marketing (Mercadeo Social)</li>
                </ol>
                <a href="#" class="btn-servicios">Ver más</a>
            </div>

            <div class="cuadro">
                <img src="./img/p2.png" alt="a">
                <h1>Information Technology</h1>
                <ol>
                  <li>Desarrollo de Páginas Webs</li>
                  <li>Desarrollo de Apps Movil</li>
                  <li>Desarrollo de Sistemas Integrados de Gestión</li>
                  <li>Digitalización de Documentos</li>
                </ol>
                <a href="#" class="btn-servicios">Ver más</a>
            </div>
            
            <div class="cuadro">
                <div class="imgc">
                <img src="./img/p3.png" alt="a">
                </div>
                <h1>Digital Partner outsourcing</h1>
                <ol>
                  
                  <li>Gestión de Leads (Ventas)</li>
                  <br>
                  <li>Equipo de diseño 24/7</li>
                  <br>
                  <li>Equipo InTI</li>
                  
                </ol>
                <a href="#" class="btn-servicios">Ver más</a>
            </div>

      </div> 
    </div>
</section>

<div class="linea-container">
  <hr class="linea">
</div> 

<!------------------------  PROYECTOS  --------------------->
<section class="about" >
  <div class="about-container">
        <h1 class="heading">Proyectos</h1>
        <br>
        <div class="content">
          <p>...con nuestro equipo multidisciplinario, 
            poniendo a tu disposición su experiencia y 
            conocimiento en tecnología y marketing. 
            Permítenos atender eficazmente tus requerimientos 
            brindandote nuestros servicios integrales en:
          </p>     
        </div>
  </div>
</section>

<section class="cards">
  
        <div class="container-cards">
          <div class="card">
              <div class="face front">
                  <img src="./img/card1.png" alt="a">
              </div>
              <div class="face back">
                  <h3>DIGITALIZACIÓN</h3>
                  <p>
                    ...de mas de 150 000 documentos,
                    el proceso consistió en escanear las hojas
                    (documentos físicos) y digitar la
                     información importante sobre un 
                     Sistema de Información.
                    </p>
                  <div class="link">
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="face front">
                  <img src="./img/card2.png" alt="a">
              </div>
              <div class="face back">
                  <h3>DESARROLLO</h3>
                  <p>
                  ...de un Sistema Integral <br> de Gestión de 
                  Recursos Humanos, con los modulos; Gestión 
                  de Usuarios y Perfiles, Legajo Digital, 
                  Gestión de Documentos, Gestión de Trámites, 
                  Gestión Web, Gestión de Asistencia.
                  </p>
                  <div class="link">
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="face front">
                  <img src="./img/card3.png" alt="a">
              </div>
              <div class="face back">
                  <h3>Proyecto 3</h3>
                  <p>Lorem ipsum dolor sit, amet consectetur 
                  adipisicing elit. Aliquid ut consectetur
                  quia sunt libero accusamus? Vero sequi 
                  ea nulla perspiciatis eos assumenda neque 
                  et error?</p>
                  <div class="link">
                  </div>
              </div>
          </div>
      </div> 
      <div class="card-link">
        <a href="#" class="btn-servicios">Ver más</a>
      </div>
</section>

<div class="linea-container">
<hr class="linea">
</div> 


<!------------------------  NOSOTROS  --------------------->
<section class="Nosotros">
  <div class="container-us">
    <div class="row-us">
      <div class="content-us">
          <h1>Sobre Nosotros</h1> <br>
          <h2>¿Quiénes Somos?</h2> <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. Felis eget
            nunc lobortis mattis aliquam faucibus purus in massa. A diam sollicitudin tempor id eu nisl nunc mi. </p>
            <br>
          <div class="card-link">
            <a href="#" class="btn-servicios">Ver más</a>
          </div>
      </div>
    </div>
    <div class="img-us">
      <img src="./img/About-Us.png" alt="us">
    </div>
  </div>
</section>

<div class="linea-container">
  <hr class="linea">
</div> 


<!------------------------  TESTIMONIOS  --------------------->
  <section class="about">
    <div class="about-container">
          <h1 class="heading">Testimonios</h1>
          <br>
          <div class="content">
            <p>A la gente le encanta lo que hacemos y queremos hacértelo saber.</p>     
          </div>
    </div>
  </section>

  <section class="review" id="review">
    <div class="swiper-container review-slider">
  
        <div class="swiper-wrapper">
  
            <div class="swiper-slide slide">             
                <div class="user">

                    <img src="img/pic-1.png" alt="">

                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>
            <div class="swiper-slide slide">             
              <div class="user">
                  <img src="img/pic-2.png" alt="">
                  <div class="user-info">
                      <h3>john deo</h3>
                      <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                      </div>
                  </div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
          </div>
          <div class="swiper-slide slide">             
            <div class="user">
                <img src="img/pic-3.png" alt="">
                <div class="user-info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
          </div>
          <div class="swiper-slide slide">             
            <div class="user">
                <img src="img/pic-4.png" alt="">
                <div class="user-info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
          </div>
        </div>
    </div> 
  </section>

<div class="linea-container">
  <hr class="linea">
</div> 


<!------------------------  ESTADÍSTICAS  --------------------->
<section class="estadisticas">
  <div class="tabla-est">
    <div class="container-est">
          <div class="row1">
                <div class="img-est">
                  <img src="./img/estadisticas.png" alt="a">
                </div>
                <div class="info-est">
                  <h1>¿Qué hemos logrado  con nuestros clientes?</h1>
                  <p>Wow this project is so awesome! Let me tell you why right here, right now.</p>
                  <a href="#" class="btn">Contáctenos</a>
                </div>
          </div>
          <div class="row2">
                <div class="est">
                  <h1>337</h1>
                  <p>Clientes satisfechos con nuestro servicio digital</p>
                </div>
                <hr>
                <div class="est">
                  <h1>40</h1>
                  <p>Nuevos Clientes este año</p>
                </div>
                <hr>
                <div class="est">
                  <h1>27%</h1>
                  <p>De incremento de facturación anual</p>
                </div>
          </div>
    </div>
  </div>
</section>


<!------------------------  FOOTER  --------------------->
<?php
  include './includes/templates/footer.php';
?>
