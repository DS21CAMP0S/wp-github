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
define( 'DB_NAME', 'GithUB' );

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
define( 'AUTH_KEY',         ';%81vdS9=Z)|TS}AUh3t~!O(lhN_dbCiSf8PeuBO.50#!a>dlM^}f.)bT^xLD~PC' );
define( 'SECURE_AUTH_KEY',  'rSi`,g#Q8}E$)6sli/0VuIFUn&vs:g<fto}L&yPWgVf^K!0! oqea1D-*jIe ))j' );
define( 'LOGGED_IN_KEY',    'A0DdIe?oXPb -$U8,Wa(HpS/iW__p5IF[LA*agXrI#Vh /+3kQVY/`XREKCBMt{F' );
define( 'NONCE_KEY',        'argN[*}G16cI^k>I<eM< LoZQFXQ^X5X6bCY8:h/pa8J?UDY?s6,;@~Nr.<*EBin' );
define( 'AUTH_SALT',        'O9Fx|4j0A<CKNVwKi#c}IQH!Pm<^@Hp>LFXsaz~v1#pQ(7IFaVB2Fdh|sb|L{>R^' );
define( 'SECURE_AUTH_SALT', '{yj<xC-J2OnjshfBg5e2ke$/,&B>u;iGx,PAUUDux+FAR;M`b}8oSx<L3rmn.+2K' );
define( 'LOGGED_IN_SALT',   'n~NjTwlTU]l[P=qi{(20~Cb=.YMwaD1m0Nx$TK|8z&B_-p$l]bK_o;UF/TKK$#zm' );
define( 'NONCE_SALT',       '.T? 5wh;fEJ~w|?GuE`b^5*o-0OaCxj4im_@.wX.# IwvRC>2(wB~->hzrf@$lBJ' );

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
