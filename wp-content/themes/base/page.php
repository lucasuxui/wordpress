<?php get_header();?>
<div class="container">
<?php if (have_posts()) : the_post();  ?>
  <?php
  $slug = basename(get_permalink());
  ?>
    <?php if(is_page($slug)) : ?>
        <?php get_template_part("template-parts/component", $slug)?>
    <?php else :
       get_template_part('404.php');
    endif;
    ?>
<?php endif; ?>
</div>
<?php get_footer();?>
