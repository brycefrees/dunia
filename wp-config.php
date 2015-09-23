<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Dunia-Live');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-/N/A<u+k|._x|[_&~a,x|Y:-VPo.bv6YMqNKQM/Suo$i)8A|NaDeqqjDY)_|(>0');
define('SECURE_AUTH_KEY',  ':vHdKS=Lkz8mdQ7oNA1*e+C$#2,OrHZUvsUB48HZOuITu8}]^jG]RQ+UT~bdW!#h');
define('LOGGED_IN_KEY',    ':$LR,LB}R}Yzk/F0 Uw<f4o8; }DX%LTSI^z_$Td+wJyU3i&]crs1Eewa !c3/tl');
define('NONCE_KEY',        'yAIsbi4t/-Y}HgA;<Zk,J6vu 8XRzJ^7Ylj<$l9,97FmxwBZ=Ahx*`aA<WjDA8ik');
define('AUTH_SALT',        '-TN/>Jzs6e/y`2WWUY&l){0}99~;^z=&kKBPz_:{xF?h$+/add=eomJAt_a7m#Up');
define('SECURE_AUTH_SALT', 'c1Uw:tiG8lgqn>ue 9NgrrWuWTD==7</y/L>@|@]a(Zm^u<U@z`8hQZ-_z|+Ff;f');
define('LOGGED_IN_SALT',   'En8VJ$+ C<z3>t/P|PYtO},ZQ|6h4sYh#l)</]-$96%J[H1*hzLy1UVEN]89Sy)+');
define('NONCE_SALT',       '9#Y Z?x:8V9+@N>6)QYwF@r7cn+%nu+Ix63SA^9TK+SJ;jb}mfn`Yp`P#9,N;Yy1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
