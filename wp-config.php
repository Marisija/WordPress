<?php
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
define( 'DB_NAME', 'mmarjanovic_roman' );

/** Database username */
define( 'DB_USER', 'mmarjanovic_roman' );

/** Database password */
define( 'DB_PASSWORD', 'd{4L*pgd6$)I' );

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
define( 'AUTH_KEY',         'SfU+0zLP[0^u4Gb+$-K<5eP0%=s!?r!bftZOZ`jc3?nSc^?RFAoocG%I3nP+gEW%' );
define( 'SECURE_AUTH_KEY',  '`Ui>vuTx/>!rX&/p]8DDyg-Mh@y7;V>Gd!Ehl|&X-=(2ZQSf7#p6WrD=`]c#w.m,' );
define( 'LOGGED_IN_KEY',    'HW^6jax:?,D.%.pn(v@GP43BAvMt:J%&o)EXy+t `Uvxh%c]f<r<Icd;X6FQGJQM' );
define( 'NONCE_KEY',        '2ngt1ST~S]pdI/&(pZ$x>#r5P[C1D-+pQ+2|VmO$;p[@.nE,%t%o0V;R5O^[q$ec' );
define( 'AUTH_SALT',        '/|MkpGZ@V2dV;G,nN2%o?U%DZr|WZ=,C+r9i+yZ}XYR.~brz%[QjT{4 r!t-XORo' );
define( 'SECURE_AUTH_SALT', '$.i@23g@{k(;+kGX&gQ.fs$oxz)8n|V}kECObj56OkMPPV%7);x[#^RpHxf~Vc1n' );
define( 'LOGGED_IN_SALT',   'XuUT{)wZ.Ol;F1_t%UHTutEDE,tT1{*vv[[hK,t#`w1i;DR*u{<O!QGAH-w`=vV1' );
define( 'NONCE_SALT',       'vD@AU?svFr1w7_,K3~&UZ?}QwROkEWK.cwui>_j#i1ihp~;Obtnjr*3>R6(#zdLE' );

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
