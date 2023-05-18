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
error_reporting(E_ALL);
ini_set('display_errors', 1);



define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wpdbuser' );

/** Database password */
define( 'DB_PASSWORD', 'Taranjeet@23' );

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
define( 'AUTH_KEY',         'u32M|CeKjX-8g~%SJIOR&k@-a-YX2}u8Ue$9;IOP]Id!&;P|:MF?C{f&B,d;q8R1' );
define( 'SECURE_AUTH_KEY',  'dCz0eI_np34wNWTnD@]#JDaIM:U$C_(sgwZ#Vjt:Dly(=D]F3]ob+DbD 91M/x9=' );
define( 'LOGGED_IN_KEY',    ')AY}Q}lH!a:G65`_F)2qg=f>$>yDR .UZQ( Hc}?pb<eZ=o`3 +Tp*&X1%Ac1y6B' );
define( 'NONCE_KEY',        '+R_&u.Re]Sd:sZYd}u:o-actH#q#TUcNrh3s lbRnAB|5XjU.f`S2!r7DGV93<HT' );
define( 'AUTH_SALT',        'TQZMjB5T_sw.fbX@+Z-06K;*Icbg ,~ ul*Nq#$z6<[F9LW1^%U+^)!ndfNRS#`;' );
define( 'SECURE_AUTH_SALT', '=KmQ?h8Z7s~4qD=^n#_74N8Rwa9r-#doaWoTQCW-ynwz{ZYXM;((mp?7spK Q#os' );
define( 'LOGGED_IN_SALT',   '/hr8}Xyb(cD|VmH`~<8DiUdi}7#ysxb|O<lSaYqky~3ffvO*04HhCx18pU@WlSW7' );
define( 'NONCE_SALT',       'W!(A/b QyD|2y7=<A/W&]p6r(H%;GQu$/kgvO$o~9Z4r?@[pG9Letgt.Y,xWAwT;' );

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
define('WP_DEBUG_LOG', '/var/www/wordpress/wp-content/error.log');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
