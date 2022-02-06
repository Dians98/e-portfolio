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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-portfolio' );

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
define( 'AUTH_KEY',         '*W#K<|`;!&K5hAVc);z({Ke6ifW(_sN0gu)5ZQ4u(ze%UUXNk[5/#_,oKpOxmm.I' );
define( 'SECURE_AUTH_KEY',  ':I.B,du{y|a;5K  q}X{4RjUo$#d.XV{xMicA3Ps@&tTL RV{3VgRJ wqJ>q0U$_' );
define( 'LOGGED_IN_KEY',    'S6(B5@X,B Lj4=3t0pv{@3 E)O+,/N}OS%1o;eM<`i-{Y%#~zV:4/^5r]q`zP&m}' );
define( 'NONCE_KEY',        'aTz %a!E6R~4WoTh:u&:,`SlOv)iIxEyklU]yOEB,;:pZwDgt!gk0}^8+(uB>p*E' );
define( 'AUTH_SALT',        '*GQBnRMhlhcf]tgDyEBoMf?M+6Z]J5*1*Z^n^w&nqg!#Z,+xr[`ulVd}!^;4 :X9' );
define( 'SECURE_AUTH_SALT', 'pTu<YJ s_2Y;<U]hw>q3,%(2=<G@5{_*rYVq~A@*vu05(RRrh2rh~)6s`$mec${S' );
define( 'LOGGED_IN_SALT',   'sUr?*`KGO*g/Y3HzJDRfe)A0L[yp+ynWAhGev_CDZ#U-3/d;(/i/Ki{`-kt)d&nj' );
define( 'NONCE_SALT',       '%t)<@xSn8H#~c_/t|7VEg9oM4Q da/5r~<>BE{7R|Bi26q5!LRbMPD.:0(y9s4XN' );

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
