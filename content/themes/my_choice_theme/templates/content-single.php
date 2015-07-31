<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row">
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
      </div>
    <div class="row">
        <div class="entry-content">

        <div class="col-xs-12 blog-img">

          <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail( 'large' );
}
?>
</div>
<div class="col-xs-12 blog-post">
      <?php the_content(); ?>

    </div>
    </div>
  </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
