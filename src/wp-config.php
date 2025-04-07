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
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'Z!%[ cC*klL&!o)mXyi9kAvLx=F$A%R?+Y~O:p7_8*1&0.+2?6YJy7^AL4=k~?.O' );
define( 'SECURE_AUTH_KEY',  '+8YC&ef9C-0uDp$w0<Nv |kyg9.Vf6FcS`0BB;u>u|A 3c02k+?(*P.^oDnfOPv*' );
define( 'LOGGED_IN_KEY',    'r|fF*!`@&TwEPQ<]R^NNLW5bV_,#_5>%0juNl2)~|cMe(qM!29s3X>?U-7qr7|vj' );
define( 'NONCE_KEY',        '/-;HjTg|I(VemNqMNNJ.?H>&t~:-fpZgwvgOR:s{BKqu],rrq`Ci:H)F_l|g~g]X' );
define( 'AUTH_SALT',        '0_I7fFE&|sVoHn|p=N3+[:/nb(Be$TLE I5KuVi@(W%,UTi&a-cn/oHtW9|w+s#Y' );
define( 'SECURE_AUTH_SALT', '0b,Ky8Wp%mx=&+^iYZL]ue6@tr6E[E;C6r#i,L#GG$2vQ jJ3_Bd8TC8D#=V$3mI' );
define( 'LOGGED_IN_SALT',   'Px/~L9$Um6MfY?>gF.<] mV<>Q3C]5By`5^-Ah-K;bpAad=Q])<vVsIC*EqTKg).' );
define( 'NONCE_SALT',       'U>K~!Qne0LU`,!N!q^u2JGLLrc^sUupFg03L!nvrD%%&_-q]z=KrzHXGhXPd-y!p' );

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
