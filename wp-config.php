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
define('DB_NAME', 'accelerate');

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
define('AUTH_KEY',         'f(]&5sq~/KQpsNgMy8@#$npG2*{KLy7(tJ;UX1}<6&3UACh?9Qna^)7D)BZaTNi0');
define('SECURE_AUTH_KEY',  'kJR:|_qdW:MzX,Wpg3HpZPL0 L_f~`.20:+9>LVBFT&,Yyf(lz[tARTzIi?AdYIg');
define('LOGGED_IN_KEY',    '`;S0kaaLQKB.2.@o?ZjxocAYlb{&1$R<3J#B^$rpV_~=4Ll;ND#oFD=L]oY>F^f}');
define('NONCE_KEY',        'O~0RMg1*nvI,O;r,ac02WMuP4_hu%B%.%fBucb])av0p0pqZwDC^o(xM_3=`=!rE');
define('AUTH_SALT',        '4ng]AbDTv{{pDx%Tu=cE2f9^J$Olt4I%5d%0%U!F jkM<O}xO{E!Lss%wjA~Qn_H');
define('SECURE_AUTH_SALT', '-/?g,h>bTr4^oOGC oYG6D|)umQ_,A(u4lw$EPfDmO|Xg)S8u^u7Q_;3E%Ni#U3,');
define('LOGGED_IN_SALT',   'JMiDavV_88zEr1C9vBJs{rb9cHD.nY/wwv.N=Oe~xa.O*fH{D>hdrQRMjFUir[q!');
define('NONCE_SALT',       '&0[AUhl&[Xt!k*>3x|>M3e@^~Q0!q.1m$y%{.SB4X9kIx~uIgdH<%[s`M(D8V*7b');

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

define ( 'WP_ALLOW_REPAIR' , true);
