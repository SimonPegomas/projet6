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
define( 'DB_NAME', 'planti' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{:=bm#>g=&Z(UHa_U;*Rb;,Mb&agGLx$@f1VcGO`jXswG9kvJSE#sUpxUyR B0S?' );
define( 'SECURE_AUTH_KEY',  'bO*UO=T|p/yrs1vg#fGPVl%!gS{@SUn+f6}Vnsvh[^#Rh!n#H1]Ee=z4aQ,p5 +t' );
define( 'LOGGED_IN_KEY',    '#wB{B}}@*8SH_pQcn6SF|d{{LZrCOUJ/zfthV`+2q%Fp_(8p6(HceMQuMOmY54#2' );
define( 'NONCE_KEY',        'Z&fj0rd#sw.4-D[9n>c`x9_zyRuH>}/(t2^E[GcVncL/r,A7U^67 :AX9^Eza=@Q' );
define( 'AUTH_SALT',        'K#(Rdv0L!.g%.[X,3B@p$okfrG[Yw}Ilj4eBYX:c@l(#CN*B}P2BuMz.,_K*2tRD' );
define( 'SECURE_AUTH_SALT', 'J$4S[glH<Fw||,T6qnfR@ )U&gO4J`S{!/1.$>=}8^eeXA?pHbSod1T7 _ <!dHb' );
define( 'LOGGED_IN_SALT',   'WjL+^C[qh_b>E5kf~Y*R3p%]F7yQHb{_}:Z{S5 O=8QYlZttIT@ck8`kB:Mnf;4i' );
define( 'NONCE_SALT',       '(:vDq9S~6(! qASS? Z:@&;~8T/*Q#|mgnt#kvA5M^5*T6I/$61@JFgxW%!F,)-!' );

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
