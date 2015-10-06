<header>
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-xs-6 col-sm-3 col-lg-3 col-md-3">
                <a href="<?= esc_url(home_url('/')); ?>" ><img class="logo img-responsive" src="<?php header_image(); ?>" alt="My Choice Family Care" /> </a>
            </div>

            <div class="hidden-xs col-xs-4 col-xs-offset-1  col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-5 col-lg-3 col-lg-offset-6 social vcenter">
                <a href="<?php the_field('facebook_page', 'option'); ?>" target="_blank"><img class="social-btn" src="../content/themes/my_choice_theme/assets/images/fb.png" alt="Like us on Facebook" />
                </a>
                <a href="<?php the_field('twitter_page', 'option'); ?>" target="_blank"><img class="social-btn" src="../content/themes/my_choice_theme/assets/images/twitter.png" alt="Follow us onTwitter" />
                </a>
                <a href="<?php the_field('linkedin_page', 'option'); ?>" target="_blank"> <img class="social-btn" src="../content/themes/my_choice_theme/assets/images/linkedin.png" alt="Find us on LinkedIn" />
                </a>
                <a href="<?php the_field('pinterest_page', 'option'); ?>" target="_blank"> <img class="social-btn" src="../content/themes/my_choice_theme/assets/images/pinterest.png" alt="Find us on Pintrest" />
                </a>
                <a href="<?php the_field('youtube_page', 'option'); ?>" target="_blank"> <img class="social-btn" src="../content/themes/my_choice_theme/assets/images/youtube.png" alt="Find us on Youtube" />
                </a>
            </div>

        </div>
    </div>
    <div class="banner navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <nav class="collapse navbar-collapse" role="navigation">
                <?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=> 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']); endif; ?>
                  <div class="hidden-sm pull-right">

                <?php get_search_form(); ?>  </div>
            </nav>
        </div>
    </div>
    <?php if ( is_page('about-us') ) : ?>

    <div id="about-us-subnav" class="subnav">
      <div class="container">
                    <nav class="collapse navbar-collapse" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'about-us-submenu', 'container_class' => 'subnav' ) ); ?>
      </nav>
          </div>
    </div>
      <?php endif; ?>
      <?php if ( is_page('members') ) : ?>

      <div id="members-subnav" class="subnav">
        <div class="container">
                      <nav class="collapse navbar-collapse" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'members-submenu', 'container_class' => 'subnav' ) ); ?>
        </nav>
            </div>
      </div>
        <?php endif; ?>

</header>
