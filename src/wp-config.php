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
define( 'DB_NAME', 'my_database' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'tiger' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '}/?k21Xe)t6*M@/s$ )KJV6jLL^$z|G<$J3X]RB=biO_N8I0HF]p)L9aDY)zJsb_' );
define( 'SECURE_AUTH_KEY',  'UEi:w5yW2;IWjXfX,F/5>+b#r$?d*]1<BJLWAqBgGv:6hfJ3X]Rj)H`Zq[7(r^qh' );
define( 'LOGGED_IN_KEY',    'Ri:M_,S9h]Ag05c1gM$@5*=oa%8z7%qt&}L&@;sl^_~0=c[<>F(cLX{kLe(,??+s' );
define( 'NONCE_KEY',        'v`2%uv8:IEiQ[[=kQ/zz`^znTYDtY+([j!;0<s2Oxw?f9yo8C_#MH1Un81(A[APb' );
define( 'AUTH_SALT',        'SMzTfLv|$=Xw~ki!e8Qk;sBWAaFF1cQo1pUGdu9JlKL1yzo_i1N*5w9!kO]h8Ig0' );
define( 'SECURE_AUTH_SALT', ',9>ETRLdlQX}Ve[eoP5T_pYjUpr|I&N=bN$.ryr|C6L`:.alzy3F4TVM05nX)%,c' );
define( 'LOGGED_IN_SALT',   'S)H{x&SEQG_x|^3!p3B4Rzjw?X<_eB<pY:iGp&@R$*sWkZ8/R!v68;qO0A|>j<[F' );
define( 'NONCE_SALT',       'ADfUMqdU0Ot7HNt&Re7l[m(TG/|7m,*FbT>U#{KAF#x~U*,^K~#Aq4T&n5eD(WI}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
