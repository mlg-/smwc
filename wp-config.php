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
define('AUTH_KEY',         'k/0+umX</R3k|+^KF?E;BA%P*R#*hygMyE;EWyVz?95Wzi?yr4c[@)<wt~C@Z_Qs');
define('SECURE_AUTH_KEY',  '3{&#+AC: K?SVv,$,5CXfXvLl,LWh1?wS*~+yK0/8B1(A!Eu<%6o?zzfp_Fvi*Y`');
define('LOGGED_IN_KEY',    '9!I7Gzc.2>AHK*etvm/8-Jzxr}NoV;BQHt|X%>.!Oz 2AQ?gDmK,,6!Pi-L<VXfz');
define('NONCE_KEY',        'G1?+<1)I^ZW{7Roi;z>Jsx_qRb<[<S4+)()+El|^SpIZkhX2Fk+,mL`+g$+hP`!z');
define('AUTH_SALT',        ')YsGylSCeeUNER>bA-$qa}P&q4-tyQ!1%0_[EGMd+|c]>INP1dB}R7m:Kr_H~zfr');
define('SECURE_AUTH_SALT', ':J*XD6IRGvPwiES)9:^s5[?xbA_R *--tfM*=pk>co]qS+|/!wh_&Q4[gz,h@i-P');
define('LOGGED_IN_SALT',   '&ZY6FZjO^X0S3lG%QDVs&FT((+oa__/u.bk:1([<z(~f|-VkaUNbQCU-WYFdTp{)');
define('NONCE_SALT',       '%R.Nz=p6KIene`3V|/ky+xZi*d$sH|),(^qsS|]r=[8i*D>Re|q)1Vy<2fn9QOUU');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
