<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'frankie' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A/I&|U,JE+g3D]$7,,7FQALGYyoX(`DQYi!8z$K^v,BaC~4fUBv@] Ux45@ .J91' );
define( 'SECURE_AUTH_KEY',  'U 0pX>ScyHUh3oNabLe7h}3uj}V&rAb 2NTvKmK(BOv8q}02?,i+|#WdNh|}OUW@' );
define( 'LOGGED_IN_KEY',    'FE;7xMgn!p;+}UIBj](^;vuz_1) XtE-P6nz?k+S4|Q4.K3czd]-s,Ci13H :l#a' );
define( 'NONCE_KEY',        '9^olij>IheQ(OpIzDl`KX*T3NG=IIf)bH)dHt#)fLXO,2lEz*z>~R|4^9K5M.~o6' );
define( 'AUTH_SALT',        'Ej K9#fUABY/>QrQ,(l`.]}$!WhVtC9>j<p0a2BSq&LZ#vbw/iC:>{SliJ.SGi[G' );
define( 'SECURE_AUTH_SALT', 'T`TN{bw3CN_MI]#=IC{^df`Hf6[BG%oMuMFhHk=:2}[I$mo:$(1w%FMtZAD?^Z4<' );
define( 'LOGGED_IN_SALT',   'vag4h<75SK8eb)1e{MRGEUkO9sPO7CK>(:0{1J&[Db7wt0.&^dC$~w?Y:|Mx8Js(' );
define( 'NONCE_SALT',       'r9$mbeY%2]#=yb+x!j&CoF9WP/ba=#nqt85#tRCS#ZW3n$kZ$6xPZ$2d8jH6R1:!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
