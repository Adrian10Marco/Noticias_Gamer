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
define( 'DB_NAME', 'usuario' );

/** MySQL database username */
define( 'DB_USER', 'usuario' );

/** MySQL database password */
define( 'DB_PASSWORD', 'usuario' );

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
define( 'AUTH_KEY',         '1PM.BCA>W21?D~bCVB.>y2F%-t%oagMgp5glkY{B<%Z^Yp6^w%GvA2dt~-P>wor~' );
define( 'SECURE_AUTH_KEY',  '8dj$$^_%piI_xZ|*$inYljzOnJMQE`A=8|Z&ec=b@1/0IWHKY9[)7=}EPnk9?];|' );
define( 'LOGGED_IN_KEY',    '^LM;`C$>_/?&?%.lChW<C=O[*IFp5SJls[+ux}A&W: 2OB,VW/;e7IG;0b}I{P5p' );
define( 'NONCE_KEY',        ';ASW{[p3mak~3AqX^|>m`C~u~<gmVj0~`mAq tv_N5oqS%-~JTcD|0--_Tx,$.]7' );
define( 'AUTH_SALT',        'V/jiMKu+8wBTn5#do_5p^Il._0L9X]g]!x#b{$Ysr@M>R-/U|E:|H|YJ2pg!G[.1' );
define( 'SECURE_AUTH_SALT', 'p;a2I~<Sx@fz1Zm@4eOa;N[~5YYoUpuf[ 0P$;=W19atQ`GAi,3BPR|O49CZ?~vV' );
define( 'LOGGED_IN_SALT',   'yn/)Rg9kR+7d+e}3*n?1G$?d_Ap^i83}2FD>,Q%{W2J}djcj8BzI+zy4&^d1Z%bv' );
define( 'NONCE_SALT',       'zuU?[8VF`Nne~<pOj:MG}48:N9a0tu~[_!r<D#0A)2q@T`nfY~sN0}Fv <s;a;7S' );

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
