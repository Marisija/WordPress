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
define( 'DB_NAME', 'mmarjanovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'mmarjanovic_trpkovicadmin' );

/** Database password */
define( 'DB_PASSWORD', 'EYwp^g%ZDEr;' );

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
define( 'AUTH_KEY',         '1/}u@ L5aHF-u&]r/i*@J%=>=EUufR.I^`$([:T[GR@wECj}^cV:557d6Fjvq-*c' );
define( 'SECURE_AUTH_KEY',  '?O]3M!|K/-Iq_JxD%-+)%F>KvwGE=+=f7CH2`22&`4@y1Knj[5*r[3:<#eAt*9Id' );
define( 'LOGGED_IN_KEY',    'e4(=o&3tpYm>`=e;w]nrRX),E)SY+&%b{|``=e.@*rpyPbRf30NXdK/y^.]_FrWP' );
define( 'NONCE_KEY',        '-P#]Hojobp`s!tL6OFIf3`@/OP^TmkSX4ugSZn7ok>%O1!0VU=G(*9}D2?t6AWX7' );
define( 'AUTH_SALT',        'yE@xMa3eJC*7K=}Vt:Cuo5ey.AO5ta0w]acFt3DA%jvL^|Vgd9lc]@YNW%j049FK' );
define( 'SECURE_AUTH_SALT', 'Fcq1UDoNrsEj(_Fvc}WzhImDJ();~G@D/@0>A&L56x:sl1KM*C_ayhZG5F,J1%d1' );
define( 'LOGGED_IN_SALT',   'O^2:{YZX-0g?({R$=FZUu<YNB6rpvFb(vrI<n Jp[Rn3fR51YVI*Yu#7qvqx/T@e' );
define( 'NONCE_SALT',       'jvI4q5&tP[2|G&Q$[*-,.:2?*9V;@0yY2^Vesm,Iiwmm95hP,]E+jE*-L:Tu#^lr' );

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
