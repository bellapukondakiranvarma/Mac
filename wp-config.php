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
define( 'DB_NAME', 'machine' );

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
define( 'AUTH_KEY',         '*A3rjEbq`iJ0u:VAm//>(]#0N$m=*+Qiy3s~gvGEdyYLF#inFA_3KcM,:HzHzN 0' );
define( 'SECURE_AUTH_KEY',  'VhK7=x@L!eKI8z8o;AmWV&$Q!RSHP@eBL%S40&c^Q$|q.!L;Q>Q.??~tr(HYcV6[' );
define( 'LOGGED_IN_KEY',    'i{RqJ)4-L<k*IS]8o5^!lWN@C}#HBi`ZjOz!~c5U;$0qk/U;#L*;;d+o?izf``g!' );
define( 'NONCE_KEY',        'FdCe&FuVwVCrh){T-t.RnpD,5Fxiz:a]%wQSe|MDn[6( b(/n[EFa[Uum4WQ_l&8' );
define( 'AUTH_SALT',        ':GCEyXNh8fIAN52,Od;Wg}E<.m$e,75@NWU%I(GHKYpv(i59!?KMr*bkDd,BJ?O%' );
define( 'SECURE_AUTH_SALT', '@}|LO#(pTqOH0KMWVBJp%EGCI+PceF 1f:{}z2tKE5LUow9%FRCt*VnmF0q]#Y,9' );
define( 'LOGGED_IN_SALT',   'b&ynO&R?](p9X]v>W[R)iBtr+m>kW]Z*uZ|4H@$Uk|-cXbmhTEk4>)t7&CzB{g.O' );
define( 'NONCE_SALT',       '=%^WZYDOc`-`1$~ED<O5/**K,7xR~XRZ|k&7d8Jj|H%1K$*fSKsTuNfhFcfLwU|o' );

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
