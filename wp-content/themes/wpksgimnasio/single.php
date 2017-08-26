<?php get_header(); ?>
	

		    <!-- Page Content -->
		<?php while (have_posts()) : the_post();  ?>
    <section class="content-section-b" style="padding-bottom:  50px;">

      <div class="container pd-t-25" style="margin-top: 100px;">        
        <div class="row">
          <div class="col-md-4">
            <a href="#">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <div class="col-md-8">
            <h3><?php the_title(); ?></h3>
            <hr>
            <p><?php the_content(); ?></p>
          </div>
        </div>
        <br><br>
        
        <!--<div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">          
            <div class="row">

              <div class="col-md-4 text-center">
                <img class="rounded-circle img-fluid d-block mx-auto circle-sc" src="http://placehold.it/150x150" alt="">
              </div>
              <div class="col-md-4 text-center">
                <img class="rounded-circle img-fluid d-block mx-auto circle-sc" src="http://placehold.it/150x150" alt="">
              </div>
              <div class="col-md-4 text-center">
                <img class="rounded-circle img-fluid d-block mx-auto circle-sc" src="http://placehold.it/150x150" alt="">
              </div>
            </div>
          </div>
        </div>
        <br><br><br>

        -->
        <div class="row">
        	<?php $horario = get_field('horario') ?>
					<?php for ($i=0; $i < count($horario) ; $i++): ?>
	          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
	            <div class="card h-100">
	              <div class="card-body">
	                <br>
	                <h5 class="card-title center">
	                  <?php echo $horario[$i]['dia'] ?>
	                </h5>
	                <p class="center"><?php echo $horario[$i]['hora'] ?></p>
	                <h5 class="card-title center">
	                  SPEED 45
	                </h5>
	                <br>
	              </div>
	            </div>
	          </div>
	        <?php endfor; ?>          
        </div>
      </div>
      <!-- /.container -->
    </section>
		<?php endwhile; ?>	        

<?php get_footer(); ?>
