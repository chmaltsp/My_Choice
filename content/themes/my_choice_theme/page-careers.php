<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<!--  <?php get_template_part('templates/content', 'page'); ?>-->


<div class="row last">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2><?php the_field('employment_opportunities_headline'); ?></h2>
        <?php the_field('employment_opportunities_description'); ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2><?php the_field('how_to_apply_headline'); ?></h2>
        <?php the_field('how_to_apply_description'); ?>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2><?php the_field('who_we_hire_headline'); ?></h2>
        <?php the_field('who_we_hire_description'); ?>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <h2><? the_field('employment_benefits_headline'); ?></h2>
        <?php the_field('employment_benefits_description'); ?>

    </div>
</div>
<?php endwhile; ?>
