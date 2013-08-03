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
define('DB_NAME', 'trey_staging');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CYnI#OhC++ym1T{Zo)FvC[NDihWcK&8vy6$DZkOB5v{Q_`(`7r{NQH8#,V_Ya`vy');
define('SECURE_AUTH_KEY',  'bY>ST0TBMPA*ZPP.=a-/Jbf8n2zT&.&rRKNxhzE}tqTkZpKGFV}WJ n6_rM9wEH@');
define('LOGGED_IN_KEY',    'RPRqXf.B~UA$pD.Zz#!NYa *f|Ilrz)%v~TGs4cn{9somcDpG<(~_C(~eZlZ:+7)');
define('NONCE_KEY',        '@[$nn7rf qO)Tomx{8mEHnln.-nrZ H/=O+Tp=V,jV [ ipIE*>?P(<7|,m#k./?');
define('AUTH_SALT',        'wGbY<exOTr6ybpZ5ISRjY}amJRtOAaGc?.f~Z`iEUQVbW$cRmmSKi`$_NJekdR+_');
define('SECURE_AUTH_SALT', '>qsEJr?dNGHR%>a=F -fN?dKWh^opl$AO,h;s`$>VGMp`{}r.-!^m=*-Pqd>*:4[');
define('LOGGED_IN_SALT',   '2Q[:N$C!=s/vXdI{%@>z_uiaUrYZ(IA 9^<bXMW/a@N6:!B8s:Aesk#.GXP`9YAK');
define('NONCE_SALT',       'YoOB3uUuYeJ)I$#7RwX&C08n8nvW2DsVhD5~4BuG;;71WsL).=ZDHkBR[E-oUfX`');

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
