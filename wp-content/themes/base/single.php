<?php get_header();?>

<?php while (have_posts()) : the_post();  ?>
  <?php
  $post_type = get_post_type( get_the_ID() );
  //echo $post_type;
  ?>
    <?php if(is_singular($post_type)) : ?>      
        <?php get_template_part("template-parts/component", 'single-'.$post_type )?>
    <?php endif; ?>
<?php endwhile; ?>

<?php get_footer();?>
