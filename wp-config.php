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
define( 'DB_NAME', 'html-to-wordpress-codestar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v YD6}WraZ%jf^jU1JbT*M7;3Kh}A!syrR)nP0_g}4i<#0@_ i`U1U `9]^<k`^d' );
define( 'SECURE_AUTH_KEY',  'P[HXii;IS`/h5a}B,FpELX`TzG8}C b-gfp>TRdK${}mw];fq;,1kjTo[ChCHMe&' );
define( 'LOGGED_IN_KEY',    ']=<f%!7St=iu #hH%pslLuT~daRWOK9w)UFo!&9=bCRL4PL4Fw!j/tY;PtU{[h:/' );
define( 'NONCE_KEY',        '`1L0t)$~VD~G?+W3DQG,[H}=</+7o!%%HwnJ}F1}8GMwT/ uGmd(RM!pa`Ud8ft]' );
define( 'AUTH_SALT',        ',GX2u76Mu7%7ZAaqrVV0jvTX^uB)g83n6#hDpO$QOJ(,j1fJQp8D}muh}rj,0 Pq' );
define( 'SECURE_AUTH_SALT', '__S?<^DLn`C7Pa{g.:*^)MDjx}vnK|>#)s0A[&M1E_]vz31:-v#X8ykKU``0nt)R' );
define( 'LOGGED_IN_SALT',   'w6<$}PXwO62Q4O{[fLYRY~lf(Sti4Bu2VSf,wUt;Hog>3ZG-Wx< FJ=I*=uCtDGC' );
define( 'NONCE_SALT',       '^5!iUK~H.a!RXZ`n{HIDEs)(q:i8BCN1J4o7c]>IMWn<4E%|e0YsSZQ7nf4f+>(u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aur_';

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
