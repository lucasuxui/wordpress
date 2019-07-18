<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args = array(
  'post_type' => 'teste',
  'posts_per_page' => 6,
  'paged' => $paged,
  'order' => 'DESC'
  );
?>
<div class="container">
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="row">
    <?php $wp_query = new WP_Query($args); ?>
    <?php if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
      <div class="col-md-4 mb-4">
        <div class="card">
            <?php !empty(the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid responsive--full'])) ?
            the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid responsive--full']) : 'nope';?>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
            <a href="<?php the_permalink(); ?>">Ver mais</a>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
    <?php endwhile; endif;?>
    <div class="col-md-12">
      <nav class="paginate-nav">
          <?php bootstrap_pagination(); ?>
      </nav>
    </div>
  </div>
</div>
