<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'iuj}S.$yke;}2FDyhckB2aE*RtC#63EYIhAqtT%O6P#rQ5%r]Wbd:Lh_e[V3x|.w');
define('SECURE_AUTH_KEY',  'wHLM6m4oK!*.tnD,J%kdlGPuTFCzc]}Z1~ :*8[N(YAZY(UBO WM5Z&Lkx?3*<8:');
define('LOGGED_IN_KEY',    '|=@L!kCMC35[ng/Peg_y:ZB/A)b|R/2co%_<d~X39v)`c|L7OL{o[I7jJIAJ5cLm');
define('NONCE_KEY',        'j>C,S1Cwq~z=s&uIs!1BL/!%YUx(=1n/P%Wa0b@QwGVV>z9M DTNhtaPY&uVs(69');
define('AUTH_SALT',        '>SW=RI>=w1^/,R<k:{%gXMn#4vTY$vdMo~ED<v*5pUhP@IrjzW=u!=;d/;%I?h|3');
define('SECURE_AUTH_SALT', '>|2G=Dj83_+9lf!vPD-&Ykm0Td<#5N2@MPm+jzyEsUA[_pM,hQp4f3]R`52I77%-');
define('LOGGED_IN_SALT',   'b3B7fgMFC&3!kOG6HWqafdo^Pt[aJ1x:Sb5Dg=LOhzp<&)GCkB8]7`*(fB0h| [f');
define('NONCE_SALT',       '{if}Dueu-UxLB{/Vj*0m]wb!pk]bO*%#>lP5[fr6=udPe}@r*UlBobnSg6uBaT4f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

