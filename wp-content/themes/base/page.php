<?php get_header();?>

<?php $slug = basename(get_permalink()); // echo $slug;?>
<?php while (have_posts()) : the_post();  ?>
    <?php if(is_page($slug)) : ?>
        <?php get_template_part("template-parts/component", $slug)?>
    <?php endif; ?>
<?php endwhile; ?>

<?php get_footer();?>
