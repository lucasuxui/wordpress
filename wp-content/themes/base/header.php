<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Tutano Digital, contato@tutanodigital.com.br"/>
    <meta name="copyright" content="Tutano Digital">
    <meta name="theme-color" content="#fafafa">
    <title><?= bloginfo('name')?> - <?php is_front_page() ? bloginfo("description") : the_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
           <div class="container">
         	<!-- Brand and toggle get grouped for better mobile display -->
         	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
         		<span class="navbar-toggler-icon"></span>
         	</button>
         	<a class="navbar-brand" href="#">Navbar</a>
          <a href="#"></a>Olá amigos, sou header.php.
         		<?php
         		wp_nav_menu( array(
         			'theme_location'    => 'primary',
         			'depth'             => 2,
         			'container'         => 'div',
         			'container_class'   => 'collapse navbar-collapse',
         			'container_id'      => 'bs-example-navbar-collapse-1',
         			'menu_class'        => 'nav navbar-nav',
         			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
         			'walker'            => new WP_Bootstrap_Navwalker(),
         		) );
         		?>
         	</div>
         </nav>
    </header>
