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
define( 'DB_NAME', 'misitiowebcarrusel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tE#YfeH)2f!2TXW<9WT4GgH;9I~^?+!Bxh n+vj+Bg?[wR1R|M|zPI:?WR?6>A2L' );
define( 'SECURE_AUTH_KEY',  '~mJ`xhC<JS*,hlqT03}i&nKG-It}{g,9y6k+VYAM!jYGk|lcrZMtcBoSWHkZk=V7' );
define( 'LOGGED_IN_KEY',    'rFwU)xtTD/y4uqpB7fSCcn.%n}U8W&,FL`jF|&*}%1Va]wZ6O]5r5w}#o5AI,f~@' );
define( 'NONCE_KEY',        'n6K {Q%m#,VS{mvcHDOv`a].Z(;tG#M%drT|~k{NP0962|c%0BbmV(`w]7B)/8vf' );
define( 'AUTH_SALT',        'E*GvU(?[y_E1y#z6{mFeVCHQ?<Yp<Vl4be^KRC=-S<q[$|;,Ie]h@<1![g8KUU7}' );
define( 'SECURE_AUTH_SALT', '(6}B8R5UUi=dMovjCB5e 7~^B1P7+&Do-(~>)Mgw.c$56<Xt~WgG*-BrczB.C>m>' );
define( 'LOGGED_IN_SALT',   'HrHMAx{<;_eF2;6Z3!u,D.4]E0tF*l>1CqYVG5q>AK0a SbUU3drk%I(T/4}?3RM' );
define( 'NONCE_SALT',       'tD(A^ZGN^2U5e{34^%1L@+^fwu/&P1do@=hF^yKA/Q(/xj%`!6qF B_b$*V`wq.-' );

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
