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
define( 'DB_NAME', 'dbproycomp' );

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
define( 'AUTH_KEY',         '0>1?yl$zGEA=HnYzVcCdj^_w#B[6@F7,cy;wtp{V(>P +u/AUI;Q^YjZ}| ^/&)=' );
define( 'SECURE_AUTH_KEY',  'M[1_.fT^b2hjQcM7%j,Zbv<mvvXh5wP).R[2%|gr5n5NwVx74qdBs8@}$ez+J^o,' );
define( 'LOGGED_IN_KEY',    'D>YrRA[fg RVM(D~DJ><l]q7A4?P,m*,l<r`ge&o%~o_#o*L#&M)|[#J(l^,cun]' );
define( 'NONCE_KEY',        'd}gvAU6r:MT/J&S2+jjPJj!$5.>Ql0P<=W,`!u@Qyf,yTha%}X_1zECVessDGnL*' );
define( 'AUTH_SALT',        'QAQ1k<6!e>*0lmnU+xZ)$`0/RzCTrs}r5q=8dP[RK|@yGr803.SM!}-C9:M3oHrV' );
define( 'SECURE_AUTH_SALT', '<7Uw_R9QgAQog:KxX.3C8l}/b8Dqrz?Zj/n T!Zu;7,o*Hn<X[[GJy6sGHE+nc,;' );
define( 'LOGGED_IN_SALT',   '/qeS =s-D&ZP)oBo>:!7{:@CROBOJY9l3*$i?N__9yn8Juak+seUpj(*z<O#cKSy' );
define( 'NONCE_SALT',       'F_d>JAtHe8q{CyS<5h]r^1`MzUD<s9% RP3Sz>*pq/]Z|!,fiNm@GG-[jO:b`R#e' );

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
