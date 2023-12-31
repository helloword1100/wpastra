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
define( 'DB_NAME', 'wp_astra' );

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
define( 'AUTH_KEY',         'NxOJP0eOA^>fnqRB|C*dwoRv_UBG<PhDzEw2B o0w`Tc=q2=#NWj|6nRiJHfQX{+' );
define( 'SECURE_AUTH_KEY',  'gjlGJrVTT)8(HEE_C.+#4C(Wqe+RZh*TjDhFx@G$zNNp0EOj-1W|:CI.%1-Y(*W}' );
define( 'LOGGED_IN_KEY',    '@j,DMdiu1VP_7HH+0&dRnM?8dSf]v]/Z[wbK4i+e1k&L)=PjI&(Z/iBVBL#tmkCt' );
define( 'NONCE_KEY',        'e-`i)!sSB}6ld,,tA ddk*oMk3.aKt DzNczx5`G[-V]B<2pd/d>Kb9Or^y8`4rA' );
define( 'AUTH_SALT',        'Gg,gq|Q/H7UuK<Z@>$0P2@rY$3w/?N-+JZcoR2RI,43wr9|>=AqV u7A0|lHoM)2' );
define( 'SECURE_AUTH_SALT', 'v@g8 ,jSE,e`u|JcH;7A+ziws6GFE,#F<^{]~~i^bcT6j[</qK~b+-o1ha=6GT;6' );
define( 'LOGGED_IN_SALT',   'Jhh6gM q P<>M`%J~TCD_2hzOWJFt:&[l8Tq;UdX@.Wt*IjXi8d,`~(0H4Us}k9i' );
define( 'NONCE_SALT',       ';%Lzll|o8|,Xqfg7%okdPF$HQ=.]Nj+JJbb9E6U<b+K+< 98K J4{bzE;he!ddWc' );

/**#@-*/

/**
 * WordPress database table prefix.
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
