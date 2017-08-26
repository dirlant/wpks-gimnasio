<?php get_header(); ?>
	

		    <!-- Page Content -->
  <section class="content-section-b">
		<?php while (have_posts()) : the_post();  ?>

	    <div class="container pd-t-25" style="margin-top: 65px;">	    	
	      <h2 class="center"><?php the_title(); ?></h2>
	      <hr>
	      <br><br>  	
	    </div>
		<?php endwhile; ?>	      

	  <div class="container pd-t-25">
		
	    <div class="row">
				<?php $the_query = new WP_Query( 'cat=25' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					
					<?php 
						// Ruta de la imagen destacada (tamaño completo)
						global $post;
						$thumbID = get_post_thumbnail_id( $post->ID );
						$url_img = wp_get_attachment_url( $thumbID );			
					?>

	        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
	          <div class="card h-100">
	            <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo $url_img ?>" alt=""></a>
	            <div class="card-body">
	              <h4 class="card-title center">
	                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	              </h4>
	            </div>
	          </div>
	        </div>
				<?php endwhile; ?>
	    </div>
	  </div>

  	<?php while (have_posts()) : the_post();  ?>
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-12 ml-auto center">
	          <?php the_content(); ?>
	        </div>
	      </div>
	    </div>
		<?php endwhile; ?>

  </section>

  

<?php get_footer(); ?>
