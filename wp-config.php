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
define( 'AUTH_KEY',         '+Q*2doL?{s~ew|3L~WkP1_$CZ72tOwo&qR#)[dZm}086%K5quk&7!Q>:iAm`Htke' );
define( 'SECURE_AUTH_KEY',  '-U=^[=:opR$ 4p!w#%IM/4A|dogb4i1[M+*;3L ^Vaf>KTa, CYE+.CQFAQBSBFt' );
define( 'LOGGED_IN_KEY',    ' 1jV1;!Kd6~]y)s,7O4FpO=Tf5GY.w:i(4;#($sSh4A8a,8*rx,R/+hj,N*w?b76' );
define( 'NONCE_KEY',        'XlA:m7DB(t!!FXGk>=eZ<&4X*1c[n+C2^b/>5Y1]7.j|VuO*=vSR-+Wq14f3ck#L' );
define( 'AUTH_SALT',        'N25dmP*MqO@w1fj}%nD%M7}l$1?>yU_v0Gxq^Q9u|_ ^If+M:Vy~DqEYdr-~2QA@' );
define( 'SECURE_AUTH_SALT', 'h!-UCP[&bBf|tGybt#ZXEc@tmn,L5,pPy&&%0vv8HUm^qp1qv=}4|<[ s=jd X*l' );
define( 'LOGGED_IN_SALT',   '3/wu~6B?tb[%,fr2/&dl~~e%b-o6NAVrA&Ii6y%WRt_]iNn(CmF,EL?_RGC$Lf@]' );
define( 'NONCE_SALT',       'oJIq.e(zjWad<VB.XX}Lh[IYwx-x]F0{EkC[KXp>p2t2,y7N{`F4Cvu2WM7guZ|/' );

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
