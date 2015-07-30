<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'templates/page', 'header'); ?>
    <?php get_template_part( 'templates/content', 'page'); ?>
      <?php endwhile; ?>
        <?php while (have_posts()) : the_post(); ?>
      <section>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h3><?php the_field('history_headline'); ?></h3>
            <?php the_field('history_description'); ?>
          </div>
          <div class="col-xs-12 col-sm-6">
            <br/>
            <br/>
            <br/>
            <img class="img-responsive img-rounded" src="/content/themes/my_choice_theme/assets/images/iStock_000062784220_Double.jpg" alt="Our Philosophy" />
            <p>
              <a href="<?php echo get_page_link(92); ?>"><h4>Read More</h4></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h3><a id="philosophy"></a>Philosophy, Values, Missions</h3>
          </div>

          <div class="col-xs-12 col-sm-7 border-right">
            <h4 class="lightblue"><?php the_field('values_headline'); ?></h4>
            <?php the_field('values_text'); ?>

          </div>
          <div class="col-xs-12 col-sm-5">
            <h4 class="lightblue"><?php the_field('philosophy_headline'); ?></h4>
            <?php the_field('philosophy_text'); ?>
            <h4 class="lightblue"><?php the_field('mission_healine'); ?> </h4>
            <?php the_field('mission_text'); ?>
          </div>
        </section>
          <section id="leadership">
              <div class="col-xs-12">
                <h3>Leadership</h3>
              </div>
 <?php if( have_rows('leadership') ): ?>
    <?php while ( have_rows('leadership') ) : the_row(); ?>
     <div class="row">

        <div class="col-xs-12 col-sm-2"><img class="img-circle aligncenter" src="<?php the_sub_field('headshot'); ?>" alt="<?php the_sub_field('name'); ?>" width="150" height="150" />
        </div>
        <div class="col-xs-12 col-sm-10">
          <h4 class="lightblue"><?php the_sub_field('name'); ?> -- <?php the_sub_field('title'); ?></h4>
          <p><?php the_sub_field('bio'); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
            </section>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h3><?php the_field('governing_board_headline'); ?></h3>
                <?php the_field('governing_board_text') ?>
              <p><a href="<?php echo get_page_link(94) ?>">More Details</a></p>


            </div>
            <div class="col-xs-12 col-sm-6">
              <h3>Schedule</h3>
              <?php echo do_shortcode('[my_calendar]'); ?>
            </div>
          </div>

              <?php endwhile; ?>
