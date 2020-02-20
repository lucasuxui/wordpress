<?php //Banner da Single ?>
<section id="<?= $slug;?>" class="banner-single"
    <?php if(has_post_thumbnail()):?>
        style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); //Imagem Selecionada no WP ?>')"
    <?php elseif(!has_post_thumbnail()):?>
        style="background-image: url('<?= WP_IMAGES.'/bg-single.png' //Imagem padrão ?>')"
    <?php endif; ?>
    >
    <div class="container">
      <div class="row">
        <div class="box-text col-md-6">
          <div class="title"><?php the_title(); ?></div>
        </div>
      </div>
    </div>
</section>
<?php //End Banner da Single ?>

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