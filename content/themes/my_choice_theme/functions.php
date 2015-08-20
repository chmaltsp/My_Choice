<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
  'lib/wp_bootstrap_navwalker.php' //Bootstrap nav Walker
];
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array (
      'page_title' => 'Theme Options',
      'menu_itle' => 'Theme Options',
      'menu_slug' =>  'theme-options'
));

}

// Get Relevanssi to display excerpts from your custom fields
add_filter('relevanssi_excerpt_content', 'excerpt_function', 10, 3); function excerpt_function($content, $post, $query) {

global $wpdb; $fields = $wpdb->get_col("SELECT DISTINCT(meta_key) FROM $wpdb->postmeta");

foreach($fields as $key => $field){ $field_value = get_post_meta($post->ID, $field, TRUE); $content .= ' ' . ( is_array($field_value) ? implode(' ', $field_value) : $field_value ); }

// Remove random terms from showing in the search. These are related to the names of the ACF field names
$wordlist = array('acf_id_1', 'acf_id_2', 'acf_id_3', 'acf_id_4');
foreach ($wordlist as &$word) {
    $word = '/\b' . preg_quote($word, '/') . '\b/';
}

$content = preg_replace($wordlist, '', $content);

// The excerpt ready with bits removed from it
return $content; }

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
