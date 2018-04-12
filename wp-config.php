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
define('DB_NAME', 'ozonean');

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
define('AUTH_KEY',         '1>we3Vl1B$i[0;9`T=+0Q#a )<!O>|yK]r)mq_*Z>dLu0}#AY+ZeDWv f[Ag3xav');
define('SECURE_AUTH_KEY',  '%aJlTn)`)/~k0l<^+n=b<+ v]ZQ~EV<gEuqOTT/fxT;?ts5Se(Mm!CJI23K:%W&g');
define('LOGGED_IN_KEY',    'I+3pERP:{d/T^3uz#;sWsAN{+uk)jy%Z$hxJJH-5Ph?_R&&Ycw<W%Ej~lqvXL6fX');
define('NONCE_KEY',        '=w]U_-+9T!)yh2Un~2]}bg0LvNU 3,ZNrY57X-&=>3x%ut(x/3}S8Vnu+o5NuE^Z');
define('AUTH_SALT',        'SnKY!=;3kf<YPd/kwG#s;c^sd#bO+Qv.0N 4_[Y`Kgm%RxG;Q:QL95(TS@Lm+7)N');
define('SECURE_AUTH_SALT', '#eB=_>S7-K(~gmUH`?=&KJX$jyxhP|tB{.nD$4*W3C04v%^gyKF%~U6+qMf;]v:R');
define('LOGGED_IN_SALT',   '#jc}pO_@zkfZg5w 3C2D|1,36R|%CGFgZ+fcbi;nO|[{z1uCH*/WdC:Dv0#VNy;+');
define('NONCE_SALT',       'Gwj(Avuc/0JZ0;i:>e.3bCe1[,wkGcQe8+0u`.YOdW%L0HE.v+]E(sLA!p_utU]b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oz_';

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
