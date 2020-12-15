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
define( 'DB_NAME', 'softsquare_task' );

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
define( 'AUTH_KEY',         '-<m2O>-!Y@[xP1qUROO3c6B?qujv0$5MjnBR5AlU*+; mv<Q0G?=prgZLo?Y}^Oj' );
define( 'SECURE_AUTH_KEY',  ']./4Jb>wX[rw20{dppatQ+zwQM`@={T6jmmdJ,E3LXgc*Zm2xbdZ$cr!k<~xM8 a' );
define( 'LOGGED_IN_KEY',    '<@$T~P*w?AYsU_@|4Vd=#c:sXijRAvI$+0^Ba[s|4dFmPT,pu6>,jKfgkdy(NjVA' );
define( 'NONCE_KEY',        ']on/3/Z6!yp4(lGXDy9MG:4-[j@!;YTlpM.,m{xTH,j5qboPl3kU$3~pD@;_iEY`' );
define( 'AUTH_SALT',        'XC46yjCl[V{K,X!#46]<EyO827Xyd18BW06&-Jz{LntIRnHF148]A{|Q-2>0Ck%+' );
define( 'SECURE_AUTH_SALT', ':XwZ 8*H|^Gi5.-z#`1}5BYm,*(v#J3#=82bzg.k)UN{WX5f>0Qz!2xTj_#4{RxE' );
define( 'LOGGED_IN_SALT',   ',QU2cmB%Hhn)P@ocSgc:@9x+ :KNNbL.sKW,$SC-&U/;T3mDw8R,(%r$W{;YX{y)' );
define( 'NONCE_SALT',       'Da@Gr(rY^b[3Ed=z@(-=Kf4 7)MLuaJo@u^E9zjsxO,~;(yUxK|CRCQU,Q@p();u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
