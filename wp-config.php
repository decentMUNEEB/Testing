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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'qNs?_>dPAaNt@o0atjgU]tH2Wat7>Wlp/+/S~|#gONixUq$W,;X<tII%tB6c:l?y' );
define( 'SECURE_AUTH_KEY',  '#~ZcgCdL,=xe&1IX]G{66jy~kJ&v_9AY#((tV>p}RZcq+_`o0E!$ED+fxUG1K+21' );
define( 'LOGGED_IN_KEY',    'rS2cW$>kcw,Po!V/YZ(}lN>.r K~G1^iGM-L:~g$H*{&R7_k:dU{29:XUO@NYu)K' );
define( 'NONCE_KEY',        'Lb)g+Q|5tWXi0J;*`^/$0n{l>Fh`mnxQo-5P({:8FPMURE>^bK{zip:ZR-o.+F3-' );
define( 'AUTH_SALT',        '=%~)#8EWgGhj` P}Swd&^o;Z) j4Ocp>H976UE$F1-h_?4MH3[s#/mNQN6&;paK ' );
define( 'SECURE_AUTH_SALT', 'f6Vr9Et78N8PjV$ouv_c*q#F/2]o+ml,:_gwS{SS&-X5@4(mdCT]fg@P+WUrtih^' );
define( 'LOGGED_IN_SALT',   'hQY z=a&B>Wa*(KencjS[YP/^1Nd36*Z~X?>)p+w%]Re6zk2CWU*0*:](4xE~o+I' );
define( 'NONCE_SALT',       'u3m8KcYf9SGMt}#pik{Y<96pZIBv4QHK;=/=f6%4-%!BJmZ(7wI~b=({amALqnf(' );

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
