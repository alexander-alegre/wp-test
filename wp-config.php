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
define('AUTH_KEY',         '>uAPv(uvL2O2{0*de3YFB{+M-=9dO)6_zqN`$KrYc9sA~2k@mnB6C]3n672p3mO*');
define('SECURE_AUTH_KEY',  'SumQ.pcmvXlO7DnAKl,J MhiMR.}L)`9Odu545J!d<(41MI08wu?wy,=`o#X5u7G');
define('LOGGED_IN_KEY',    '=rFS)wNm(U~t,SnPzP Jy5`M+o<v_RP{!T[O{cTzeq+J T{fph|RGJQypKfIw&yF');
define('NONCE_KEY',        '<IQ5xA$KKs,KLbjGF={-QL&9Iq)z aq`BbTduH`*{#6=L>Doi!gl@,+>!#&nh[sJ');
define('AUTH_SALT',        'L}5>C6SO+o:btB7[MRInOhFz|x,K3PW#p~ndcX$|(tc,XMzq+=7:;+ G_~UK7oO.');
define('SECURE_AUTH_SALT', 'ab_uuac5gMr,P(`sK}:B#3*plu`3Z{OpnH[A6%orLr:_Hunit4bG.Ia7;.*wuQ,M');
define('LOGGED_IN_SALT',   'F4<Pat47rf9g(>S!CYj1RykY=L@rF[y2&P[<z{7%x1?sv5cps5F-.76.WRP4!1~r');
define('NONCE_SALT',       '>S-;{BC^T:Q/)J0R}4DQG(MDI}A#lT|&S:1)}^60hRP|?&MY1:6@dMnr`6``#m(B');

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
