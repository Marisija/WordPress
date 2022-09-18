<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'mmarjanovic_projekat' );

/** Database username */
define( 'DB_USER', 'mmarjanovic_projekat' );

/** Database password */
define( 'DB_PASSWORD', 'vkR1zBgXJl**' );

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
define( 'AUTH_KEY',         'pjsdWj;V&/?{lt?DS_NE+SpWBNnI%f4^3ewW*dmIZcP_tA?/l[?;]k=D6B YK2sy' );
define( 'SECURE_AUTH_KEY',  '-SP/Nv ypiWI4**dBwWB2yB)r7^,U1@.1._zcyVq 3V0g?>?mU-W@8Q/mDH>(79k' );
define( 'LOGGED_IN_KEY',    'P6tJg0;(GYlh($Oj[fehxS;adzIYimMNz;0$js)CbzA`ot^{7>C)!q$yHLgnl%;T' );
define( 'NONCE_KEY',        '9lN/_kZ`] k%umNRcJ*yNs.E[{(hcD8uJ eg;A},znAg]OVa];a[ $E9j&AGp}^f' );
define( 'AUTH_SALT',        't8%h!W!{ZYTh_l 0wN{RTm.)Z/ROT@`r^|zc^ Ntt^H DEGDoh;,HW)g()G%)(zJ' );
define( 'SECURE_AUTH_SALT', '-a7QwRsAd);<ayk]``T%S[TI3,pn2!Jk(J?17.crWTq.E>jsUhnnB}66zSFzYFk,' );
define( 'LOGGED_IN_SALT',   'mB4w/%vF/7lt=d%/|(M!Y`C-kM%xVoaS3hCpbE4V/(#ALp,J*8C-U@w=jtf`&5m8' );
define( 'NONCE_SALT',       '#YM7/]!-VV<&P VgNA`O?Md8V`+GxBfx-PJKXCR|s@CA~gg*==mLacc~8F|wXX|l' );

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
