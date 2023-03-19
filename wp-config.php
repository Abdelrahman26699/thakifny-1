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
define( 'DB_NAME', 'thakifny-1' );

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
define( 'AUTH_KEY',         '<Bt[-7.W>Ax9RVFMLhi&a|l6B?Cmkk8m CSiUGM~wlIlv=7O.Zik5oXxfWLV1]FU' );
define( 'SECURE_AUTH_KEY',  'y*w)0g5a]lIqdaR/T}=30NqH(YB/sfmRR02>9WL;0Nk|O:bb|;a(V)S%[X+Z`j@t' );
define( 'LOGGED_IN_KEY',    'U.+Jb]J+CsI|q!c2yLY82qlBUx*{y z2m2LJQz3a]`0sKlfd.OSdQU4Pp,9njTX:' );
define( 'NONCE_KEY',        'JxSsdy}&A|-bvU3q$9152+E8Bc=Js#l=/NUpJ:6h /k4E@ pq}O$&`i}^poUwW,1' );
define( 'AUTH_SALT',        'BAf`a@D jCM7Sn]FsjLsG(8C>$gdQ0tx1lA[%_g~F./lV:T%RC&[sPjQ;_Bs[jT=' );
define( 'SECURE_AUTH_SALT', 'Rb?@,)WRO_9Cj?;vfCP=sR{R0s<wxrE.XMT]z>+<A]t/+wa,*GHJ.M`u!FO{srQ(' );
define( 'LOGGED_IN_SALT',   'kZ){OB];y+%Rrim@lGc%Op|0[v  anu[(G n0a H,uM0{vt*G^3ukc*2$%AAy>Ex' );
define( 'NONCE_SALT',       '&kAH/$Fw10{e$~XnI;b$H{][Rjy^26LLnglC+#N/4?6U!EMMosI}}bQ4Z59lP,8A' );

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
