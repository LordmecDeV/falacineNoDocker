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
define( 'DB_NAME', 'son_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '$b8n]P{lw1;]_IAR5[C~_p=b3ROB8G;_NA(`XA X&S}fHQ/y,ZKI%7KUdQI*atOb' );
define( 'SECURE_AUTH_KEY',  '?XfFE@ZD7]qi(& pWIMG;)?j|wZdjWK:x8{w#&0!xv?Y#BrmT|Ke|2>7-w!!5e`f' );
define( 'LOGGED_IN_KEY',    '.upFhK01<<p`J((`oJJ7/hf+I*RDCX59R,rn^ME7Ub%N}9ZuX_,0(uTB(YS$VcBS' );
define( 'NONCE_KEY',        'A!!|!|Zk{$LX~R=J:jGG!]-O|qHR*.L.QG**HxTRZ#67yL<bMYmgv9y:|Fl~/hBI' );
define( 'AUTH_SALT',        'BoZ4Sg!6?sa,SV IzfvI$MdVU6:ofKg+Q:0v{HzV.8tr;YG6~e)YYX]%{!9,5jzg' );
define( 'SECURE_AUTH_SALT', 'rMe(SjMP&z:!j{~TjIJdiBS[3NB}ZyND3t@I[l?0PC%L)*:ry0JhFf82v~;j|)]S' );
define( 'LOGGED_IN_SALT',   'sM`~HD K}8P6@}+*`tA5j7gjv#vKloX!;`h<~cPMTf~4i57L_,kXcT85>JvAotw/' );
define( 'NONCE_SALT',       ' bi!8>IWlJMCkdCb+<.`BoTnf~.fCaAGz_hO1tYLzlC<4:!/i9vHqAl<T|3|UEzT' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
