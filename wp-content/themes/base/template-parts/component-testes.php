<?php
  $args = array(
  'post_type' => 'teste',
  );
if(is_page()):
  $inner_query = new WP_Query($args);
?>
  <div class="container">
    <h1>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <?php if($inner_query->have_posts()): while($inner_query->have_posts()): $inner_query->the_post(); ?>
        <div class="card">
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" ><?php the_title(); ?></a>
          <article>
            <?php the_content(); ?>
          </article>
        </div>
    <?php endwhile; endif;?>
  </div>
<?php endif; ?>
