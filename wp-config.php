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
define( 'DB_HOST', 'phpdb' );

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
define( 'AUTH_KEY',         'im4vqa*,>9PwdF()N_?Q3OO^ yeD1/JOOD<LWQURo91Ec5fWm;+$mtU{_^WOdgoA' );
define( 'SECURE_AUTH_KEY',  '@B$|q/~|[Bw-9R6 68<0T-SNA2UG3 zqZsJ*quYBJH^T7Gb5 POsm_Ds<`!Si@?f' );
define( 'LOGGED_IN_KEY',    'nmn[9D{E4(mXyiu_?+*-9stv55-VeTq-36c_ol[4UUG7D7Zgtgo$T%R5VWMu4~yL' );
define( 'NONCE_KEY',        'j:X9;{cESFP<!f88_zJpzdBq!y;s(JR7ArU@ryO}IbdyK5T +7di^10EPg6$!>B1' );
define( 'AUTH_SALT',        ' dkIS?a,!h54=l;S$|h;5^U7A|1wUi18-wjcH2#-nh] P~=`vM|+fV:]~tEK*fl:' );
define( 'SECURE_AUTH_SALT', 'D>|WQeYkn/g=}Q=$*kqDF@Dh3k8`P*6^w:`SqQD]c> o}7,]hlhsNn0/6vRstF?C' );
define( 'LOGGED_IN_SALT',   'yy!qgK870jz&of!1^GQeg0lvGl.Xw&n~)io4o`lx.|z`Y)LEGMBtb^39-yQN+]O,' );
define( 'NONCE_SALT',       '8/ap(?4kl:6mfY~buPaiBn%($%r8>a}@X(WIS?Ia(oZ)3fi J?fSs{u74j),X@(d' );

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
