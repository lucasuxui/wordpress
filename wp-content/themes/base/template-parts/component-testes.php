<?php
  $args = array(
  'post_type' => 'teste',
  );
  query_posts($args); 
?>
  <div class="card">
    <h1><?php echo the_title(); ?></h1>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a>
    <?php endwhile; endif;?>
  </div>
<?php  wp_reset_query();?>
