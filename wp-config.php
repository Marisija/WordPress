<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mmarjanovic_digitel' );
/** Database username */
define( 'DB_USER', 'mmarjanovic_digiteladmin' );
/** Database password */
define( 'DB_PASSWORD', '?;1W,TJwY(5$' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L<*-^DGVMNj6u(w3kB+[t3;#foqT}[JX}4qd`T._A*K-Fg]dsF3v$;etD=c@?++!' );
define( 'SECURE_AUTH_KEY',  'E#YcQEZbD~3m%_-k2.h~4hW>*B7JX2y`o=;`QiR18:C9zXam/&VDS(d.&83r> Fe' );
define( 'LOGGED_IN_KEY',    'M;6#=pDBtz&FuIlhVY(!0Rl$7ml3xzZDLth@yT}@R}!v[K^d Fu?9<$pO1xL,.Rx' );
define( 'NONCE_KEY',        's31[s&{ujn3RG V#K~Blf|UMntV8,<zHHI)t%N,vY*&-pn^Ih`YC=V[Z@K`Eu$OO' );
define( 'AUTH_SALT',        '<=xe{$/9}WvR,N!/;YalZ${WFmFi om%5Gl3}f*P$tq.xtoGH{Ul N-[=g:/ZOC.' );
define( 'SECURE_AUTH_SALT', 'x%?Tz,mjxr8JS<%kxk*M#g4S:{Au+s%!yP*ER?UHtr}X5]aM)}2%g2fSiTqW7t%c' );
define( 'LOGGED_IN_SALT',   ';2CFfnjJ34m8K5fcV4d)?e$[Qf)Sfoi.(04@p`sToq}4]j^}t:r(gh<vG:7NghlG' );
define( 'NONCE_SALT',       'b7`oi2x@!Qi~LXSbCIcKt*(29a(z)+>R,a34Bb2i_L-s.vn@jm^0mWvjC^zsLX~$' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';