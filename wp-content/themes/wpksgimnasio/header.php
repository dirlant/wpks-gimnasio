<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri()?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo get_template_directory_uri()?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri()?>/css/landing-page.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/css/style.css" rel="stylesheet">


		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>
  </head>

  <body>
		<!-- nav 
			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
		<!-- /nav -->

    <!-- Navigation -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-nav-SC fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
        	$menu_locations = get_nav_menu_locations(); // se obtienen las ubicaciones                                      
					$menu_id = $menu_locations['header-menu']; // se obtiene el ID de las ubicaciones
					$primary_nav = wp_get_nav_menu_items($menu_id); // se objtiene el objeto de los items
				?>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <?php foreach ($primary_nav as $key): ?>	
							<li class="nav-item">
	              <a class="nav-link" href="<?php echo $key->url ?>"><?php echo $key->title ?></a>
	            </li>	
						<?php endforeach;  ?>
          </ul>
        </div>
        
      </div>

      <?php 
        $menu_locations = get_nav_menu_locations(); // se obtienen las ubicaciones                                      
        $menu_id = $menu_locations['sidebar-menu']; // se obtiene el ID de las ubicaciones
        $primary_nav = wp_get_nav_menu_items($menu_id); // se objtiene el objeto de los items
      ?>
      <div class="f-xsmall navbar-2 collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <?php foreach ($primary_nav as $key): ?>  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $key->url ?>"><?php echo $key->title ?></a>
            </li> 
          <?php endforeach;  ?>
        </ul>
      </div>
    </nav>


