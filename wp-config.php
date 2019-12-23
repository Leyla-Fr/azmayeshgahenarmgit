<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'class-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')>:|m  WiHIVQNSKEbigZl4D$2nVaD,j>zI|F4NJ}HNaSC:aae,Cz(QJ3psTX*Qe' );
define( 'SECURE_AUTH_KEY',  '.B ^<aZ`)1C7}JlKA5 [%FTr~0O<gi$6||A%lX<~Q}DHM]BH.2qYaR|.D(:e9e8j' );
define( 'LOGGED_IN_KEY',    '8w/rQ!;[9B{$oEXxZ&qW{]:V_s8!,@!i3evZ14u1Y#c./~r?g|uXH(i]FE.x,)o+' );
define( 'NONCE_KEY',        'hWy2/uqRR!T~|@htu:xYEWhh?.1FqPYQ[u^4Y:6]DAzvm28{/v~If<]kGbW4!-FO' );
define( 'AUTH_SALT',        'JMyIq3$8_|I0g}Lh3t{`UCs:*XRw>,HDh@t$hj.UVR-DHP$$EQaF<Ub,<-@fl;9v' );
define( 'SECURE_AUTH_SALT', 's}dW+kQf38BpPH7-r(xP~.XD$n22GK3oxP1g<TO5zPZ#>h-D0.%$CB<;.>uRobJr' );
define( 'LOGGED_IN_SALT',   'XS1.cah6u-l&y^?hZye<m^DY.<Jl9yGhRyPb 4Nhgr)%AmS$s8;Dt}tCA87q){eh' );
define( 'NONCE_SALT',       '1Z``,Aezw^)52Z<[_o,KOIQ4pHVAIT%5nCl[f{g&e;X,O9.dg>=Mv}QMP)V`QJKs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
