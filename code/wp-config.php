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
define('DB_NAME', 'themark_sales');

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
define('AUTH_KEY',         '3/)Fl|d]4~iuIb~s4:d}aKKezM74~rx)*E?:b|PJ=r$7oI^kZ!aj2&!w-OeK3>+a');
define('SECURE_AUTH_KEY',  '3Fn|c[5U85d17ARWi)dT48dgBAEd|-T9PX=YP7L|@03G=*_jV[CJEI1d^>T~!Nys');
define('LOGGED_IN_KEY',    'vB-u9tt(D4*fZF>wv8,o&V8-VMsm71`Jq-tl0/vu5J})]fPzm%j0YP]&a+jr9 X.');
define('NONCE_KEY',        'bS6.`#--0||rMhCxfD@A5ww@AQ+JWdV0@gOkCAifM8-e09J{U>zm}D-k:/<|D~qi');
define('AUTH_SALT',        '-8CZjc-4(_E-cs+<ViU$0@^e-c:0MXgjfI>@0srI2*%mc5daOft`z-|L7_i:IHj-');
define('SECURE_AUTH_SALT', '+[q]^NJ[9X2nRSrFO_@H)4Iv*C4Nd^%{:Y#lu*ryx#a)+cum3BvFrYU$(fBe6,K<');
define('LOGGED_IN_SALT',   '3fL7+K-9j#|LQK6I`*mzxae272T/=SW%qxg_$>|RZ.E>;W/I4n1*K.x`(K6- 7~G');
define('NONCE_SALT',       'pPx~ukEPaKEt!$Z]1a0+*P5sdy<n}#!ZKph|W9,C;nrp`~<f@7Tzt=:Jv/bx)hf}');

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
