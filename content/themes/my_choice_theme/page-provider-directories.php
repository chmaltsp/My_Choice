<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<div class="row">
  <div class="col-xs-12">
    <?php the_field('provider_directory_text'); ?>
  </div>

</div>
<?php if ( have_rows('provider_directories') ): ?>
    <?php while ( have_rows('provider_directories') ) : the_row(); ?>

    <div class="row">
    <a href="<?php the_sub_field('file_download'); ?>"><h3><?php the_sub_field('name_of_county'); ?></h3></a>
    </div>

<?php endwhile; ?>
<?php endif; ?>

<?php endwhile; ?>
