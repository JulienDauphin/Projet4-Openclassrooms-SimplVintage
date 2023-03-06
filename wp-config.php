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
define( 'DB_NAME', 'simplvintage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#|6U!lo$$?0QzW{8)y&Cdh<3I f pkveZ;n<Iz1U&!_^!O_1sfE.fy XRv8eN87?' );
define( 'SECURE_AUTH_KEY',  'GdNO}jGx ;H1k(|]^Uoby`uucai67MSQJ;6FjJi[}BS^l$|ps3l;lp<*L^X8y.Qy' );
define( 'LOGGED_IN_KEY',    '#5v%t*Z}POE$8;R0/*C=*qCvUGR3:4DZxr439:a)%<5#)_@u[Cr(~dJR5_SdAs^d' );
define( 'NONCE_KEY',        'Q437nXCt/D^>3CX>t@!2.Lu^Zg3y1055]/|XZ&3tM|fy!Q#6>C.LP033qK{Hcw=X' );
define( 'AUTH_SALT',        'tKq>qm.,0*$K*}Hqf-+nI8.k2xWgnS~xyPdJfv5]e,hK>jeU0mPL0__Hk,SA;q0+' );
define( 'SECURE_AUTH_SALT', 'ERUXhm+4W^ES}w:ZIWJ@A@X`fQ/bQRO6,s6#39~7+[O.BH urCS1@8,nBRc|%@@7' );
define( 'LOGGED_IN_SALT',   '_hMmE>i5,*|b;M*4q)DqKa/u+R7OI{0W><V*qW4KNDCkMaFO7(A&Ut4J^QP(}2F(' );
define( 'NONCE_SALT',       'y4TkQ$|8h@vLz&.~#]n:4$k]5F}(ZMABbQD6}Pfhs-e;9wA~K~0cDInG%Qgut47h' );

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
