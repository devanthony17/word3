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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haki' );

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
define( 'AUTH_KEY',         'H1:pwEm4<=>pdo=4ir|rH)5ep,w).?%4H@ka=MK,o&5?%JjZxvWRMu:UIA7$<qn2' );
define( 'SECURE_AUTH_KEY',  'q+)N(@FeIH3#2pzW2o=!QfE)DUq_U4F2^7{C&K^h@PTRyXOUTB/&T+L`.6.D,sU`' );
define( 'LOGGED_IN_KEY',    'xgH7xn_Z-xD%Q=V,TFM+of8l[c<`MCml%1S:FQB(3dqDjR,mg l7/4=D-IIed=5<' );
define( 'NONCE_KEY',        '#WlqVH5MQvH&U&S^2TA#5p@5Kr]~JbJo@Z33c[F^!IK)NhyQ*Me%45hmF2JqUop|' );
define( 'AUTH_SALT',        'J&8,2Ys:$=I92pC$nu5nJ4]~6VT=h& qQd/8vMo.&VN9,[r *6+ssh(0`[ij,j_}' );
define( 'SECURE_AUTH_SALT', '*9E~HPkPO&E^>?9#r{9alH`wVy(rwfis-X0L/Hz3l pjK8p#dWrZSEG$SYyw^h}j' );
define( 'LOGGED_IN_SALT',   ')mpA$@%X|YPV~?O-5!Ymb(,J[,p/Hu}GRu.bJQ PIN:}VlPUQksF@wnVZlw`^:U+' );
define( 'NONCE_SALT',       'Ebppc+r =PVMn??5B@gB@Zl*p^j_ET3RFjQyYs1j`(lP5t_>b_F[9+_,U%ZZMlxi' );

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
