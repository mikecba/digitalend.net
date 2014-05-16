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
define('DB_NAME', 'digitalend_net');

/** MySQL database username */
define('DB_USER', 'digitalend');

/** MySQL database password */
define('DB_PASSWORD', 'wanKunt+23');

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

define('AUTH_KEY',         'yOx.FDBApJ+@k6M45..#3auh2AFk~T:,Y_)V>SSiM0Nw==bS,j!U2cpky^luN0hJ');
define('SECURE_AUTH_KEY',  '-qa5Hh4](,bnS+l-TP9pQ<RY|t+Z9z34RPM;=F!GMpG*%DVKoj#/wo~( ->4,o!i');
define('LOGGED_IN_KEY',    'M7Eg-9] dHdjKe;Q]Qr#g6H9|Po|fRgYzQ]6]Sb-O1r)@FMo)7bz[-~:Uo/<c#!)');
define('NONCE_KEY',        '.& 1|ere5*EfD8!r&HvtNZkSH2%oXbRGA!a=//W)4BM{=5#mFPtPqAqatfB2BA|%');
define('AUTH_SALT',        'qI7^]Oj+Ndmwdx+y@{7+?|)li3:CPz$&-42I3[DQ/6{K|au`|pU f9N`sI?[y(ea');
define('SECURE_AUTH_SALT', 'i(+I+mF>Yn4t;EV0A<l]LO?.Sp.NkgLf[|]cxTY3/yC$)9!&{q@}z!R|+u/;_Kl)');
define('LOGGED_IN_SALT',   'QA:D#of-^lGC;^q:d5w XlR!8Y[NSA=WPpY+;eS3+9;g98F>$QOg1+Z{}f*G-*LD');
define('NONCE_SALT',       'OY:dOcl9/1`~I!l+!@h>,H&oE$?L,-5|U:-W}D|1/%OZ6YGu+v6Vr<fvs-XMbZYa');

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
