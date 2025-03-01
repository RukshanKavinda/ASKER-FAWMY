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
define( 'DB_NAME', 'web2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ravindu@0704941228' );

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
define( 'AUTH_KEY',         ':eRR}-|#0E12v*NxZwx3A~l4]%daGt%.~lEE J:5d4F[FqiDW&</C8bSc15]XgVH' );
define( 'SECURE_AUTH_KEY',  'HEA&B=TC12h%G;XHS966MBZ]g9H[g@WDDF=Y+}qRL>HzGYGNdBkL^0M~1>#}@H_b' );
define( 'LOGGED_IN_KEY',    'h$C,(w<PSq<=dzki&tk4bH~cc-bB.eJMnt84<g>`~DKHLdr*%l#rV2~f}|y^gz_w' );
define( 'NONCE_KEY',        '9Su}=^t!}Ba:i:$3Fep`w,mk@3&-vE!wZh%#=[-S(?k*MG2UX7<%}Vpa^KUiZuKb' );
define( 'AUTH_SALT',        'n-V|*`Ue1.Aw)#R>TM%!bhV^9}o7l<W_(XK#hPOs.JTDQ)_`5(khNg%q5O/_jK_Z' );
define( 'SECURE_AUTH_SALT', '#0bw29~<H(kwr(or}s$Wk8VDXvKA7`ts.oqa%4IEf8a>3j/ OO2elC@V4.?o@4*Q' );
define( 'LOGGED_IN_SALT',   'KI(%DS+jlVO%[3&+OS/VJe::8K7Qf-@G|0~L2ux;2bs&L.cKYQOhv?{M^!o.r?>,' );
define( 'NONCE_SALT',       'D|Gat.&3s:xRZAyG:u!^ oBBJkEpgiPq^d*yiVMWhac%$W!^,t;:g#y _FkWcU@G' );

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
