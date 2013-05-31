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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '|(=s#,&o5HXAF&q./<o2S/?uH7 _o:@XY@o]peWCC2`:B!7pd-gx/(zdME+C_Cva');
define('SECURE_AUTH_KEY',  'uq?6s{tcMls>te 1 Yq-3w@rh{Sy|x)XDN-LIySfx:D)zyX#UR~.P>^/+D{<)_?t');
define('LOGGED_IN_KEY',    '6St#4pX*W+VS#7k(E-^8t#h,)#fV}WGTbbB_L4OHbNqjL#kp-g|G;yPf[~Y>hSg:');
define('NONCE_KEY',        ':;D#?Tt@d]3Y%1ZjN3;HG||dx6JX8H}qR6EG)Q58rf|;k>*z~cXK,YwGOh@s3->8');
define('AUTH_SALT',        '9JuJT|KBzJ*~y3ZQm6?uc~+9.Fb35`+?z+>LgZhdy08D2<ZXlH,D/+[sH|+[2xZB');
define('SECURE_AUTH_SALT', 'Lju</ftJmHm1cl$oYPt -7X#U~GVwlgMK5$@M,vSYQG}Zs$.4|#7Im&mm}ec!P,+');
define('LOGGED_IN_SALT',   'dBuKO=&l-a9|M45o.-K:z%@ZNJ.pU04l[xqbwc:Iq(Ipf-m8`$}iB/|%F!K018E,');
define('NONCE_SALT',       '/a.b5h&}j^HTpp<bwu^s}V0J|STmEdl4|9W3m_xHXvZS|,fmZRx=~~%7D2C+~tH?');

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
