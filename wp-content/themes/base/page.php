<?php get_header();?>

    <h1>Page.php substitui a front-page aqui.</h1>
    <p>Exemplos: Sobre,Contato...</p>

     <?php 
        //Pesquisa por slug
          $pgSearch = new WP_Query('pagename=sobre');
          while ( $pgSearch -> have_posts() ) : $pgSearch-> the_post(); //Procura a página 'sobre'
    ?>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content();?></p>

    <?php endwhile; ?>

<?php get_footer();?>