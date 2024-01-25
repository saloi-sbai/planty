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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '2sHBqQpR|`~xO}QzZ[{[l,!`r^B=XJ}J5qKlqI=f8}o~GaL.tU+n)NHE<=NQa|R7' );
define( 'SECURE_AUTH_KEY',  ';(C$oBt_V2YF/@-Nb<Nw5y#9E}zcIST=yU}JX~:`+]%K1o+C2Q%UzjMMbUJp(ZA$' );
define( 'LOGGED_IN_KEY',    'HFc$l^5.LNJj0jMog=6ls(},YFLI%F;2PbQw+|p^F~L6gR:nDm7GTs*yacVv3ED.' );
define( 'NONCE_KEY',        '}b@P3joX[Vq+.;*>K(8 _.5sI9,st.:{q>AwFbt{4ot)X+i={tZfq#9H@V:CZZZ[' );
define( 'AUTH_SALT',        'R*dE|`[@O&YQ`)Rxy#YJLqu[y={rsu4,cN`j%(rnz>$}TyaF/FFJ24`@%*C^JdPV' );
define( 'SECURE_AUTH_SALT', 'B04dt ?Im;9gqa@Hr;u5hG8;jn1<{.n%eaog;da> h ]I;DG6m%rA[r]K>9h9[G$' );
define( 'LOGGED_IN_SALT',   'xhFo~)G2Gy?^A?IF]17e15m4@QkVOs]Gm4 a/asObEqL}F7*TPLOnJ.FkwN&{E+#' );
define( 'NONCE_SALT',       'F2jMkcx[&O*$f@!bH$L<ObQOu:fz|CL0z9oI` Zs&5@E%Nd~YZ<h)~X%Ljx^nU=M' );

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
