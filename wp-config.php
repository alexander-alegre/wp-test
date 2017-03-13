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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '9knefrayn');

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
define('AUTH_KEY',         'Hk}5+3J4Z4D$7aTt2o08CTIdVO2SI<@?FI=J(&M#.v$tc1r0dj5x+P3tSl11=/m~');
define('SECURE_AUTH_KEY',  '^ciE.C^F{xN>T|WW3-Q-y/k2$rq?n.aP=Vf<Rd;)7aF$$aCMDX9:7I1tgitr:ym~');
define('LOGGED_IN_KEY',    '191)P3X}0[S!2z=1G9ikp0]DL8 jpqy0#ZDWkR~pUY(NgmQo26sB%8^jkmtNz5x;');
define('NONCE_KEY',        '.g6t;d:0^;k ,dqjX_Llr2FCV<X/y-a>m4{`eh3BE-+hsd6hAZeu8!qW<hKlqUaU');
define('AUTH_SALT',        'jc[NTYD(pi#j9*NyWyJ8Fvm()o[KE<J92i9;!:,M<?=*EDad@f[[<%R*oKAH1*[)');
define('SECURE_AUTH_SALT', 'efbn;6s>{@mY hq>8kOgA}ku?4kqoY#Wa2T=uuu{@5NFS1o_=>{t]x)`nN= 6F!|');
define('LOGGED_IN_SALT',   'S~51%<+Rv5&!4 1*>]#VHx;dF:g3ie@@/&d:zeS>5G*V~#} jaZ**Zwv2:i)|K~O');
define('NONCE_SALT',       'm8<Z)W|$vfds$5_DtGt_bguR0:N<Dr$Z*e]?$jc&%r,(g(]f2<ze%m5KC-S^;OBk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
