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
define( 'DB_NAME', 'ma-medical' );

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
define( 'AUTH_KEY',         'mQo0KejK;6-*?` VHlDuMR!P=1CR?};-AB{R_K[V3ipYs*?u T$4g 3FU9d;{x(X' );
define( 'SECURE_AUTH_KEY',  ':nz|VX7f~Px#I7^Xh~`SXFh/Lz#L*>L MZ!v_+,KE7k@9_dn6n)87lM92N]$?f_J' );
define( 'LOGGED_IN_KEY',    '[=173M-cN6/9C[V}s3&7GDW=l_CpXRJ,4,w|)@;U|baI!hZ!nx`uT~{&1-n1u5,E' );
define( 'NONCE_KEY',        'lqR~DB4Gquen)n@E,!F|0}w1k8_V+@^5J@`6Dtr`WagZ0,7zGS/L4{A/%Kw#Q)xL' );
define( 'AUTH_SALT',        'uu*3HduQA^->[YN!g-F{]3g$`/z@U<-b0{aBR](f Iz[%bxX C&6>GN8dg;P`aUF' );
define( 'SECURE_AUTH_SALT', 'Uf6!{i!_czl=[M]P9{%/$u-:G9;.jvXQZNSqs60c)Cr,rAmQHZW[9wwxigjCrc9M' );
define( 'LOGGED_IN_SALT',   'h6+$jglx*8D-tv>;tudd8ID4]huUWJjr9c?j2o{>Llj^p+)F*]B@z2?;8V.9K`@C' );
define( 'NONCE_SALT',       'H,~b U-=,X$5!6UO&pYN.R23?<}(800d.#0)18@uhWS~-:T<|&LgbSDda#$|Se|i' );

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
