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
define('DB_NAME', 'broadleaves');

/** MySQL database username */
define('DB_USER', 'TonyLucas');

/** MySQL database password */
define('DB_PASSWORD', 'donbradman');

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
define('AUTH_KEY',         '!_R%}zO].zep?fE,C!+3K~E?awf-c?(?vhT3^4#m*J<GX^bS|{Tf0@@Uo$pYt0rk');
define('SECURE_AUTH_KEY',  ',qR=KK$d(_zGxNqW)woE>Z$6kEKh#gn1}YvIE9__K2wCeL/J2]*d:J,|TqbChKyu');
define('LOGGED_IN_KEY',    'v3;see7@DRG_UBZ;mLvb^HtTM4>G)J4Y(&iB GRM!FN|@vHn}J47OffqT1Pw9iu}');
define('NONCE_KEY',        '[}*O5]EIRmOs71jSRV9h<s)5Y3NeP0z-=YQr0HXGP>R7+*{Lx{ H_>^A7<XosAKz');
define('AUTH_SALT',        '?7p)VQLT(hpZ<A{/]Gw~Po@WQU*:nYkjZmxTz:KO!;C2;}KurxA$X1x0E/Xvv[CW');
define('SECURE_AUTH_SALT', '87#C>q+P;;RXwz{Z%khTeX.f6A}Ch_W4N07sikxagnqp@,<uI^*TSCG#{,A*Ddi4');
define('LOGGED_IN_SALT',   'Sv#FjMTD/E@|@@&H}E(eWK9w3T_+:e)4!Rg|>~+=$3arB8,?B8`ET%q(aaq^ GlJ');
define('NONCE_SALT',       '(I%W~uKd4nIS]6+)M>6Ly_;9.1|4~q5QEVtijv46x)4MfKu5neFF~f`?(xRq8~]=');

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
