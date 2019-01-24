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
define('DB_NAME', 'alexanderwp');

/** MySQL database username */
define('DB_USER', 'mysql');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '4NlMR`[%K~9]F?DSsoMYn*!O[~CcH$QbyVZ,7^aAy_o/A %x1TdC846Saz*>&RpD');
define('SECURE_AUTH_KEY',  'ZSS*z+Pp_%|F|-.-IDgY[BP[|yvmN-i=hQ,AXqWZLMl:/:I4Y`;L{$k>A^@k1_`:');
define('LOGGED_IN_KEY',    '.dRN$wteV.70N;3coj`@i[4P 7!FeMsavJEQRsk7)USoy>Rs_.R^.3#/F}NI!?UO');
define('NONCE_KEY',        '|-zN%Ro$1>k)/]9=}7n3opwboVhZ$TUs,RXfkkvLi@ W<5NUx|rRKRz:e6f@I&Hm');
define('AUTH_SALT',        'd ?_56jFbDa^@2ovB,[T4+RC`m-%om9xBH9z%SLF8Z?os}jb_SCut;mb;TeM);.,');
define('SECURE_AUTH_SALT', 'b/5Gx[9DfzNdn6FY1#>H;]d;uuIwFM;RNoXG2`m1w|sL?Q.D1!_6JdG?bdWr58bP');
define('LOGGED_IN_SALT',   'g?&3n8-nu&c6bL^g6dzL5JvB7bf-3p1V^DKlv.J FuX+;9qJR|;B6+5dG@Tw+v*E');
define('NONCE_SALT',       'Nm!Cl$`k)bmJ&tI$2Ys30e-* fo?<F:u[&ZJ,?iO%F@L4J1MwYDLF;~^ $}W-%<*');

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
