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
define('DB_NAME', 'dstgy_wp');

/** MySQL database username */
define('DB_USER', 'dstgy');

/** MySQL database password */
define('DB_PASSWORD', 'xyW8pFHTFt4pL7r7');

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
define('AUTH_KEY',         '+0p@hd09DLKXAp50O1h5`?bL`/OYM]oKStouWEi(-Q4;oK4h:-RySFcooHvcaH)Z');
define('SECURE_AUTH_KEY',  'I->dyT4p]T>y7<Qt}6DYJ()A2`m*<r$A1c8%y_qOQ*(BMa#xPF`q[L!54EmsYKIq');
define('LOGGED_IN_KEY',    ':#]P)I[/dYQBV|!t_!I^)Q5d(@ANC*VvN{q1XW1W)w5mg[Kb*EunS4oj:8RAL EZ');
define('NONCE_KEY',        'FIB6^}jN>~=DkGr-Si,~dI|N]I#&;hB-MDVUd$C(qFtri,tUwIW0llT.OmNJpC>3');
define('AUTH_SALT',        'u)R[x5)1|PP%/DJ2}~s:*_j/*.C@R8+!^#ylMT|E,)SHamt fawUHJ-*#gi PbZ.');
define('SECURE_AUTH_SALT', 'BQhRoGR!~hy*;E&,0?y-dWs&vGSfv5^_ELw+KnBl;TyJ::FhJ ]MCO)r$YSv>H`B');
define('LOGGED_IN_SALT',   'GLD!;z|Y#pS_-i%lNN^|-^+DeWQU7JG#OEn#~Tr%dg+;1BQnzBR;-H%_|:xt>v^|');
define('NONCE_SALT',       '@XZ&e)Bh_.evnzeTJ1_xWSp|*)hJ:jQM.3a9Ds~@vj2*(wJdQysnWSKN~}SZ&sio');

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
