<?php get_header();?>

  <?php
  $slug = basename(get_permalink());
  $post_type = get_post_type( get_the_ID() );
  // echo $slug;
  // echo $post_type;
  ?>

  <?php if(have_posts()) : ?>
      <div class="bread-box">
        <div class="container">
          <?php wp_breadcrumbs(); ?>
        </div>
      </div>
      <?php while (have_posts()) : the_post(); ?>
        <?php if(is_page($slug)) : ?>
            <?php get_template_part("template-parts/component", $slug)?>
        <?php elseif (is_singular($post_type)) : ?>
            <?php get_template_part("template-parts/component", 'single-'.$post_type )?>
        <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
