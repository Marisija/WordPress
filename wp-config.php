<?php
 // WP-Optimize Cache
 // WP-Optimize Cache
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'mmarjanovic_portfolio' );
/** Database username */
define( 'DB_USER', 'mmarjanovic_portfolioadmin' );
/** Database password */
define( 'DB_PASSWORD', '!4Va%__D!^3.' );
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
define( 'AUTH_KEY',         'WL,gg0-3<]a T)FUn+dxJf52!P#^?:d*WS)<8_WYe^44Fn3sab49}hs{&Lx2uyck' );
define( 'SECURE_AUTH_KEY',  'J$7X;u(@{cYeHXYa4rNX56_zGiBN54XvPi#]^R7L,8 (FZnO -@]qXBTJR;R[e(d' );
define( 'LOGGED_IN_KEY',    'Di6Q#ff}_#Q/c7>jw)7GCV1YWrAI)&5ddunl1kShLg{eyKD!8[e 1n7fAtqhBYyN' );
define( 'NONCE_KEY',        '[Fz3}p^JVXGM7Z%i^8?sdxlW4}b}@hX]IO_f0cmXDHFAGm6`-L,~8P]dj&974Crr' );
define( 'AUTH_SALT',        'Y6f~oO7|bt{@cIqf+0 qwrn1/bJh(*`QKqLF?/+/#vV!:48/$<Rx<%{+u1GC!o|(' );
define( 'SECURE_AUTH_SALT', 'st=>5S@aE}p_Q9W~D)2NuhKqBRaPfX*[}~H%~ttiL]F cSLt,ZPe>t_Ee?%wwY1V' );
define( 'LOGGED_IN_SALT',   '_J1g?X3!g*ia,}g7Hb#L5GzKH2[!*aP5ZrDqMg#lLu~*RO`E%0UXs.S&5xxX,h@1' );
define( 'NONCE_SALT',       'cVwj5jT9b>oX>e}<zM1E+ Px!@A(/Mmn.7eZA.j/CJBJFkc&9plUDD[VF(0bSBE,' );
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