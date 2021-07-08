<?php include_once 'includes/templates/header.php';?>


    <section class="seccion contenedor">
        <h2 class="separador">La Mejor Conferencia de Diseño Web en español</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, vero ad impedit iure eaque qui commodi eveniet dolor voluptas fugiat, repellat dicta voluptatibus cum deleniti, ex in reprehenderit autem. Aut itaque exercitationem nihil quae in.
        </p>
    </section>
    <!--PROGRAMA-->
    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/webm">
              <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <!--CONTENIDO PROGRAMA-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2 class="separador">Programa del evento</h2>


                    <?php

                        try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql = " SELECT * FROM `categoria_evento` ";

                        $resultado = $conn->query($sql);
                      } catch (\Exception $e) {
                        echo $e->getMessage();
                      }

                    ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <a href="#<?php echo strtolower($cat['cat_evento']); ?>"><i class="fas <?php echo $cat['icono']; ?>"></i><?php echo $cat['cat_evento']; ?></a>
                        <?php } ?>
                    </nav>

                    <?php

                    try {
                      require_once('includes/funciones/bd_conexion.php');
                      $sql = " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.id_invitado ";
                      $sql .= " AND eventos.id_cat_evento = 1 ";
                      $sql .= " ORDER BY id_evento LIMIT 2; ";
                      $sql .= " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.id_invitado ";
                      $sql .= " AND eventos.id_cat_evento = 2 ";
                      $sql .= " ORDER BY id_evento LIMIT 2; ";
                      $sql .= " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.id_invitado ";
                      $sql .= " AND eventos.id_cat_evento = 3 ";
                      $sql .= " ORDER BY id_evento LIMIT 2; ";
                    } catch (\Exception $e) {
                      echo $e->getMessage();
                    }
                    ?>

                    <?php $conn->multi_query($sql); ?>

                    <?php
                    do {
                      $resultado = $conn->store_result();
                      $row = $resultado->fetch_all(MYSQLI_ASSOC);
                    ?>

                      <?php $i = 0; ?>
                      <?php foreach($row as $evento): ?>
                        <?php if($i % 2 == 0) { ?>
                            <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar">
                        <?php } ?>
                            <div class="detalle-evento">
                                <h3><?php echo $evento['nombre_evento']; ?></h3>
                                <p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                                <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
                                <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?> </p>
                            </div>
                        <?php if($i % 2 == 1): ?>
                                <div class="ver-todos">
                                    <a href="calendario.php" class="boton">Ver todos</a>
                                </div>
                          </div><!--INFO CURSO-->
                        <?php endif; ?>
                        <?php $i++; ?>
                        <?php endforeach; ?>

                        <?php $resultado->free(); ?>

                    <?php
                    } while ($conn->more_results() && $conn->next_result());
                    ?>

                    <?php $eventos = $resultado->fetch_assoc(); ?>


                </div> <!--PROGRAMA EVENTO-->
            </div>
        </div>
        <!--CONTENIDO PROGRAMA-->
    </section>
    <!--PROGRAMA-->

    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--RESUMEN GDLWEBCAMP-->
    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento">
                <li>
                    <p class="numero"></p>Invitados
                </li>
                <li>
                    <p class="numero"></p>Talleres
                </li>
                <li>
                    <p class="numero"></p>Días
                </li>
                <li>
                    <p class="numero"></p>Conferencias
                </li>
            </ul>
        </div>

    </div>
    <!--RESUMEN GDLWEBCAMP-->

    <!--PRECIOS-->
    <section class="precios seccion">
        <h2 class="separador">Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Catering</li>
                            <li><i class="fas fa-check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="" class="boton hollow">comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos <br> los días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Catering</li>
                            <li><i class="fas fa-check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="" class="boton">comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Catering</li>
                            <li><i class="fas fa-check"></i>Todas las conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los talleres</li>
                        </ul>
                        <a href="" class="boton hollow">comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--PRECIOS-->

    <!--MAPA-->
    <div id="mapa" class="mapa">
    <!--MAPA-->

    </div>
    <!--TESTIMONIALES-->
    <section class="seccion">
        <h2 class="separador">
            Testimoniales
        </h2>
        <div class="contenedor">
            <div class="testimoniales">
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores molestiae ex nostrum delectus velit eos? Quisquam inventore exercitationem reiciendis?</p>
                        <footer class="info-testimonial">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Osvaldo Salazar <span>Diseñador en @Prisma</span></cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores molestiae ex nostrum delectus velit eos? Quisquam inventore exercitationem reiciendis?</p>
                        <footer class="info-testimonial">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Osvaldo Salazar <span>Diseñador en @Prisma</span></cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="testimonial">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores molestiae ex nostrum delectus velit eos? Quisquam inventore exercitationem reiciendis?</p>
                        <footer class="info-testimonial">
                            <img src="img/testimonial.jpg" alt="imagen testimonial">
                            <cite>Osvaldo Salazar <span>Diseñador en @Prisma</span></cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!--TESTIMONIALES-->

    <!--NEWSLETTER-->
    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate al Newsletter</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="boton transparente">Resgistro</a>
        </div>
    </div>
    <!--NEWSLETTER-->


    <!--COUNTDOWN-->
    <section class="seccion">
        <h2 class="separador">Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul>
                <li>
                    <p id="dias" class="numero"></p>Días
                </li>
                <li>
                    <p id="horas" class="numero"></p>Horas
                </li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos
                </li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos
                </li>
            </ul>
        </div>
    </section>
    <!--COUNTDOWN-->

    <?php include_once 'includes/templates/footer.php'; ?>

