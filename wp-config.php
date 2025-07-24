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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'v#Wbu]3E-5uxm&XhoC_&V<f0Gk~q4%vJ^uvIC9P%#yK +/5?8Q_TBj-%b(4;?1#1' );
define( 'SECURE_AUTH_KEY',  'tS/$a]PV%tUL2Ch!&w{bsGV8ST_FyH#x@PGA.rx:O02|&@;Yn,M rqh{Jbi 9u4>' );
define( 'LOGGED_IN_KEY',    ';aXo7Cbmbm;h#pE*FL7{1Fg0y]F#V,YFvj2/X&my)WBZ]YpO(]9N[c})%SO?#=7$' );
define( 'NONCE_KEY',        'A6dR,>#A8ob3)KaXsW}&=L>ZMA)^*oSpYO6mPg$RqDHbH=6J*,8qz1_v-JgJ.=9w' );
define( 'AUTH_SALT',        'D18P$oDFV2QtHgJe6^3(Tb~I~Nb|C1tM}Oi+`h*]80o4I>+SdAPbmn(2@y@|a</Z' );
define( 'SECURE_AUTH_SALT', 'XEXHz)D8MM-aSn{N#{imk[b}ZUr&y^RG+e/Iu_oaeB^+j0*RSgi}lq&n^_`hpow~' );
define( 'LOGGED_IN_SALT',   '0H@_zj!wutjVvQ^zh8<`*]OR_y^q,NQRIx<Y4sf!hQ{)R,hK+6L#]FaFa-sYO{T>' );
define( 'NONCE_SALT',       '3p@Oi^h?}*R^n.$7Gq,FL+(%_Sv]|8]BAQZga!!*D>]XNH2~azN.(;3{!d-I>y1V' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
