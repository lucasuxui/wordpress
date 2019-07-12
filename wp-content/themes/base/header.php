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
    Olá amigos, sou header.php.
    <a href="<?php echo get_home_url(); ?>">Home</a>
    |<!-- Id do post Ola mundo (Pega no wp) -->
    <a href="<?php the_permalink(2);?>">Link de página interna (page.php)</a>
    </header>
