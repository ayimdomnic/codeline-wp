<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'codeline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'emfe_X9b~u&<&!==ZTSS`$d16Aj0)cIvcfd)qe;YMUYKzQmsj-ynnbo&p5Pzn-wR');
define('SECURE_AUTH_KEY',  'mG0=L~]W@RA<)x?$ukK>)v&6lb|]#U, |ba1i1nN%AkhQV1map}=3JH%~}G=Y}Zk');
define('LOGGED_IN_KEY',    '5q&KrFh9HRlnx*tT};s`u+ i^-uga:q6:{*x~D.Q@mni%(aBev#s#j>bc{OIa#iC');
define('NONCE_KEY',        '0-OkuC`BpNgNDi8qS1T]s.6!pyi0/EWBbFuU.8Za[wu<xAjC/{uljr! #Duri)SX');
define('AUTH_SALT',        '|#0i45l)&E==HZ|EHz|OXo|b8t&})E[<# #~hciq(gV*S&wy]cn[A1e]VNe#iX]q');
define('SECURE_AUTH_SALT', '%XJz[0Faqj{6Dd&alw0#*r6piTZ.KVj(%^$>{%9:[W5nCvQxGr>jN]HS^eo3!4Os');
define('LOGGED_IN_SALT',   '<}|4x_Q4Se}F}3)gzT NQRsAU?GvAHHo/b!7f_zTcWcm0&WI~QCE=:1AH,#?{h!i');
define('NONCE_SALT',       'EVxdLu!jPbS4RDXh%$$Z)ooyJwR{dH.`V7JAo8}K(`]hQCC%GLX$tj_II4bU7cMo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
