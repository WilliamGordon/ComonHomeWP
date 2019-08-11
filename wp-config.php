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
define( 'DB_NAME', 'ComonHomeWP' );

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
define( 'AUTH_KEY',         'Q(T8^yGRc<NpJ)BU:&X[;<Zwc027c?/v]lL*bh=}>aupKOOpMxtON>}7hUbI@(ZV' );
define( 'SECURE_AUTH_KEY',  'pTyk4%,$GrghHzFP}A-.hF&uL;dY97= GL>Zv!mT+zLpP,=4.uGE5;_CF4ywJ:_4' );
define( 'LOGGED_IN_KEY',    'xg2NH`TAb_)=`j1M2!ztOseL?>2oBg,yMY+@bZsdXj#Zb&T_CKX50R@I]qZ#6A{K' );
define( 'NONCE_KEY',        'icV?vKmRi(ID<HHXmKR#FmGE:1]m0JA+oa&3|Z]f-aOkIV^R_12MycqLwB>NjXJT' );
define( 'AUTH_SALT',        '5X~:cg#.Rpz-oC96=lBWm;C;E6yQ1,(7+>@{sfvH.E8-&U-2eJAj}sq]+BE8,oU;' );
define( 'SECURE_AUTH_SALT', 'z %EJe%?Q5MG-f]MEVWfA<sT<p9I{wJ:.bU[2V#vNsr=)o$0o~}|,hhrhBGBT7~]' );
define( 'LOGGED_IN_SALT',   'KB:|K{Wg%9#/>yz^m]+v#!aahz=3)bNW,R@=`]<S/Rbwt+`J(/UVqk|IObIr*42r' );
define( 'NONCE_SALT',       'E@4>9U(hl7{Q*IcmR[dUhL#z&c&MXUNu$mjB< }LPv2@<wWx.JH429Xr6cLAYC7!' );

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
