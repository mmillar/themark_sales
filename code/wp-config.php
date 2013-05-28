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
define('AUTH_KEY',         ']nVr=:r=vlgVB[k>M}3{n =|ctB@c~m-y>h9;B|G- @-~G&Ry[]vQe+S{$g}s:v)');
define('SECURE_AUTH_KEY',  'qS9kP>]/-$V+3AVNB{dS~es[bJqS<]!L!+<Iu^1U/[c/oq8 }#XBoc$-4d[lYknJ');
define('LOGGED_IN_KEY',    'xP35 %h$M(rZYwO29#TQ$V<XYxqeobMOI#`lvvDPV)+-aZV+W/0DogRgW|CeH<oc');
define('NONCE_KEY',        'wz.V.)~YxOLMM;>X+{>%0Z&zQuV 9d?kLFyzwHl36>J-N*(BT.0pvP{rB6|>o:|y');
define('AUTH_SALT',        'N84}QUQI5q*BZF.ZB9sdwZG;Yj q7v2WLLEBA(c(;00rvprNI<z#BE4Bw~:~rn4j');
define('SECURE_AUTH_SALT', '+w+;I1(!Z@HBvT`|#DLMzGl#|.R*wzqN}5Cy]hSBsg/xgyLdw|93e|+ZZM;|+yQ4');
define('LOGGED_IN_SALT',   '7}4ITCx7=yW-iYR%!D+#`G,P%#kzned|f0Y%,DWa[U-GN`vz63}nL(,y-L.eFr~[');
define('NONCE_SALT',       'ZkNm,dW6l$RA_F,C*H|eGBPUdSStcr7LR(3g+Op_rJjA0S#P0-/sdn=:ubf%`/*~');

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
