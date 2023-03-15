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
define( 'DB_NAME', 'db_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:4306' );

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
define( 'AUTH_KEY',         '<0<0k#o2S_zB/ru)4jQp~/+4NS_.JCj{b_3~>qmU?:iFq[G@;H^xcES$*7%v;v<#' );
define( 'SECURE_AUTH_KEY',  'C]pEc{FuHAd;BrJo#my;Ug($NN-R]FR_m2vle=p=dRl1~^)Y9)RMSMKOfkWJA/LF' );
define( 'LOGGED_IN_KEY',    '70~KAQHoH&GfhB~;zO;)WR{Zz5%OViZI`VWZVNPTl&T7)+dl6sO:8iOnNNM2DJR ' );
define( 'NONCE_KEY',        'vqEi_sB931SbCB*yR%ES%<*Rvr~e46BKkblm*Q`VPn%0{Enh2~sf*j#U !k i^b>' );
define( 'AUTH_SALT',        'A5z$xz29@p3R!H:y=EgbA[ml5kCxW-(w(BHFPMjKfTwZs)%!a4<gIfIpgl#^L<oB' );
define( 'SECURE_AUTH_SALT', ' B~U/Q|xg0q:LXkxxP%5+*4nWMO_<.cKEx(Kc/4lPsF!e_Ri2_[HseT?18Y|E(w9' );
define( 'LOGGED_IN_SALT',   '|i^<{w7JnQm% wZ<uxkAq$0SR~*nYd4yug#P#Trba}@F~gV.L8?coRWpH2j[Z^F ' );
define( 'NONCE_SALT',       '|v(V>iM]7dkhX_L-**d)Gl(@qs;^0O]b9U$:ND(I+$oKWL.Z+?CFg^7:/gy U%-j' );

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


