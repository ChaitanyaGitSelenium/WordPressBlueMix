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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('MYSQL_DATABASE', $service['credentials']['name']);

/** MySQL database username */
define('MYSQL_USER', $service['credentials']['username']);

/** MySQL database password */
define('MYSQL_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lYO3CMS*9AQU_GfU=xx2q>g>C-Tpq]u#y8]T.%KL_(neq/E9l:7Eg7lP~6f|h(mD');
define('SECURE_AUTH_KEY',  'MxWb+*6y4q~s7HQ-VwdU1:{%uvucW|ETy&42<PIcSueEV=fR~1e8|)kdLJqV1K;h');
define('LOGGED_IN_KEY',    'coCnm6/Qq_lejw-+lfG.-BrQSrZlCc`M5P<uGdVJRY.I)y=:2KF]0N FJwsB/~~r');
define('NONCE_KEY',        'K+fcaGHgY``7~~7wJ]j7T9>m&e% A!]C&w?Mb6-n6.lEg$YZx<7H:>Jq*gXzRkMu');
define('AUTH_SALT',        '.$P0Hd.*lGn>*%$!r}E+uXt,]k*Vm#!%-;>mlxY}XSCsVRIIHM|B|)+DqRH5-4y0');
define('SECURE_AUTH_SALT', 'X[[KrM+3vQ3U)DIPx|2>L 54he!>P[h2mP{@_=Rkd8XP#7qXN69%uluM}w+>T-|.');
define('LOGGED_IN_SALT',   'FC:h8i~gr+/!v5lKV E,B>hG7-MAhGAA?Ft!|4L(Ip{}QG-NfE,TD@|`>5<|N#gh');
define('NONCE_SALT',       'b,S(SikyPT-S+]:}iLJM8&{=eS)1i%a+[(7w_1f.9WSIU_< yapMQ2[|(4`e^<H=');
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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
