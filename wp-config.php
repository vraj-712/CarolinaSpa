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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spadb' );

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
define( 'AUTH_KEY',         '9$Y`;OeR@[&Mpd87ZAH>eKcS@%gkIN6> d+mvFHG<~5VGMqxFR~Dh 1{n,U(i3;I' );
define( 'SECURE_AUTH_KEY',  'TfC,3zZ<x}/mn;m46YTFs8PhX%FfX^*KO~G6Fb1L%.Sa >F5`-Id4*H@bB!7(`S^' );
define( 'LOGGED_IN_KEY',    '<nu:c4#`26nSTUP|Mb3dpQ +j/Qqj%uSxt(pkr7m(Rz?4[N!Jy#_8YmN v9iLxtp' );
define( 'NONCE_KEY',        'YXBns)`p#Xm7d[.6xfdh dp~LDBlxx1`Z[v-xN8}}:c#.!&)6iQi)nIPkK2m(>EE' );
define( 'AUTH_SALT',        'x3Pg~p1C1b6dnNq._%)aDhP(HESP.&ZpH}7MyP@~j:*d%d}Jy#NhP.je0KMv7#`O' );
define( 'SECURE_AUTH_SALT', 'rq?@RvGdLVT=r*dU8uo=U ^# E[w[.Z`L;QYEToZdc^nEomL<Dx9fiaVOmsdmQ~L' );
define( 'LOGGED_IN_SALT',   '[`G~uzA+/t/J&B.A~>w24HwE@$:p{Equ[UA|gE|Yzj[<}MxPoKZ>+A&L[P:.$e7 ' );
define( 'NONCE_SALT',       'RK.!v)pRPXjGW/;LyU,8^6f$8}MjNN@]8A%C-f6a3 K gWk>c(gzIawA}|m}4FHK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpspa_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
