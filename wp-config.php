<?php

//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/ptpncoid/public_html/assets/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define( 'WP_CONTENT_DIR', '/home/ptpncoid/public_html/assets' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://ptpn1.co.id/assets' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ptpncoid_wp37');

/** MySQL database username */
define('DB_USER', 'ptpncoid_wp37');

/** MySQL database password */
define('DB_PASSWORD', 'P0[M8wS7)3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Overwrite upload file path. */
define( 'UPLOADS', 'files' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mezbtk5q6wwjg1kuks2ehczery1lkb70vuvhwvgkuh0wlndqppuj9psmuztumncy');
define('SECURE_AUTH_KEY',  'vysjjjxwcq3kjisiayp7zzosbida5jpebnkftu4v3hwtbcuclafjytif8zryu9uu');
define('LOGGED_IN_KEY',    'jrfxfzy7vhld7won75cu3tx6zpbezymniaphxfsrklgjhlx5bq8mwob1tby7r8us');
define('NONCE_KEY',        'nsvmcrwcjw3chovrpncqtzkltjmujuqq9r4gfb6v1l6ntacb4ow4o5vqcpuwb6lq');
define('AUTH_SALT',        'bofu4vmqkmj9yqnhahic8ho0gcjxd5jrtptwepxt2jfwazhmcxqcamq83kf2ywov');
define('SECURE_AUTH_SALT', '3skonbaky8x4ggwotmrzhtss4zkkdlrwslehgjxkjs5xhhv0ukzfkljlkcwfddrd');
define('LOGGED_IN_SALT',   'dxqikcpsj1fsquxuktlojtvjccuyu98tsrk0omkbvpmqbpu4qzid8pyqnnsdvqrm');
define('NONCE_SALT',       't6ogkkfqmpzwf6nhzzxhp885o6eaf7f6poocwmhjxnxfh9cgys0ulikcrhyf9uvh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpod_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
