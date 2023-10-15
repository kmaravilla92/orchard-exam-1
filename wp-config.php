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
define( 'DB_NAME', 'orchard_exam_1' );

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
define( 'AUTH_KEY',         'd>DBLXah cpqvg(a!v42KD<b3UddD7/;QN],P=>J8GGn8Vy`<&? uTm0;SLl57|o' );
define( 'SECURE_AUTH_KEY',  '<.6/52fr5;D7`7d=Qg$5V=8TT^?Km/B(heSrUD,J0-%6K{{)-1m8!yb)Vn/5co@A' );
define( 'LOGGED_IN_KEY',    'S{bpd/rS6g@:r$5Y!i?Mv.og}gN/:mb}&jWMk6.xugMHBMmDYca%a~tM5R}9SGkF' );
define( 'NONCE_KEY',        '7iK#Kx9);6};I+_dW8-[hzV^m|m-pUU p}Q9/(oX6PA[LQU.jYN mbtn=Yb~2qq!' );
define( 'AUTH_SALT',        '#eb[~rT#4,:6T#73;-,:6o4Kjqo32O~ndv:|$~J4|PyxIHq{tSRd0qYoHK&+K!#j' );
define( 'SECURE_AUTH_SALT', '7_3jMhr3bj3>R$z!Ud*88o`Qz `9(~fkufxlOnCn%R|]H*JJ^!5*T!Mh(Gb}ICAU' );
define( 'LOGGED_IN_SALT',   '(6NP=5e8_JvA VYA.?X|%G,WO?LZG[ 02jv;N$d6J#zyL:e2i X+{VjYb=0/Dtw8' );
define( 'NONCE_SALT',       'qPId(P?`&0ep(`+FEIlKd$ddiEESBW95PRo4xw+&O$ArZ.pm$PLoc(_-t3zg#|(K' );

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
