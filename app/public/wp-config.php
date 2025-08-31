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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+u!]cTKr(@kTaj3H;s1Uj9i/i1?P+~_7fI7?Ln8z[EQZ17?$UYd.wt=N3w4a]n9_' );
define( 'SECURE_AUTH_KEY',   'I<!/2r(Y2$(@7Hs-&aKOWHk! .RB$&0v%4oNH Nb8IH<D0)3j!!~Nh[jnro^N7dV' );
define( 'LOGGED_IN_KEY',     'n]c[1_71Dw)HX<5)F&k,EW&8ngFA_NB@6)>HyPIhxP2Lo9jNl7E@C}V*[ggFf{gX' );
define( 'NONCE_KEY',         'l2YiRrZrI#un3PAu:!bi)0bZy<.{1s4&Xb3TB138i@E@}w[*g_ctK+lG@+/)qHP!' );
define( 'AUTH_SALT',         'py9-T 3NrPwK`cKZ:SJwQ&=>Ry9alIO[H+x~:i7FQo_qh,jq_y,RuU`+KdYSv=K7' );
define( 'SECURE_AUTH_SALT',  'g-91(/_OV)bvzh+)U%fyi/vHyp.lmmo4,+9WFHJe_+SIc60V4=M$U*ycyz!wNvF3' );
define( 'LOGGED_IN_SALT',    'S#]j/f>k6<0-s>0R&h<)tQE!UE)5F=s46s4M9]vX3j6OS&`W^5:lJa2]!i{C.U+L' );
define( 'NONCE_SALT',        '4M3qxzTt32$%jv%r6^o}{js?s:g,ON_><SKY;n{yWk*/<{zYQop7+M{V1{g9S>a ' );
define( 'WP_CACHE_KEY_SALT', 'Jw=`y:<:}$_T}%!Y7!0u@iXTPI0#iAPr:<:qBS],VTxq@IQoCA}62)Is}CP7wgZS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
