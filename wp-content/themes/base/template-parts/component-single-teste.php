<div class="container">
  <div class="row my-3">
    <div class="col-md-6">
      <h2><?php the_title();?></h2>
      <?php the_content();?>
    </div>
    <div class="col-md-6">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid responsive--full']);?>
    </div>
  </div>
</div>
