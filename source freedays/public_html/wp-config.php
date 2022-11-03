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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freedays_wp_lmhbt' );

/** MySQL database username */
define( 'DB_USER', 'freedays_wp_t0yuk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'O3n2@Wt@RP4Dk99J' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'brzAhd)N@N0EYn8X3__wunHe&[vw;Yu0:V~n896T1(5HA4]o4p[2*y@_!Xd/Lg_K');
define('SECURE_AUTH_KEY', '8M&jcT4x_)8Y@K5m@)C]M(*9Ws5h3[);m1_88TtN61|#|Aj7uz_(3O(_3&H0P)Hm');
define('LOGGED_IN_KEY', '0C9!w1OTF94Tq7PZbugr/7U:J%[-Y2gzy:C&CQ%4%+:LxPHj!h)9T[Cn*[9B5c]Y');
define('NONCE_KEY', 'ayL8b;(3#EZF*Jrc/F*%|Mjro@3:6(*(#D:mnI4lU3D&i9U3&[8Pc32seG9Qq~06');
define('AUTH_SALT', '35za_1FjTA1!a4Iwt6~pf5z]%+5V|--Q9|9I64)W0;g|#C5GR#59T5Q&/_4M[7M9');
define('SECURE_AUTH_SALT', '3H-U2)za2BvH45:~6ZD1##b09Ze[P8_1Z8|p:1udv5ZPKh0k&9+T8F9(/523Xi7_');
define('LOGGED_IN_SALT', '1303ttvW71%OP5Q7_::KR06]7T(v;xjJ-Q[Ebn|TYe6(h/c9Oi#/O5J|4hB*xmsg');
define('NONCE_SALT', 'UH8WoHIq6J49;s;xO~|/_syEi;)00]r9nTvuASs|61)gI|U!56aK21@3JbguO/*~');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sn15CoajP_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
