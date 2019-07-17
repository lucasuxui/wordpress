<?php get_header(); ?>

<div class="container">

    <div class="jumbotron">
      <h1 class="display-4">Olá sou index.php. Sou a home.</h1>
      <p class="lead">Este tema possui Bootstrap 4.1.3 e Font Awesome 5.9</p>
      <hr class="my-4">
      <p>Lembre-se que estes textos são de exemplo, todos os textos tem que ser gerenciáveis pelo painel do <a href="<?php echo WP_HOME?>/wp-admin" >WordPress</a></p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">É isso</a>
      </p>
    </div>
    <?php dynamic_sidebar('home'); ?>
</div>

<?php get_footer(); ?>
