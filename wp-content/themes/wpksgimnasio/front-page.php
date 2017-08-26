<?php get_header(); ?>

  <?php while (have_posts()) : the_post();  ?>
    <!-- Header -->
    <header class="intro-header"  style="background: url('<?php echo get_field('slider') ?>') no-repeat center center;" >
      <div class="container">
        
        <div class="intro-message">         
          <?php echo get_field('texto_enriquecido') ?>
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

    </article>
    <!-- /article -->

  <?php endwhile; ?>

<?php get_footer(); ?>



