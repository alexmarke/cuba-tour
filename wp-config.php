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
define( 'AUTH_KEY',         '/35wTi[4<2*T~.fnOFeUdv0wZ##gUAFb*]EUF:H:iBG}t>&8,Y-fpg0UuHqCd]Jc' );
define( 'SECURE_AUTH_KEY',  '8`YxjyYNm5<}Bz5{bL+4]SNXxZf{GtaDhwq!B+7k7VAd!tCd_P,W)kVHAYC(|Tw9' );
define( 'LOGGED_IN_KEY',    'd*:e)TXF//m>2P_}K[6kl{JhOy=-w~;?I_A9zD]8& {q>oS@b{k@vvn];U*tL /m' );
define( 'NONCE_KEY',        'y#qY{+F}l:K1R:@$kD1!m<1UgDfnaw>FQgep6#Dqca{/32uiK}e??}_9Sy?gRs+i' );
define( 'AUTH_SALT',        'otM^@XkK-<8U8;9j*qD9IP5?{xsWl4$DWrOS(G8O;WbB);(XoR~9ldb|&.I;;} j' );
define( 'SECURE_AUTH_SALT', ';+X]~_-00#9Vc13ic~:A?uFFJMgh2ws^SX/D:eK{:m/,BeO487B=H_ =Ss?`|tTt' );
define( 'LOGGED_IN_SALT',   '%JHB2Zz[jPr2vcebuj=FnPSE2BmsZC-OhkfdSacD?>%;=Z?mx[e+u`>=m1$=vQL]' );
define( 'NONCE_SALT',       '~]kD/5qwwx^_Y<,eW>8-4-|iUz6.m-Zg=Z*PlBl8>lv7<Pj_(0/NSN~JE-t9Y `s' );

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
