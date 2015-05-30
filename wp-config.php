<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'my_choice');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MjTN]~xAhLy!E>6Y1kD7O4<(gFrk*&&c8_hTE:||=zF~ER-1a+!PzzU7Z7+VVO>Y');
define('SECURE_AUTH_KEY',  'J2~<&2WD 5n{-!gMoE$hb`.14{,c3S(Ye>hmS-S$ /:pS|<q2$9A7:dLcT~[HR8=');
define('LOGGED_IN_KEY',    '^s]K;iAv>3V|gheocp`} f-`R-(QK)Uc^`Zc&x+q;Z-@pIb5,</0[`(nH|K7X%,r');
define('NONCE_KEY',        'X9.I/QLnuurc6GUAQG+Rkkn`~-Xz#7$X|Y|NAZ&55b:-I>E|dnSwozcL;w}EX-%*');
define('AUTH_SALT',        '@lw9A]_Tpv9zsb`-+l*{Du?~L`g=gpd=b(HDgG*mh@L?FW^8PP3KOzD`3J(un)(b');
define('SECURE_AUTH_SALT', 'yt^XZh_]4?vzU|x[oguz9*<-H{Nd|v<~}oU))i|n57 =WZ|M5k&z|]m?Q>*#hQC@');
define('LOGGED_IN_SALT',   ':Q^&|P|kWV15|8kJRvY;/i5Q[X3tz,M8!<BH!q:5+g!M0w%||H1d+MxvbjX:,-$Z');
define('NONCE_SALT',       'd(yH{ <JUD+bL&uRyGVk|DWrSD|e1Cc`IN,^QFmJ}C*#_MyRuXDk F1nRyb*+dTx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}
define('WP_ENV', 'development');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
