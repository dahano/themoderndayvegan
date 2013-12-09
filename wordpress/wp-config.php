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
define('AUTH_KEY',         'z#Pb%I%}ylP+!Y=J=v!|3d3x&xU]GuC~KI<M,n.dQWE4EOXp?o-TU@ UHdz_m8/=');
define('SECURE_AUTH_KEY',  '8M-8b-&~A/_?R7Y+_!Gt+|?VMFWUgRx]Cp*{)~+P|Cm1~oLyL4*ijRdb8{0-LoXD');
define('LOGGED_IN_KEY',    '`I!-/E;k K-PS;l|V L?umfR?E.h{l$9-Dj(3NTsT/E|N`*q{evA&O2.|e Po_8+');
define('NONCE_KEY',        '>%#<|qR,$S+lI]n-{6tSET{C5DA8:Y.1=y<!_<bjH[n&|cU|ZS^bw`||T@KjDsf@');
define('AUTH_SALT',        '4w6DwQzKd2|B*kn$e>nEKm flPxB(Bed{xym7DFul$bybs;<=!]*}Xjji)_U|q(-');
define('SECURE_AUTH_SALT', '5^v|/{GBuY8O~v4J2a?P_J`-:+p+!`N+1KU]/j_kh-E@F1HFB6obKqT$4-+Z-2e?');
define('LOGGED_IN_SALT',   '}{kU3`K@VwI(;$viJ1]I%|`Zu[YDziyLQ1 QGX1=%m6X4$8~S*a{T8xq0)*gnv|<');
define('NONCE_SALT',       'xy#>gzAc#%KVjYeA#lmAsd)USqd]|{]w|Vb}ZalE?5^rRXq/aKIX4]aM-uokLD%D');

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
