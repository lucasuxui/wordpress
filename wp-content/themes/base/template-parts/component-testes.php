<?php
if(is_page() && !is_admin()):
  $args = array(
  'post_type' => 'teste',
  );
?>
<div class="container">
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="row">
    <?php $inner_query = new WP_Query($args); ?>
    <?php if($inner_query->have_posts()): while($inner_query->have_posts()): $inner_query->the_post(); ?>
      <?php
        $imgURL = get_the_post_thumbnail_url('full');
       ?>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="<?php echo $imgURL ? $imgURL : WP_HOME.'/dist/images/example.jpg'; ?>" alt="<?php the_title(); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
    <?php endwhile; endif;?>
  </div>
</div>
<?php endif; ?>
