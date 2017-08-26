<?php get_header(); ?>
	
	<?php while (have_posts()) : the_post();  ?>
	
		<h1>clases.php</h1>
	
    <header class="intro-header"  style="background: url('<?php echo get_field('clases_slider') ?>') no-repeat center center;" >
      <div class="container">
        
        <div class="intro-message">         
          <?php echo get_field('clases_texto_enriquecido') ?>
        </div>
      </div>
    </header>    <!-- article -->

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <section class="content-section-a">
        
        <div class="container">
          <div class="row">
            <div class="col-lg-12 ml-auto center">
              <?php the_content(); ?>
            </div>
          </div>

        </div>
        <!-- /.container -->
      </section> 
			
			<?php $seccion1 = get_field('seccion1') ?>	    
	    <section id="recent-works">
	      <div class="row img-init-sq sq">
	        <div class="col-md-6 sq-15" style="padding-right: 0px;padding-left: 0px;">
	          <img class="img-init-sq" ng-src="<?php echo $seccion1['fondo'] ?>" src="<?php echo $seccion1['fondo'] ?>">
	          <div class="se wow fadeInDown animated c-withe" style="visibility: visible; animation-name: fadeInDown;">
	            <img src="<?php echo $seccion1['imagen_pequena'] ?>"><br><br>
	            <a class="se-text1 ng-binding c-withe">Lorem</a>
	            <div class="col-md-11 se-text2 ng-binding"><?php echo $seccion1['textarea'] ?></div>
	            <br>
	            <a href="<?php echo $seccion1['link_boton'] ?>" class="btn btn-outline-secondary btn-sc-out"><?php echo $seccion1['texto_boton'] ?></a>
	          </div>
	        </div>
	        <div class="col-md-6 sq-15" style="padding-right: 0px;padding-left: 0px;">
	          <img class="img-init-sq" ng-src="<?php echo $seccion1['imagen_grande'] ?>" src="<?php echo $seccion1['imagen_grande'] ?>">
	        </div>
	      </div> 
	    </section> 
			
			<?php $seccion2 = get_field('seccion2') ?>
			<section class="content-section-b s-b-3">
        <a href="<?php echo $seccion2['link'] ?>">
        	<img src="<?php echo $seccion2['slider'] ?>" alt="">
        </a>
    	</section>      

    </article>
    <!-- /article -->

  <?php endwhile; ?>
<?php get_footer(); ?>
