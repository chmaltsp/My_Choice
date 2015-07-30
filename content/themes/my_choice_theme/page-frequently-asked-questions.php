<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<div class="row last">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 faq">
    <h2><?php the_field('faq_headline'); ?></h2>
    <?php if( have_rows('frequently_asked_questions') ): ?>
       <?php while ( have_rows('frequently_asked_questions') ) : the_row(); ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><?php the_sub_field('faq_question'); ?></h4>
      </div>
      <div class="panel panel-body">
      <?php the_sub_field('faq_answer'); ?>

      </div>
    </div>

          <?php endwhile; ?>
          <?php endif; ?>

  </div>


</div>
<?php endwhile; ?>
