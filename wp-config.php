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
define( 'AUTH_KEY',         '->j5bemK7v*oDTS!tNS]Ov*&FLBeF]RU-Y=053EkneH1iMztcXTz_YVEMZFs;1T}' );
define( 'SECURE_AUTH_KEY',  'GG5b0R7KRLC@}TRQ0,+FO2t`.#q3JG$,UVtwY_/Mp}FQX.|kru3laHye@AcTx()!' );
define( 'LOGGED_IN_KEY',    'tDz7{]01<`VbK,L7Mk^qiJI%CKzJDia%XqGlQEG@=!N,47>[b%,HH@7g#1b`NCn#' );
define( 'NONCE_KEY',        'q/I>-!A`(|yiE3cm*w5#Yd2/h>|Fn7O]&R>1-fL|[>^w]J{aL fVdsM^j..;D;Ae' );
define( 'AUTH_SALT',        'Rmmu);BUa4`fs,[s-$B8gV5ZoBeeO6Yt:%Jc6%!TUrYO]bo$*1>guIx6{eS}}Z2#' );
define( 'SECURE_AUTH_SALT', 'I6Hp_GoDKR4%}ZTf^c&YtZ s-3um. ?1=ArY.^$T#}d orAtEsa8Ou~8Ho}[x[au' );
define( 'LOGGED_IN_SALT',   'd48RFND6~gn>hl,aCiv6+>]-`l[F/]R4i?eKj6$e{-Ni/j+7`!4mEt:0C]CknmD>' );
define( 'NONCE_SALT',       '`WE[!`G ;p|7|SYaI#!KNAZ.nGAzS*lNM_4`Yk~&ZMGMX*Q*Yrhi*c.-YVMO:bux' );

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
