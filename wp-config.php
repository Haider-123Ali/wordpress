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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'yg]%+Ji0%Ey^&Xrqq0~l%b9GjT2TE&(OK)9eH-)RlEpD0!;O^FgyIPNhvFMS-luD' );
define( 'SECURE_AUTH_KEY',  '(apq~q+~-~dw[idWP6 tH:gp1Kihl{ca!XI^!huGE2iODv;wgiAb|F~N,p:*xA5b' );
define( 'LOGGED_IN_KEY',    ':Bv;>4,NN#<!2?/HG8P:4o;<PD#(TI>V5>Nr;boX[z&vD]{ynRyAF%&ye.EI`FCb' );
define( 'NONCE_KEY',        'kd^QP~YV1tFZ+g klAs87)d^z?s({Vb6UkRpVC^ZZ&!Zs[$VwJaFlPkw93q[6UZ$' );
define( 'AUTH_SALT',        'Vs0bumLu~vJ]dNow`wR>s/*+-M;`KIXy?u%z?B3doE3U3qmdv|b]iX,.mES`E[!t' );
define( 'SECURE_AUTH_SALT', 'CxO!b?_XVJyHJUNZmDg<[5<MlN!e!9E;}s/H`9>E1o+[DRZi?}QFUk`a(|KD+t~R' );
define( 'LOGGED_IN_SALT',   'va:4Wf97-,[80/KOWbHKuj;N[)5Ks*=ZTT!%`Pd<<fjDDhZ/Ox:~,J]UMm|%Mw8Z' );
define( 'NONCE_SALT',       '4z(L:8([&3[/NENV^Eor+GbM.A>Ch8&eY3{Y^&N<!g]XHmS5uStIPsj*Om80M2QA' );

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
