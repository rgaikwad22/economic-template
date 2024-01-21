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
define( 'DB_NAME', 'Economist_sustainability' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         '/{sxv/:J&7QLCqg5WL3e,;O.,t4?wto}G_F&~UU+rsk*JD _{xh;@7YX-sSvgwW1' );
define( 'SECURE_AUTH_KEY',  '$.e3x6a.u^aV|I451vQmb:BsOL)1ly$nl^rm@M6#`}|x}StzRx:zENCb#NZeF#p ' );
define( 'LOGGED_IN_KEY',    'Bku9hEq8n9hki`8^3r^<ew-2t8$B}oXT0>.;2I-*$A#; @?vGHx<%6(ipfaYw!x3' );
define( 'NONCE_KEY',        'brY)0:$Ksa}*Nb3Q6xL>mF)q|sq;H{>R@k(&Id/A,Vk8I?]m|(-YT;8bt*AG4Pt(' );
define( 'AUTH_SALT',        'XqW#BSqEIrdHAG2Ev{]!zmt)XCi[<~7g7vvcl!;m,rN@dn3$jUZ9fdca#W*o.l7%' );
define( 'SECURE_AUTH_SALT', 'Y/r8Pl?)jxy/0]QU/KW3$1:v>3o0EG9kD+?nq78FvwI`JHJU^TmJQXyuI_;58.%o' );
define( 'LOGGED_IN_SALT',   'otdXTiCFgjqJVL5IJv 9_C*tzmr0)`[I.^SMstK9:y?8[#7nk6$>$TY13 PN_Hw.' );
define( 'NONCE_SALT',       '*b_`M5b2j*d?7UVp[X{mr{eg8DgzNARB8M(,?7O;2u5yDT>}&1mtzqC^_X{w+,g9' );

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
