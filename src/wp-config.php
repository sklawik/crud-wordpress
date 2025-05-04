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
define( 'AUTH_KEY',         'f0r0et*<dgcP&1QMU8fW#L1U[XjtBQY@7ektCmXbthNSV+=Jko1uhqg8D%v.SzN9' );
define( 'SECURE_AUTH_KEY',  '6kS/E4WDdo9<MLUER[@_ oS;vF%_sqd2C^mVgh)k@`$*4kE.O#(=;:Re2T?f ]S2' );
define( 'LOGGED_IN_KEY',    '&p2bA.L^3R-=_s?M! Qa9l/Sm[XsZJ1fOQqnVQoZ}>^!_4%>$B|8*!_s7OA #_yW' );
define( 'NONCE_KEY',        'jSriKc4f`|2QWY}EJ~D|0[ GLNFLjibAAFJ5C/+{~%PDeR<a%.3<1BM][+jsdSiX' );
define( 'AUTH_SALT',        'g-TMGzhWEA]iM3ZY8!(.H@OugIEG:C}!rv/8Pv!=@,*h<EOUnk9+LR),gWc:GVPT' );
define( 'SECURE_AUTH_SALT', '`<<Ft*?r/^k+1n>;vz_OI@8C1xj~ rf-,>UX8O&q5{S.,J[B,e0e;9g)hbgZ/668' );
define( 'LOGGED_IN_SALT',   'uA y^}H5g.u?r1_x?o,<>,umZ9L]g &|>hjz-xX}m,;XNWr$s*x?o.L^T<`~d:1Q' );
define( 'NONCE_SALT',       'ld[}!i!uv&.qJ@2ncQe$BJaAR9i:~^RZ|o=DP5^&.&(2/y04k9&:Ja?Q0{%zSy%]' );

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
