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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/tenicola/tenicolaaccelerate.dreamhosters.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'tenicolaaccelerate_dream');

/** MySQL database username */
define('DB_USER', 'tenicolaaccelera');

/** MySQL database password */
define('DB_PASSWORD', 'HT3cLxZD');

/** MySQL hostname */
define('DB_HOST', 'mysql.tenicolaaccelerate.dreamhosters.com');

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
define('AUTH_KEY',         'Y4BvM7u/3s5s4p4&sRQy:?"XvyAJ0dRusjJMN?S256rk#o;jKYHM1zlVCL0lxIda');
define('SECURE_AUTH_KEY',  'p#a8ZZpP`UA/`:~Oe&yNh||C1a6GKy^OQ^F@H|lI*Pc)VZDTkbAdmFJP*6JMp0aV');
define('LOGGED_IN_KEY',    'ARTMLm@4e5^nIIDLwV!anyMU~qY)zFhnkDW@C:VIacyld|ALS@X`wHvBT9^_0D|G');
define('NONCE_KEY',        'Sz*a(Qn1EJ_L56"nH+:ledgkw`t9tLI0n&pfd#;dA|M|81pD0li_fYzLpS$(KW`/');
define('AUTH_SALT',        's)(yx0l%$h1oVAgEO%_@9G&!TCG7L|*CIkuJ`UXFLvLl&0KE/+LMoKNkNNwbMXku');
define('SECURE_AUTH_SALT', 'rNV$ou4%Ni`IfTFxbLk2Ny7Wm`UY*7KkJ7UEMhxj8#!wFHq@/T^UdGRP#Iex`v&h');
define('LOGGED_IN_SALT',   'i|)bPx$v(RC4K&F1%quuzsd;n+A;KPgTtB)xv1!^H4_"rLzyyNCs7ft*!sgoZwnl');
define('NONCE_SALT',       'C!hfKA1/TrBncS!b3qFoFzZ2(bN@:m?Je~V%+qSHVGi@ho$`^WfZ9a1el0uZ;:CU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uezvun';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

