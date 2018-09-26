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
define('DB_NAME', 'Chrizien');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         ';]KT]V(M{Q2n7Z$P14ia+kASF-aW{Z<Q,=L@)N@k6HvhRK0Rqu}zMGv{(0+|Bo(g');
define('SECURE_AUTH_KEY',  'Nk_4Iqo+dZ*DcW5x1Es}V+uWv1yV@iW^|lP,1qB |6ri}-$$6}&T-I~Ch1r2Z$3/');
define('LOGGED_IN_KEY',    '5>7}c$BvnzDF1k/#9&ZJipEYB,uD1oGrAwH}L&9DVFZS>#*ry$o)0$V*hP=R)EqC');
define('NONCE_KEY',        'qo*!X@8eof_H_zMv?]*VJrBNUN)&z+z61u99P$mf!dT 9dnx`)N7dIRr8{#-hAVj');
define('AUTH_SALT',        '=%7s.mLZSg<fwTcdM5ku):TEI@:<Qo9n,1Dntz($6jk|7e|4hO2>.]JBv|awh&I`');
define('SECURE_AUTH_SALT', 't.@V9554gVE&wa5Yymq>zss:hJLMrJY&MJ/q?e,|d8nyJ.g-!M(CYs%1_$p)q<v2');
define('LOGGED_IN_SALT',   'kAUoL,r0y4N1nU.2_tG,Ej=j,[Q0#EsM3n>]Ulv!u%w^b5-5cE)wQ2/!Q-u (zp{');
define('NONCE_SALT',       '5VF/%Cs,;l+g5}F-weyE<_EC2_cdEawb&+}}z!e*F-Y*J}x#TWC]cJJuc#*(Ba9h');

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
