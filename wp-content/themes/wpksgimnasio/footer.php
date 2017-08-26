    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
          </div>  
          <div class="col-md-6">
            <ul class="list-inline">
              <?php 
                $menu_locations = get_nav_menu_locations(); // se obtienen las ubicaciones                                      
                $menu_id = $menu_locations['footer-menu']; // se obtiene el ID de las ubicaciones
                $primary_nav = wp_get_nav_menu_items($menu_id); // se objtiene el objeto de los items
              ?>

              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                  
                </ul>
              </div>
              <?php foreach ($primary_nav as $key): ?>  
                <li class="list-inline-item">
                  <a class="c-withe" href="<?php echo $key->url ?>"><?php echo $key->title ?></a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
              <?php endforeach;  ?>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="col-md-12 icon-red-footer">
              <a href="<?php echo get_field('facebook', 'option') ?>" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="<?php echo get_field('twitter', 'option') ?>" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="<?php echo get_field('skype', 'option') ?>" target="_blank">
                <i class="fa fa-skype" aria-hidden="true"></i>
              </a>
              <a href="<?php echo get_field('linkeind', 'option') ?>" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              
            </div>
            <div class="col-md-12 pd-b-15">
                <img src="<?php echo get_template_directory_uri()?>/img/app-store-badge.svg">
            </div>
            <div class="col-md-12 pd-b-15">
              <img src="<?php echo get_template_directory_uri()?>/img/google-play-badge.svg">
            </div>
          </div>
        </div>
        <div>
          
        </div>
        
        <p class="copyright text-muted small">Copyright &copy; Your Company <?php echo date('Y'); ?>. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo get_template_directory_uri()?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/vendor/popper/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/vendor/bootstrap/js/bootstrap.min.js"></script>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

  </body>

</html>
