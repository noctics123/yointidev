<?php
    require './includes/funciones.php';
    incluirTemplate('header');
?>
<head>
    <link rel='stylesheet' href='./css/contacto.css'>
</head>

       <section>
            <h1>aaaaaa</h1>
            <h1>aaaaaa</h1>
       </section> 

       <div class="fff">
        <div class="content">
            <h1 class="logo">Contáctanos</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h3 class="cont-1">INICIA LA</h3>
                    <h3 class="cont-1">EXPERIENCIA INTI</h3>
                    <form action="" class="letras-1">
                        <p>
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" name="nombre" id="nombre" required>
                        </p>
                        <p>
                            <label>Correo Electrónico</label>
                            <input type="email" name="correo" required>
                        </p>
                        <p>
                            <label>Teléfono</label>
                            <input type="tel" name="telefono"
                            required>
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="asunto">
                        </p>
                        <p class="block">
                            <label>Mensaje</label>
                            <textarea name="message" rows="3" required></textarea>
                        </p>
                        <p class="block">
                            <button type="submit">
                                Enviar
                            </button>
                        </p>
                    </form>

                </div>
                <div class="contact-info">
                    <h4>Más Información</h4>
                    <ul>
                        <li><i class="fas fa-map-marked-alt"> San Miguel , Lima </i></li>
                        <li><i class="fas fa-mobile-alt"></i> 987654321</li>
                        <li><i class="fas fa-envelope"></i> yointi2022@gmail.com</li>
                    </ul>
                    <ul>
                        <li><i class="fab fa-facebook-square"></i> yointi</li>
                        <li><i class="fab fa-instagram"></i> yo.in.ti</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Aliquid tempore quia in
                        eos alias eum commodi quisquam, ratione 
                        expedita culpa sint iure, praesentium, 
                        odit earum?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6000199634736!2d-77.09669350607507!3d-12.07101794746172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c99161a69459%3A0xf70819f4c9903e4a!2sPrecursores%205%20%7C%20B%C3%A9lgica%20Edificaciones!5e0!3m2!1ses-419!2spe!4v1662789396547!5m2!1ses-419!2spe" 
        width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- FOOTER -->
<?php
    incluirTemplate('footer');
?>  