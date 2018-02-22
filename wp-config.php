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
define('DB_NAME', 'boa_overland');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O1xT+=]b`gx!|9jndX;gZqIs?9>Javx]P:gnpli.p.3??>A&iN#H>5 iiem]l.[-');
define('SECURE_AUTH_KEY',  'Q3A*!ZIO6VE;)P_SnWS9.)bTT-r9WZgnyY50]i,2wFg8vH/Cd0at(y gr/e&=(3a');
define('LOGGED_IN_KEY',    ',nD}W4nef`3)iMo<?_tB]@XxdH>d[1i$w3KML0eXTI{T;_aG0xFlM ykq6W/nOv4');
define('NONCE_KEY',        '5`IT{+_A<]yg]}<HtS6Fy/]]SI0,S2*ieKS7_@:T>Qis,Iib_Y>J{o4<AXE~yav2');
define('AUTH_SALT',        'ba+P6`+N~bu_.|PB{<k(XwN0al5c(_Pc-%gaRwBPMO$ljxh,nZng<$^WN>##~|`6');
define('SECURE_AUTH_SALT', 'whtVnNtH:ui~O6nQx$2,|uO^<Bp0nYy-fBH{CvK9x%SW4Jk&=HqxhCWHqH 6IRTf');
define('LOGGED_IN_SALT',   '+P[0x#GQrw}RG6EQqvunKhb^c^$/I82%; 9 c!uzD]mNYmG[I/P]ed{Pd0+4MZVK');
define('NONCE_SALT',       ',_HbyOAI4m6wn=XTa!^S8NuU gh]#]4nyA+}Qg@r~alcxlfGA^=R_QZ=B9S&.Z[b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'boa_final_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
