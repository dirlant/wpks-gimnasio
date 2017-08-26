<?php get_header(); ?>

  <?php while (have_posts()) : the_post();  ?>
    

		<section class="content-section-a">
    
      <div class="container pd-t-25">
        <br><br>
        <div class="center">          
          <img src="<?php echo get_field('imagen') ?>">
        </div>
        <hr>
        <br>
        <div class="row">
        	<?php $informacion = get_field('informacion') ?>
          <?php for ($i=0; $i < count($informacion) ; $i++): ?>
	          <div class="col-md-4 mb-4 mb-md-0">
	            <div class="card h-100">
	              <div class="card-body text-center">
	                <i class="fa fa-3x <?php echo $informacion[$i]['icono'] ?>" aria-hidden="true"></i>
	                <br>
	                <br>
	                <span class="card-title m-0">
	                  <?php echo $informacion[$i]['texto_enriquecido'] ?>
	                </h5>
	                <span>
	              </div>
	            </div>
	          </div>
	        <?php endfor; ?>
        </div>
      </div>
      <!-- /.container -->
    </section>

    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_field('mapa') ?>" style="pointer-events: none;"></iframe>
      <br>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>

		<section class="content-section-a">
      <div class="container">
        <div class="row">
					<?php echo do_shortcode('[contact-form-7 id="119" title="Contact form 1"]'); ?>          
				</div>
      </div>
      <!-- /.container -->
    </section>


  <?php endwhile; ?>

<?php get_footer(); ?>
