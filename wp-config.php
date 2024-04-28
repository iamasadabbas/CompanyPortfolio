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
define( 'DB_NAME', 'wordpress7' );

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
define( 'AUTH_KEY',         '4z,l@J#iah8R _;>>~10<wE3P5RBTT{I=|omwoVu?HG{Efkj|IdNvTmE!8R}*#sG' );
define( 'SECURE_AUTH_KEY',  'f0EIg/;Bz-:]MsMJGkHl.@JK#kYvSp`N(0K)t}+$LH_YU_.w/ptb9KfETA(aDjV}' );
define( 'LOGGED_IN_KEY',    '3CcA2j$ie(-)N/UNa%3KjO-]][B97dh,IjGC2v(T`uuC*xS2S:f(v^r37-xhlv!U' );
define( 'NONCE_KEY',        'O%j*!gmON`_h&O;VVqyheB9Q-B[ijl9y3drcv{N?tEgR|)F8lC2363{Yy?ePwq-;' );
define( 'AUTH_SALT',        'BOuAoA#:a}H93#QnNDHJ=y-aWuj@~XRg~+UEEaa&lr7>Fi`ggjoNOcLP<K:yP@,W' );
define( 'SECURE_AUTH_SALT', 'QJynKat`.CpJK~n[s}o5w,A~5cdC.*C8gc/Vm)JI>TJ)ZV3D)tfL{h[W;&l__~pP' );
define( 'LOGGED_IN_SALT',   'C_h&p}hEl,{8>S7X49 S8Z5|*GAUT8[(6v0o$[lc QitOvXh] AAM?;)HwBJ;q/E' );
define( 'NONCE_SALT',       ':wwB=Kcc0-G6T>wop5yiC(OLYF;Q#cQ%Au-.AxzMvUm8.AM`]y:q{!*99l^(^!v?' );

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
