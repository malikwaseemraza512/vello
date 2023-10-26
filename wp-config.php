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
define( 'DB_NAME', 'velloindustry' );

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
define( 'AUTH_KEY',         'Yu,^S%f@gn^&]^`$N/z/W5Lj<`9W|qz{H(<IAsurku:7.|6yE?;ZMxU/XzMF5;&H' );
define( 'SECURE_AUTH_KEY',  '~^dfpl@EbCSPB{4j4BW+w)H>WQYn!;>aQ{]I=tHwv 7lR:H~rNrv4;olYy5[fgJl' );
define( 'LOGGED_IN_KEY',    '2Si2y$Q]t#{;1G%kC>zp5C.`_iw{Wul}g2FfNQE#:iY^s:yEPXY0 :Z+J)bQzM37' );
define( 'NONCE_KEY',        '*Y9m(e)7q^%H1h$--B[$T`wm@(`5)8&Ik)H9%)YO_|Mzj]3d$(i(:(M*Sdl@_(p`' );
define( 'AUTH_SALT',        'lfH5gVWW_6{/AovW^dBwh/gPRe+;H rr9Q4Qppl8ga`DKPXEhkNH=Y~.]n1rQuoT' );
define( 'SECURE_AUTH_SALT', '*E>L1Uw2Or3d(QwHzB/TU{b.DK8IY/K$2PbVbr509J%]I@XKJnqk4/l9!fM ^oCm' );
define( 'LOGGED_IN_SALT',   '7vja#F&^rq}C;Gx#TvA=i|M)MvY*l)7<Gl8|J*{xYJ6?f|6n&b/W{0e}@hTmJ;F0' );
define( 'NONCE_SALT',       'FAcks :/X.OdlCBj}/X>E*68pqJe.^:nk1&5(rmRORqWx&*P9;eq~_25;sK?mc,k' );

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
