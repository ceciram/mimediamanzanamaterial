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
define('DB_NAME', 'wordpress01');

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
define('AUTH_KEY',         '*@shCz!o@}N|#[c*vWy(9*`GqCd1n+zp%,yp:qx#ib(nD_HbJD1*qr%kZBLdVeb ');
define('SECURE_AUTH_KEY',  ',t97+65)_+EyoYV,5)Ey}4$VU3WTp}RH%+Sx%nqGP_^I*1+A<4Fx9t~c ghodSCk');
define('LOGGED_IN_KEY',    'd;>t[xkj1M[g!LIaiaOXPar]TuZ,zcQ4B*ob*tW{_5Q_soin+|pZp<20{*?JKuAn');
define('NONCE_KEY',        '_QP&cDfuCO?jHk0K{bJXd*S%l6mQqKIL[PFHglU;7Bvc*^`.j3-blJ-gl`r|zviC');
define('AUTH_SALT',        '=L2djMz$xV/R %YYe0+AMfdo4ub.BJhQ,G{|m54.&7cI{p8rIIW*MT$],^dQ.[[k');
define('SECURE_AUTH_SALT', 'k9yLPLK5*Za1$%lKjp7o~vGY76HZ71;?Xt~GLQkP<E]/k:qZaePK(;KPzhG#|z;J');
define('LOGGED_IN_SALT',   'O&KqaT{pq#Ur_$l=XP?YQT1Y-0?i3Nc%,Ky$d:tkvnZk!#;$iS+}*ig+R1lcCe<j');
define('NONCE_SALT',       '->#`n&|{IpL7VM`nG]=&[n`;.5*u|&%7-^r)VtVlp{{T)o*[(3Mwl`;6Aq[!:a;w');

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
