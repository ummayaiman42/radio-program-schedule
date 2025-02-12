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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u518434501_83hvB' );

/** Database username */
define( 'DB_USER', 'u518434501_kRxd3' );

/** Database password */
define( 'DB_PASSWORD', '9d29V0SaKk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'I=q`F0?aguM[g|}8wWTWX|bTDgpqf(!9?{ByEg$V&A+08o/YO3z0RIA/ZkmjC~9B' );
define( 'SECURE_AUTH_KEY',   'ah}BC?Ren/_(,BIhh5>/cJSU,Xr$;GYzPb||-zF_AU/H4=JIQ!xONqeR7H;*maSd' );
define( 'LOGGED_IN_KEY',     'wfxqTS?#((CWKXN:ER0a)Aq]~~N5unXnURq0Z#j+>i,(;wR*DX1x+wMw)6 ]Q88R' );
define( 'NONCE_KEY',         'j$U8)Q:x=oUKHj2WA%xSEYD.Bb^H4mZWrMpnBg[{XcE~=u>BqUAv:SI*KKVh3wOK' );
define( 'AUTH_SALT',         '/VmdVG% Gud,I5gbFLlwhFxFxEX}#7G82gu(%pPG7W{4QGkX.$EIUh<yH`!lgEj+' );
define( 'SECURE_AUTH_SALT',  'u3@A>m7Er(YcKX2HG]he;?.&(F0+@NRTS/P}6_exbFJ7Z)#ehZ#d`<2}d,C7j p=' );
define( 'LOGGED_IN_SALT',    '&;R~kk9oo:}; RQn&-:S1}6N vWP<,BwT#(dRJRta<gQ@^d?~-?GR~u8]Zx_90ct' );
define( 'NONCE_SALT',        '_ow:`mCslEn=%l(5VUm= />e|xB<LmGU<%[]Ki[/Y-F@NMd[m!C:+Kl4 [k}2pyD' );
define( 'WP_CACHE_KEY_SALT', '>C&.n.M/+$jfkEc2[FL8a5zI6d6)2OY^&(,62yr+}^suIOdq[F3kX/u=QdoOWQB@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'ece742629fa2aaa0bbec17c8fff08bbe' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
