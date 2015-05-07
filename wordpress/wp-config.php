<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kvmadvisory');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '#E6HYE9makgoV7j9Q/gUbaRG:)yoJNiu?oaA49 +@W.j,ASWn&G;r5|~m=~{`Mat');
define('SECURE_AUTH_KEY',  'qDZ=9+s Q@gMpTn|-(1(H+p*-!rT+D.82l#+xEhs4 EqSac:G2mQ`9OM>Q}b;lP5');
define('LOGGED_IN_KEY',    '|fU3@>72@h&rH6)-W}]c+|_]s8iO>]M.Ugwo.|T7D 7L#}pA-iMWElVKlUYv@Cz$');
define('NONCE_KEY',        'YU+UuJ W|eCGuqG<~bR$aa7!yc@(5q~g{K:J|}d/}q<BGd?+>x+zzzg-;AE`B^;~');
define('AUTH_SALT',        'kFZw`:BlD_:aZHQD+&zNF>c)Hi+gIKsr;;Aho8z.F?j/5Fi~L&.?6r/G(c:$u98A');
define('SECURE_AUTH_SALT', '>cuaF?/5pSr^[b)ob3g*<Uj%=rmopVn:++u,0LQ#We.9~D6?)b63)Rq.fM#xo8G|');
define('LOGGED_IN_SALT',   '3Uhka^fOK5+d~CLarpq-nH&z&C+R@.+~j&DxfZw&C08j=(cm~(A>&t2P2JZ5v-s}');
define('NONCE_SALT',       '-=;8}g))c =sC;zR@/WE{J=S,xzrxP+FUCumU4K_8:]PEI7|+hRSd([L7G}L.?k]');

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
