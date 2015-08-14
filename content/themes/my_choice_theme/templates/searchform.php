<!-- <form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'sage'); ?></button>
    </span>
  </div>
</form> -->
<form class="navbar-form" role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
		<div class="input-group">
			<input type="search" value="<?php get_search_query(); ?>" class="form-control" placeholder="Search" name="s" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i><?php _e('', 'sage'); ?></button>
			</div>
		</div>
		</form>
