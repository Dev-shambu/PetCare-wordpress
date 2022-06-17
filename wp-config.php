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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         '6H#:azmpg-xb?rFcDyFp*0l4|IOWZ(LTWO.W?8LA$uu<?M}ND+VG-lL{ZU2Xb*U*' );
define( 'SECURE_AUTH_KEY',  'zfG>^O`h9A2P0KQ4bykG<^!2-MefD8rK6bh>.kZ}_mE4kN4;e-JIJKcl`iZxt:5V' );
define( 'LOGGED_IN_KEY',    'Vy.>7`Bylk&>of@U[[/s]_^CP}e|EFRxU_mB.O8jR/N9`Zmo>X(&.VfQ-nq?RPaM' );
define( 'NONCE_KEY',        'e3_hz@{,><8qrc3jp+-cuuX*/%F]V3B?mq)B=X.um^TJ6)<K?OkjKVmW DFx_|@-' );
define( 'AUTH_SALT',        '#O%jT38(yDFd^1WG#ShLa3w*&5Li=A3M7^xMC9#MhhS6gCHax+G4H){#fw0($@Vb' );
define( 'SECURE_AUTH_SALT', 'GK/:cKR#_r-HU/If{4-N(A4r1El,}$<Pxe~Ed8,:z*m+w2qQV?3&)Ibx%cB8HKUs' );
define( 'LOGGED_IN_SALT',   'G6P0#YR,y>>FYzX[z0n1fS;>vttx9m}lzdB(j[>v2q= :)qPH>yu.m|f#NclG2(b' );
define( 'NONCE_SALT',       'lfP>7nh!dNL-`iFvCcIQt98|_u?1F6aMpjJu|~d5=1E_|JceGbI>bP@#_4W2*@I/' );

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
