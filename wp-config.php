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
define( 'DB_NAME', 'aligngroup' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*=X#lU}J<`qiA!={Yb&y!tM8E~eruAo,uT)vYbWu*:d8<k7T3kN[.HYopgh>2js>' );
define( 'SECURE_AUTH_KEY',  '1NNJjih~KgQxy<ET_<wgNZ7Tfo3{M{m^WfLNRkEtJOom.$yRFN>aYTcucfP] d2R' );
define( 'LOGGED_IN_KEY',    '@:0[,a?,iz~_:gsKP3uC@V}t:7{=>v#i<u[|+NRb~?4_wa<.GKZw[7SffqUr}e@v' );
define( 'NONCE_KEY',        'hM]kg<@w*y*R&lgq;*TOW]Vm3RU0h)T8:40Du$[|t95vsi6aYYQl,;P.HZhGK/ou' );
define( 'AUTH_SALT',        'UUyJHr0|Jqbj!`c*&FseW.zReTV,.}qsC2,]?dFQ6=)QoA0h33N$#dLG7 n8#<?6' );
define( 'SECURE_AUTH_SALT', '44M&FCGrlL:c(,3!w*V6kkdF>QT.w_`%v}mnyn~a;|Hv]lPL{IjcxlH5y n{]V2v' );
define( 'LOGGED_IN_SALT',   ' =~uu}n0Jx)={Bw6=s$!}1xLy:{&Z,U:_fx0%M]`4T`GvWWF{IO7=kp<]&?@}3G?' );
define( 'NONCE_SALT',       '.Vz&}8w`}%byJPUtHJrhc(pMb wg-0,X/l}%O=ZV[O!d71L.v=Ui[*gyG$@W8,`h' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'alignarchitechture_';
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
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
