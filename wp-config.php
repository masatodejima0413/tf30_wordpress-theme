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
define( 'DB_NAME', 'tf30' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j(KBD)OuMN7@`%2.,REMw:J4DZ7hja#rH/#yo78Ghm&W}`My*1Fk<GHJ@6yt-i4o' );
define( 'SECURE_AUTH_KEY',  's5N}I}$(rbxDWpd=z,fR&Z,ScL|d4MLN[3f.#avs)iW[{gpp6__b$HBO6N-.f3|c' );
define( 'LOGGED_IN_KEY',    '<Zvd/6q<}SCfG:x<Xz`CWtqyV,8(aW*-C2F 5v(8rMLvcy8WqTgT@:<3aP]m(2UD' );
define( 'NONCE_KEY',        ';et)l8Vv,*N9;<};@+y,d-t1@R?(q@MRTB7)>Dmamtz*aI<((ylA!j7l!:@8k1H5' );
define( 'AUTH_SALT',        ';x/3xq]qBvNV0}]qF)>UPUukicwh7(WKch^N6~BH[tzwH3Bxy.@WrWSwd+qSqM^U' );
define( 'SECURE_AUTH_SALT', '1W]56CZhDDrPErIh{?R73TxgEJr1%^@lG:lyN,FprvKBS.1-v}v{4V<&7$@p;Jy!' );
define( 'LOGGED_IN_SALT',   'tbeFYGH2AXNOiTYR8B9>Qx?I9)hL5n$a!_IU~xtWY=vCH,rZa23Xr@,AkRlQKiyj' );
define( 'NONCE_SALT',       'qH.*8QC?,P!3m83d;fy3Z8?mxX_9$B[9}0LRcyXaMbJn3z.55R61ycu>I4&GGmh1' );

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
