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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'w73!t[L!jST>1wl<Mh#LW-tFX98cR<GYW:GR[3mK0Q0i1f|Op!lrLW/cBYp47sow');
define('SECURE_AUTH_KEY',  'rM.&[ojoAq(Rn_8P@{DuRzFMjq| +c`46#p+s!u`gj_<=ZbEs,[KE8y7=$F1!1v$');
define('LOGGED_IN_KEY',    'qrVq&Xt$Tfok|gc_VkShvn#ih$)Bd5@Fj.VJOzS^^E,u<XO uyCtWs3p(7]oH-#/');
define('NONCE_KEY',        '3{;zY.%jAYrD7p6-K##Bi,o&8AW*pC-yhex$|tC&0CfT/@)J^(OIs4vK[PY#!#H~');
define('AUTH_SALT',        '.asonNYi~XcSq4@IX9|Z Guk9t6{uoOd8TAtU*iQtUtTL}P$^WO;m{*3746b)6e>');
define('SECURE_AUTH_SALT', '$7,+W6T%l3&LNtj]pqe5McZ}d Jw`*$RrdOGDn%!E2$_Ao0xNjq$:+sRo0HK=5nF');
define('LOGGED_IN_SALT',   'BGBcn&ey$y~TAJ%8l_!NiF;d3jtcKJvCWW*Ig(DL|;KIDPiw{!: E&TCu.R4AB}5');
define('NONCE_SALT',       '3jVK ,@}f_;*?6rCi<3D6OL(+,-tGYNBC]X>.U:/~{MW}O4<rWbJa[WZ %U}OMtS');

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
