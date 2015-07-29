<div class="row">
  <div class="slider col-md-12 col-xs-12 col-sm-12 col-lg-9 col-centered">
    <?php echo do_shortcode( "[metaslider id=13]"); ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <h1>My Choice Family Care</h1>

    <p>Welcome to My Choice Family Care’s website – your direct connection to information about the Managed Care Organization and the Family Care Program. My Choice Family Care is your source for Long-Term Support You Can Trust! Since 2000, we have provided the Family Care program to over 21,720 people in Milwaukee County. Today, we serve over 8,300 members. We are committed to helping the people in our community remain as independent as possible.</p>
    <p> We believe that if you need long-term care services, you should be able to get them when you need them and at a place you choose. Our goal is to work with you to design a plan to provide you with cost-effective care that meets your outcomes. We are a financially strong organization that strives to ensure that our members receive services that are delivered the Right Way for each Person – at the Right Time– in the Right Place – for the Right Cost and for the Right Reasons. View the video below to see how My Choice Family Care works with you and your family to be creative and keep you as independent as possible.</p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php echo get_page_link(34) ?>
  ">
      <div class="mc-btn" id="members">
        <img src="<?php get_template_directory() ?>/assets/images/member_btn.jpg" alt="Members" />
        <h3>My Choice Members</h3>

      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <a href="<?php echo get_page_link(36) ?>">
      <div class="mc-btn" id="providers">
        <img src="<?php get_template_directory() ?>/assets/images/provider_btn.jpg" alt="Members" />
        <h3>My Choice Providers</h3>

      </div>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <h3>Enroll In My Choice</h3>
    <p>To be eligible for the Family Care program with the Milwaukee County Department of Family Care, a person must have long-term care service needs, be an older adult or an adult with a disability, live within our service area and meet financial eligibility requirements.</p>
    <p>
      If you or someone you know is interested in learning more about the Family Care program, the first step is to contact the appropriate resource center. Resource Centers provide information and assistance and help people apply for programs and benefits. They are available to help you, whether or not you decide to become a Family Care Member.</p>
    <p>Click on the map to the right to find a resource center in your county</p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-6">
    <h3>Find a resource center in your county</h3>
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
</div>
<div class="row last">
  <div class="col-xs-12">
    <a href="http://mychoice.localhost/content/uploads/2015/07/NOTICE-OF-PRIVACY-PRACTICES-2015-2.pdf" target="_blank"><h4>Notice of Privacy Practices</h4></a>

  </div>
</div>
</div>
