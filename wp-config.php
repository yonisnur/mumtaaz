<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Mumtaz Design & Engineering Consultancy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=HJ+YFL+-P:mVJi>!3gOw*wrf5 ckxK5@hHD7cOi#Hg+W`-5a%u>pc^8<_RWMPzB' );
define( 'SECURE_AUTH_KEY',  '/+B-}yx_,V@0aS+*EZ~}^Xd8u BR*}:GPS&9,ozR9/ql6(2]w2Qe=uFu3$ahgk?p' );
define( 'LOGGED_IN_KEY',    'k}`5mu6vrpU3QZV(}q<W]aixIVk|RhWoC0kUZ|X&GyD1<9*17D/hnM =I&gKgXJL' );
define( 'NONCE_KEY',        'x5^8Zneys8&HxE$2`WNa(+((B Ht)Y=|0jl{}<; 4wtzQiD{sm@F-P0f7EUD4*^)' );
define( 'AUTH_SALT',        'tceQLoP$]5 ~3Fz$p3_`7/6(J!&CRG|4dd#25&CeU*]&bM(+J(WDr<WOjs8e @w9' );
define( 'SECURE_AUTH_SALT', 'Sz!zPO*US@Pb@q_Mwdu9[tJFu</>HacH@}2X*A-Z 1SbW$J-xM[A,(OoGda^-!A:' );
define( 'LOGGED_IN_SALT',   '4C}NT[3Bfb@^1NQbt<$e&2M2wY}NG)@?CqoC<4W~:_u+4a.341Xe#@1]Dd{P-AZ;' );
define( 'NONCE_SALT',       'X$4;WN%X4&1(T5i5~_8tDTnZzJN#Io}I3d_H.hDT3ehv_rCToL&rH)SHM-EJR(q#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
