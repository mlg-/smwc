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
define('DB_NAME', 'smwc');

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
define('AUTH_KEY',         '7x@YtF#64se2hQ@rvS0ZL+,u3G*Hjy{$MTZS<]9I8uz^/FfrG>RS#tD;b$w8y|@q');
define('SECURE_AUTH_KEY',  '6oFR]uiM_uwxC$$OLP5Qwy`4&GNay4^+x/r}F}n-F+%T;bE3y/l;-(AQ])TFGK2|');
define('LOGGED_IN_KEY',    'T;4a+6Vuzq+v-Lzq$z-^5ix!E2d?^1(p*5|7t)_N>!0&MlHtP/yg_.v;+9YzS%6C');
define('NONCE_KEY',        'rqa4u=P/=_CVnC5Z<l-^2&TE[.G:uiem#n4a:Nuk@(1sHDEFo4b.cTH|j6B)]ZSP');
define('AUTH_SALT',        '|u@;p@*Vk#o|AlA)v++Zr)aw(8-q1e%m@;:<41Zu>^m|ee(eZ8(0z}-+k-A/R<(`');
define('SECURE_AUTH_SALT', '6_8VZ&|NI)-mgFn$x#}k}>z&NvlYs>^Asa>8{,%]fW8;E _{{O?Q>y?KO#A=xVpo');
define('LOGGED_IN_SALT',   'N!,-<zL;DzKAau=NtAlV%b/5!PrP]py]*O^~:Us#lTc%6FEuQAe+~`jrVEfIjt`%');
define('NONCE_SALT',       '$Qf]*8Mp)|^o+D,x,[}xD49gaX?&GN^m}vJYBx5av:XZ.@,.(GO))/F%X;bvLYWO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
 // Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

  /** Absolute path to the WordPress directory. */
  if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

  /** Sets up WordPress vars and included files. */
  require_once(ABSPATH . 'wp-settings.php');

/* That's all, stop editing! Happy blogging. */


