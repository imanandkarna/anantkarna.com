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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anantkarna_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'haB,o#$2BHVhJCea.m<T`N$YFTS{~SgOI)&4~FWW  a+|X=tVSksK=mAgs[pd-~3' );
define( 'SECURE_AUTH_KEY',  'Npy2N2#DE<>v+V#:q{x0b=L^$Hoqv%%IVi~v(}Ba5M3q  ed]K-@ M4LOGs&fU,Y' );
define( 'LOGGED_IN_KEY',    '(yo9*{Tq}&)cgf2FBxtN`9j!r^d4EM[5Ace.ZhTd*wU.1iM}]lJ8RHi4^a@6TF2(' );
define( 'NONCE_KEY',        'vXYf1B[QPg1k&ba(){4<r%wypHd{]2z%/ebjfV_8N_q3}Nw-)*atn|/x.{%; FME' );
define( 'AUTH_SALT',        '/~R[R _H?}aE ~ae<drleuiO51m(?PO-|,U&8jAobrOUVnGQ7_[}!fMZURpbGiA3' );
define( 'SECURE_AUTH_SALT', 'IzGe2x;!q<Fy0q-,< zK)U-%vv;pBb>F}WeZ903Z]*F@KG`K^(]emNcdo^y~C0U-' );
define( 'LOGGED_IN_SALT',   '!pBvO#-OX,QNuB*mR@qT;OppW$IuM%rk!{u<mdQ&nJ]y#ucWixr>n `XMzg&BYVb' );
define( 'NONCE_SALT',       'ZrtsQb,S~yMV^_j>KITw8%I9m}%*?5/~}WWAOJ;4nlCI4V^Pji4~KlYiZ_T9`>um' );

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
