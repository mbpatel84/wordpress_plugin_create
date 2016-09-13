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
define('DB_NAME', 'wordpress_test_site');

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
define('AUTH_KEY',         '`^=8pxin,^=,%N%H/WyBXl)Dn Q:*o1GQrFHs^+cL#SMecllz,Lb^;,T=SI*X?k2');
define('SECURE_AUTH_KEY',  'bH,gVYdyJ6^n/ F-Aj$Q,,w;[aGzm0M(x9OR<6fpr#//]X@]+rY^f[V3wg43iniw');
define('LOGGED_IN_KEY',    'Wf=dg%.T!{|:`5@2G{]z.M%fs7smuVA[olU^,)*@Q^>!2cqLdBr 6oD^th %zF_6');
define('NONCE_KEY',        'pP;jK9,]&Vc~50iO7)=f,O|uDj_Ni0#,^?t &ZO?:Fa689lABz}!6@w;HHi{_9L?');
define('AUTH_SALT',        '_BY#8Pgzr_h_%WT_0FFD(NF1Iv`A{;B[,#417]lYUmkaOT?2>VTwg=/f[s_CO;D9');
define('SECURE_AUTH_SALT', '$:9t%f0l!U$M*W4H)V^Nz&*RFh|1/.[G:I6Ph!~QUHZ2f!as Q78o8L4:lG rQ,r');
define('LOGGED_IN_SALT',   '!g%PVQ_OcsMRn*5,Y6%Z^uulcBW})MGAeWGGc<Qh4hWwZtc<Y9Sz}sxw/ygg{`f+');
define('NONCE_SALT',       '6O!+C{&CGyY5jzlM1m&]]?L)7^o_(ynC9?{^?@vP?l=!M+;X`9!T8hEqn uzKvB&');

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
