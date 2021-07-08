<footer class="site-footer">
        <div class="contenedor">
            <div class="col-footer footer-info">
                <h3>Sobre <span>GdlWebCam</span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis aliquid qui dolorem? Assumenda, obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum architecto unde, ducimus fugit enim?
                </p>
            </div>
            <div class="col-footer footer-tweets">
                <h3>Últimos <span>Tweets</span></h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, accusantium.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quia.</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, sint?</li>
                </ul>
            </div>
            <div class="col-footer footer-menu">
                <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>
        <p class="copyright">Todos los derechos reservados GDLWEBCAMP 2021</p>
    </footer>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.lettering.js"></script>

    <!--este bloque ejecuta el script según la página actual-->
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<script src="js/map.js" ></script>';
        echo '<script src="js/jquery.colorbox-min.js"></script>';
      } else if($pagina == 'conferencia'){
        echo '<script src="js/lightbox.js"></script>';
      };
    ?>
    <!--este bloque ejecuta el script según la página actual-->



    <script src="js/jquery.animateNumber.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>

    <!--MAILCHIMP-->
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/9cb21c77d4e3c5273402304f0/b19ee65561777712a9b72211c.js");</script>
    <!--MAILCHIMP-->
</body>

</html>
