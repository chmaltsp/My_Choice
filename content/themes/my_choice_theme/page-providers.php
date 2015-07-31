<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php endwhile; ?>
<div class="row">
    <div class="col-xs-12">
        <h3>Provider Network News</h3>
    </div>
    <?php query_posts( 'cat=5&showposts=4'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <p>
            <?php the_time( get_option( 'date_format' ) ); ?>
        </p>
        <p>
            <?php the_excerpt() ?>
        </p>
    </div>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    <?php while (have_posts()) : the_post(); ?>
    </div>
<div class="row">

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

    <a href="<?php the_field('portal_link'); ?>
  ">
      <div class="mc-btn" id="providerPortal">
        <img src="<?php echo  get_template_directory_uri() ?>/assets/images/btn_1.jpg" alt="Provider Portal" />
        <h3>Provider Portal</h3>
      </div>
    </a>

  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php the_field('provider_handbook');?>">
      <div class="mc-btn" id="providerHandbook">
        <img src="<?php echo  get_template_directory_uri() ?>//assets/images/btn_2.jpg" alt="Members" />
        <h3>Provider Handbook</h3>

      </div>
    </a>

  </div>
</div>
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php the_field('become_link'); ?>
  ">
      <div class="mc-btn" id="becomeProvider">
        <img src="<?php echo  get_template_directory_uri() ?>/assets/images/btn_3.jpg" alt="becomeProvider" />
        <h3>Become a Provider</h3>

      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php the_field('provider_training'); ?>">
      <div class="mc-btn" id="providerTraining">
        <img src="<?php echo  get_template_directory_uri() ?>//assets/images/btn_4.jpg" alt="Members" />
        <h3>Provider Training</h3>

      </div>
    </a>

  </div>
</div>
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php the_field('contracts_rep'); ?>
  ">
      <div class="mc-btn" id="contractRep">
        <img src="<?php echo  get_template_directory_uri() ?>/assets/images/btn_5.jpg" alt="Your Contract Representative" />
        <h3>Your Contracts Representative</h3>

      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php the_field('faq_link'); ?>">
      <div class="mc-btn" id="faq">
        <img src="<?php echo  get_template_directory_uri() ?>/assets/images/btn_6.jpg" alt="Members" />
        <h3>Frequently Asked Questions</h3>

      </div>
    </a>

  </div>
</div>


</div>
  <?php endwhile; ?>
