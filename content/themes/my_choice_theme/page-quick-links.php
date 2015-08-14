<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php $i = 0; ?>
<div class="row">
<?php if( have_rows('links') ): ?>
<?php while( have_rows('links')) : the_row(); ?>
<?php $i++; ?>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="list-group">
<h4 class="list-group-item-heading"><?php the_sub_field('title'); ?></h4>
<a class="list-group-item-text" href="<?php the_sub_field('organization_link'); ?>" target="_blank"><?php the_sub_field('organization_link'); ?></a>
<?php the_sub_field('organization_description'); ?>
</div>
</div>
<?php if($i % 2 == 0): ?>
</div><div class="row">
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
<?php endwhile; ?>
