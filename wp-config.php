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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-skeleton' );

/** MySQL database username */
define( 'DB_USER', 'wp-skeleton' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp-skeleton' );

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
define( 'AUTH_KEY',         '=C1<s4QhFi:=M`LpO2Ebvep??J$,6sb(9*+2.x]zzDPyy;?#i7RI X}pOj@cM,1O' );
define( 'SECURE_AUTH_KEY',  'mM}2a>8!-x+R]mb9|*8OWx{sAKY)@{/.fND02z?YlPAXc!tb&SH[TMw?F=mj>.QI' );
define( 'LOGGED_IN_KEY',    'h>4j55#{1uFd|ORd/8&-,lLb({^}<*upxvM]HDou?n!Mpj;*=E aO;zW]9HrVE!M' );
define( 'NONCE_KEY',        '4QOJbxWK!=+W/#S=>l0[>noY;Hsi?V%}yQ2gM!Z?Xz3X&u!)hP>9EPRnde<z[PK+' );
define( 'AUTH_SALT',        's+v2$S}%b88UQs/K,gtv2RlXKO_5Ud(,f$q?c/]UO{txh~#vBUsJw4o H]e.mXt/' );
define( 'SECURE_AUTH_SALT', 'G>:_AN_4zl?7Z]_oWYquHp~hus>OY.n9m7Cc;4t.xXn7cAW+(7&v,I`fN27{qb`P' );
define( 'LOGGED_IN_SALT',   ']K_QEHCGuY{l2,/%QX$xqtL(eKB2K]CT@cVcFo>-LbG!z[^]B$fnXEKqAG=u@W,s' );
define( 'NONCE_SALT',       ':c5`;pbwR_JR.]qg^1~R-?0h<0kC8~`WleGx/qyh4},tM8US}244VF&<mw 6qGh9' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
