<div class="row">
  <div class="slider col-md-12 col-xs-12 col-sm-12 col-lg-9 col-centered">
    <?php echo do_shortcode( "[metaslider id=13]"); ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <h1><?php the_field('my_choice_headline'); ?></h1>

  <?php the_field("my_choice_text"); ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php echo get_page_link(34) ?>
  ">
      <div class="mc-btn" id="members">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/member_btn.jpg" alt="Members" />
        <h3>Members</h3>

      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php echo get_page_link(36) ?>">
      <div class="mc-btn" id="providers">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/provider_btn.jpg" alt="Members" />
        <h3>Providers</h3>

      </div>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <h3><?php the_field('enroll_headline'); ?></h3>
    <?php the_field('enroll_text'); ?>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-6">
    <h3><?php the_field('find_a_resource_center_headline'); ?></h3>
    <div class="mapcontainer">
      <div class="map"></div>

    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <h2>News and Annoucements</h2>
  </div>
  <?php query_posts( 'cat=1&showposts=4'); ?>
  <?php if (have_posts() ) : while ( have_posts()) : the_post(); ?>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">

    <div class="postbox">

 <?php if ( ( function_exists( 'has_post_thumbnail') ) && ( has_post_thumbnail() ) ) { $post_thumbnail_id=get_post_thumbnail_id(); $post_thumbnail_url=wp_get_attachment_url( $post_thumbnail_id ); ?>
      <div class="postimg">
        <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" />
      </div>
<?php } ?>
 <h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h4>
      <p>
        <?php the_time( get_option( 'date_format' )); ?>
      </p>
      <p>
        <?php the_excerpt(); ?>
      </p>
      <a href="<?php the_permalink(); ?>">Read More...</a>
    </div>

  </div>
  <?php endwhile; ?>
  <?php endif; ?>
      <?php wp_reset_query(); ?>
</div>
<div class="row last">
  <div class="col-xs-12">
        <?php while (have_posts()) : the_post(); ?>
    <a href="<?php the_field('privacy_notice'); ?>"><h4>Notice of Privacy Practices</h4></a>
  <?php endwhile; ?>

  </div>
</div>
</div>
