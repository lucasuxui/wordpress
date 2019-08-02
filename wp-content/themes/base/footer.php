
    <!-- Footer -->
    <footer class="footer font-small blue pt-4">
    <?php if(have_rows('footer', 'option')): the_row();?>    
      <!-- Footer Links -->
      <div class="container text-center text-md-left">
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-12 mt-md-0 mt-3">

              <!-- Content -->
              <?php $logo = get_sub_field('logo-footer');?>
              <?php if($logo):?>
                <a href="<?= WP_HOME; ?>" class="footer-logo">
                  <?php
                    echo '<img src="' . $logo['url'] . '" width="' . $logo['width'] . '" height="' . $logo['height'] . '" title="' . get_bloginfo('title') . ' - ' . get_bloginfo('description') . '" alt="' . get_bloginfo('title') . '" />';
                  ?>
                </a>
              <?php else: ?>
                <a href="<?= WP_HOME; ?>" class="navbar-brand logo"><?= bloginfo('name')?></a>
              <?php endif;?>  
              <?php if(get_sub_field('telefone') || get_sub_field('email')):?>
                <ul class="footer-list my-3">          
                  <?php if(get_sub_field('telefone')) : $var = get_sub_field_object('telefone') ?>
                    <li><?= $var['value']; ?></li>
                  <?php endif;?>  
                  <?php if(get_sub_field('email')) : $var = get_sub_field_object('email') ?>
                    <li><?= $var['value']; ?></li>
                  <?php endif;?>  
                </ul>
              <?php endif;?>
              </div>
          </div>
          <div class="row">
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="font-weight-bold">Links Rápidos</h5>

              <?php
           		wp_nav_menu( array(
           			'theme_location'    => 'primary',
           			'depth'             => 2,
           			'menu_class'        => 'list-unstyled footer-menu',
           			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
           			'walker'            => new WP_Bootstrap_Navwalker(),
           		) );
           		?>

            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="font-weight-bold">Contate-nos</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="font-weight-bold">Soluções</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->
            <?php if(get_sub_field('endereco')) : $var = get_sub_field_object('endereco'); ?>
            <!-- Grid column -->            
            <div class="col-md-6 mb-md-0 mb-3">
              <!-- Links -->                              
              <div class="col-md-8 px-0 float-md-right">
                <h5 class="h3 font-weight-bold">Endereço</h5>
                <address><?= $var['value']; ?></address>
              </div>
              <!-- Links -->                
            </div>
            <!-- Grid column -->
            <?php endif;?>
          </div>
          <hr>
          <div class="row">
            <!-- Copyright -->
            <div class="col-md-6 mb-3"> 
              <div class="footer-copyright">© <?php echo date("Y"); ?>
                <a href="http://tutanodigital.com.br/">Tutano Digital</a> - Todos os direitos reservados
              </div>
            </div>
            <!-- Copyright -->
            <?php if(have_rows('redes-sociais')):?>
              <div class="col-md-6 mb-3">
                <ul class="social-media float-md-right">
                <?php while(have_rows('redes-sociais')): the_row();?>
                  <?php if(get_sub_field('icone')) : $var = get_sub_field('icone'); ?>
                    <li><a href="<?php the_sub_field('link');?>" target="blank" alt="<?php the_sub_field('titulo');?>" title="<?php the_sub_field('titulo');?>"><?= file_get_contents($var['url']); ?></a></li>
                  <?php endif;?>  
                <?php endwhile;?>         
                </ul>                 
              </div>        
            <?php endif;?>
          </div>
      </div>
      <!-- Footer Links -->
      <?php endif;?>
      <a href="#" id="scroll" style="display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </footer>
    <!-- Footer -->
    
    <?php wp_footer(); ?>
    </body>
</html>
