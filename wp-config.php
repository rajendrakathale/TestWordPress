<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//  define( 'DB_NAME', 'database_name_here' );
define( 'DB_NAME', 'TestWordPress_db' );



/** MySQL database username */
//  define( 'DB_USER', 'username_here' );
define( 'DB_USER', 'root' );



/** MySQL database password */
//  define( 'DB_PASSWORD', 'password_here' );
define( 'DB_PASSWORD', '' );



/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':iDD7DrbB4#qs<EB,y@V`GJL?lt,~H7{B3sV8LNY1B.1cm#me?uF0fU`1-Od,k.s' );
define( 'SECURE_AUTH_KEY',  'zJQ23C~q1_yms+.JOggO_1qG@#ge<K&j@adU8s;p3ht.[]9tkB#^C%G_5v1cNQhT' );
define( 'LOGGED_IN_KEY',    'VjBjRg*tz*^IJsS.BTX `sEy`-q5M;LGXJ.G:`YKWdKN^b#A$}PL/Q+R*u6z#WBG' );
define( 'NONCE_KEY',        'uVonv![ dzUa2 #cGs.E-1@(=5tF,AY}C|i=18$|MQ-%#h!04A!PUMij<d.H~!S<' );
define( 'AUTH_SALT',        'p}xyhDJqi`>2!l%(FG0i$-k,^52ShsPB&N6lwd/(mmhlD]}4s24{I[J:hz.;s%?9' );
define( 'SECURE_AUTH_SALT', 'kU>gC$fh^R+i9myAbe5JeKJ+Nmx+N0[NFI%2HS3iVGBh<h97wGZ/ijo-HCs=EP1}' );
define( 'LOGGED_IN_SALT',   'H50DsNLrQfmS9imiB~< ~s?BR7?+B*D!W|9lyy!2_DqX47Hj9Jd1Os;XPxBa`Vkt' );
define( 'NONCE_SALT',       'tPMRzjafZ[!3AZT.S w9 j]P<Qe/~O$eW|x$pW6ID(uH|z.9uT@c23QClJJTxG%B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'utf8';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_ALLOW_REPAIR', true);
