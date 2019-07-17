<?php
if(is_singular() && !is_admin()):
 ?>
<div class="container">
  <h2><?php the_title();?></h2>
  <?php the_content();?>
</div>
<?php
endif;
 ?>
