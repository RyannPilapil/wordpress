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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*{z+|5yb0vCxB@M,yCa&3gb+&$uEJCQw^^fsG%vIYXZ=2Q`8`$O}=Lb1|jN1~#/o');
define('SECURE_AUTH_KEY',  'QnAa=Y*)RnaG&2O{]=C=BL!:>1f[/^[1lM{758&_idG/=LAc1:qWL]K=X<79a6m1');
define('LOGGED_IN_KEY',    'F>F2m+}@7yHEF+o?A&~i+Lp5ep-A=Mhj#><t){dwG8<eQZ~%0L5.WV|h@*JnSzjs');
define('NONCE_KEY',        '^=DUFud(]60+?|T|:j@kD7+%BdoW:tQj[8)Dgcvj0WA~p$=$Cn1Q!R]Z|1l!1_Hg');
define('AUTH_SALT',        'Erhp++@0e3FFYQ8)wxM&|/f^YwSHnP`F..6%D2yf-N8 Aw`5K/sq1)W]W:~zmJQu');
define('SECURE_AUTH_SALT', 'Mw1ru@(sATzM f+a:sV`(i-`@5YT%#N |@qvYJ23_s{$WQ>Uht%/qEJ]-V`iizT4');
define('LOGGED_IN_SALT',   '`LIIPa:_gnGR{l)(m)dHAY@TWYRjw5,4.{G(T>g1#`U}KdN-WV@t !1NaL&dYH),');
define('NONCE_SALT',       'lejC-.f|JS|#r-|FH-<`TgO-4g-o+X -b!N4LH9^]_5RuseMl;*xP;m|Roau&t3c');

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
define('WP_DEBUG', true);
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
