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
define( 'DB_NAME', 'ec' );

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
define( 'AUTH_KEY',         'pfUyW9a)(D|f4(Bz!c-byI1=vM.-uQLzeZmU,:P~?&hN)O[iPI];J^2Lq&a-9ce.' );
define( 'SECURE_AUTH_KEY',  '93E*A@mC,:X=rjk=M!UOI{(F{r$uvqH/exP.VwtTTx::0=/%QybuH,x~@`Z5R@_!' );
define( 'LOGGED_IN_KEY',    'Yj;sM+RgX`Nx-_dq2^r>&Xx}}  iHJ!o$z}8p_7N/M<&n+[zfC8kIui|NcB.{0;d' );
define( 'NONCE_KEY',        'scag/A%5iAzqF!diUtO)(~YTDk6 GEw/ZMy*!uqq~gXflBlKY(=)h:8vLy?DL(ff' );
define( 'AUTH_SALT',        'MylNb0b<sEp[T=5(-r9{LAS[y#MB n#IuVwIf^ Vdy;Laf)9se:@w5F]ZCa0+~Xo' );
define( 'SECURE_AUTH_SALT', 'T86}1cXKC.-_L2}b7$ImXdi.gBvW8c$sU1gP7Kx+OGf,PVK:nOV:o23+^M @[$`1' );
define( 'LOGGED_IN_SALT',   'XN|{h+K+Fq%_k%}^>jC>H4e !6AEmZOGB$TYF.56_,{=}=vGSBDla#*,l(xHm~NW' );
define( 'NONCE_SALT',       '%G#%#P`cXy+{ K2>:&KZ%GvKlV{*iG.4P:A>Z+<^UNb}wCuCmbs=E0z8~C?Jy}^?' );

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
