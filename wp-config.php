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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopwithus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4*R:8gm)LqO{njmkl>n(M35ed_.$?gcvde-X::s(Wu(F7!FcQhg5q2?Y,;FQOhLw' );
define( 'SECURE_AUTH_KEY',  '{%@E0OtVzBfC7vXP!<-Cqsw}A}f?=`TvM|G+T{m,oj$(LxjVbOT(u16^lXZV]sbr' );
define( 'LOGGED_IN_KEY',    '}R!=i=16Rs$Ue`4u406|y<jIOF4*M:!vSy(B%o?-wT+Bn[s;T=- yeV:tvl@eIs1' );
define( 'NONCE_KEY',        'w/F%VpEX!]#Sj=QiZ%9<$X?B6$L [hLQav!c_cGkd!qiU2<Qj>cChjA(<gH*_l^P' );
define( 'AUTH_SALT',        'f[|Gog#b}<D)xO(n*B7f4[b+:S)=J)>J<wvXf&r;X$jD}N7=,OSoWD}D+&gn6l2r' );
define( 'SECURE_AUTH_SALT', 'tJm=xg~Bt,yI7cJ$SI-cu1%kB@hm`;1~_!JbwmcM3r(_ZsJ%N<B.?g2>{v428?[x' );
define( 'LOGGED_IN_SALT',   '%35*Ih$T0u%3S2uH`kl:}T$KF,Skn((Aca*Q~x13.:m*Nr;_B4.6Die?ab^[&+fu' );
define( 'NONCE_SALT',       ']:@#T.*qZg)8nn^XPQN@2e7d]5PJ cW#sOM=K-fsq7r2w,<M,P!--u?(v =o<#$:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sw_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
