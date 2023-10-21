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
define( 'DB_NAME', 'doancms2023' );

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
define( 'AUTH_KEY',         'sCs#},G}^:X:A.[wV?DCuq1JkC5,;=VDt#kJ+8UBP Sb>goY8cKugmF/:*Y5veQD' );
define( 'SECURE_AUTH_KEY',  '#Jfq,6`-{[p]Chm[aSQ+;ZE2bUY,A#LYzGRi*~+WQ-L1wAZ%,_9 &,Evt?<8aDkw' );
define( 'LOGGED_IN_KEY',    'yK;7;[VEc L+M-%AcG@-/W`ln)kVUzreP4Ry>:TH^U[|7S^W2hGR,a#!T^V?&]Nq' );
define( 'NONCE_KEY',        '5=lZ&V$#M$=iN^6_9j4uuf`?]o1P6xY%@!D,Hh$Zu3depfn|_F1^/yU{MB2?i3Tc' );
define( 'AUTH_SALT',        ']-6 {:D_O<xjR8=GT>7iOkcVLOzhG(2a:CiT6:i-%kD-K8b? 0=,_pZI0td#jthS' );
define( 'SECURE_AUTH_SALT', 'Wl;VFHND2^lNQTn~|Y3A|XxEmtM8iv}UPO}F&51O1B`xUkSy0Zl[gBvEU0[Ml~@g' );
define( 'LOGGED_IN_SALT',   'Qg@LyI+`$u&zfQ4|H(5_|h[?W:a6fry_JYvwyY3+H*0mdUstvMS$lXFcufhSaK-_' );
define( 'NONCE_SALT',       '70Nxp;9%HR*LwpE%J9 A!o`dNQ:NipJ79B)L+p6d@xi-b#^*@19Y=x,~#rhWk~bb' );

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
