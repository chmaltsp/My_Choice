<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<p>

<?php the_field('under_construction_text'); ?></p>
<?php endwhile; ?>
