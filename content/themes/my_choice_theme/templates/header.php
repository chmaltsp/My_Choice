<header>
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-xs-6 col-sm-3 col-lg-3 col-md-3">
                <a href="<?= esc_url(home_url('/')); ?>" ><img class="logo img-responsive" src="<?php header_image(); ?>" alt="My Choice Family Care" /> </a>
            </div>
            <div class="hidden-xs col-xs-4 col-xs-offset-1  col-sm-3 col-sm-offset-6 col-md-3 col-md-offset-6 col-lg-2 col-lg-offset-6 social vcenter">
                <a href="#"><img class="social-btn" src="../content/themes/my_choice_theme/assets/images/fb.png" alt="Like us on Facebook" />
                </a>
                <a href="#"><img class="social-btn" src="../content/themes/my_choice_theme/assets/images/twitter.png" alt="Follow us onTwitter" />
                </a>
                <a href="#"> <img class="social-btn" src="../content/themes/my_choice_theme/assets/images/linkedin.png" alt="Find us on LinkedIn" />
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
            </nav>
        </div>
    </div>
</header>