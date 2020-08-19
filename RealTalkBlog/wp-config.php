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
define('DB_NAME', 'marthaburgessnovak_net');

/** MySQL database username */
define('DB_USER', 'marthaburgessnov');

/** MySQL database password */
define('DB_PASSWORD', 'Toffel81715');

/** MySQL hostname */
define('DB_HOST', 'mysql.marthaburgessnovak.net');

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
define('AUTH_KEY',         'w`;x;9L+7Azn*?9@H64YN6_bmaJ|F28t/qb:n01qKhjua7I?SifQz~_b96k@n_t4');
define('SECURE_AUTH_KEY',  '&7cB^Mu(q;rkz%7bko8PStjFs|p1aE1$LfL+WMrTLbY1WKN^+V+qRa_n%w?ji)&8');
define('LOGGED_IN_KEY',    ':~D#+`ms!So363yi#VDXBbTPAnrqer3ZzYyt%&IwG7KpETOH9pH:kh&^OJa%4*#Y');
define('NONCE_KEY',        'nH@PUPY~fB|X|Dr8f$"878V0Jbjd~qbM0:xt3A`wqaZPM^Ktxw:MT0t2kWomo(%`');
define('AUTH_SALT',        'k76x~|k_SftRqT0de(nME#F+W@r"MJ0FIREu9p:o(97@R`r!ga^y/+niqc2:jQnF');
define('SECURE_AUTH_SALT', '@|se&"83*HfnVSWOrGOBk6WxPjT2`UHwBQ2kQ0#(ri;WV|MWd3j2(f3fL9It*;hN');
define('LOGGED_IN_SALT',   'iNi;nFy0+?RsyAY@1t5PZY$zGRn/5:$Jyo$wI%Wu53tp(lO_Bnz5c0i!&@VcIpMl');
define('NONCE_SALT',       '1D6oG614r&ZDE#9taTC+XX:xd?jRwQb$_*2T"4o^%wk5BIZIV01Hh&_61mqR$)EP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_qp6j6g_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

