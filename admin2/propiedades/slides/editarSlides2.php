<?php

  ob_start();
  require_once (realpath($_SERVER["DOCUMENT_ROOT"]). '/yointidev-main/includes/funciones2.php');
  incluirTemplateAdmin('header');
  ob_end_flush()
?>

          <!-- Herramientas -->
          <div class="c2">
            <div id="content" class="opciones-menu">

              <section>
                  <div class="container">
                      <div class="row">
                          <!-- Herramientas -->
                          <div class="col-lg-2 ">
                            <button type="button" class="btn btn-primary btn-lg btn-add">
                              <div>
                              <i class="fa-solid fa-file-circle-plus imgnewelement"></i> </div>
                              <div>Nuevo Slide </div>
                              
                            </button>
                          </div>
                          <div class="col-lg-4 ">
                            <button type="button" class="btn btn-primary btn-lg btn-save">
                              <div>
                                <i class="fa-solid fa-desktop imgnewelement"></i> </div>
                              <div>Guardar</div>
                            </button>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <input class="titulo" type="text" id="titulo" name="titulo" placeholder="Titulo ">
                        </td>
                        <td>
                            <textarea id="subtitulo" name="subtitulo" spellcheck="false" width="300px" placeholder="Subtitulo" ></textarea>
                        </td>
                        <td>
                            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                        </td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

